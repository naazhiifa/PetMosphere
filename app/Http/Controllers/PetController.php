<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\PetShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class PetController extends Controller

{

    public function index(Request $request)
    {

        if ($request->search) {
            $petshop = PetShop::where('petshop', 'LIKE', "%$request->search%")
                ->paginate(8);

            return view('welcome', compact('petshop'));
        }

        $petshop = PetShop::paginate(8);
        return view('welcome', compact('petshop'));
    }

    public function petpet()
    {
        $products = PetShop::all();
        return view('products', [
            'petshop' => $products
        ]);
    }
    public function create()
    {
        return view('task.create');
    }


    public function edit($id)
    {
        $petshop = PetShop::find($id);
        return view('task.edit', compact('petshop'));
    }
    public function store(Request $request)
    {
        $petshop = PetShop::create($request->validate([
            'Product' => 'required',
            'Price' => 'required',
            'Description' => 'required',
        ]));
        if ($request->hasFile('Product')) {
            $request->file('Product')->move('imageproduct/', $request->file('Product')->getClientOriginalName());
            $petshop->Product = $request->file('Product')->getClientOriginalName();
            $petshop->save();
        }
        return redirect('/petpet')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {

        $petshop = PetShop::where($request->validate([
            'Price' => 'required',
            'Description' => 'required',
        ]));

        $petshop = PetShop::find($id);
        $petshop->update($request->all());

        if ($request->hasFile('Product')) {
            $destination = 'imageproduct/' . $petshop->Product;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $request->file('Product')->move('imageproduct/', $request->file('Product')->getClientOriginalName());
            $petshop->Product = $request->file('Product')->getClientOriginalName();
        }

        $petshop->save();
        return redirect('/petpet');
    }

    public function destroy($id)
    {
        $petshop = PetShop::find($id);
        $petshop->delete();

        return redirect('/petpet');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetShop;

class HomeController extends Controller
{
    
    public function index(){
        return view('welcome');
    }
    
    
    // public function index(Request $request){
        //index : manggil semua data
        //untuk menampilakn data dari suatu model atau resource

    //     if ($request->search) {
    //         $petshop = PetShop::where('petshop', 'LIKE', "%$request->search%")
    //         ->paginate(5);

    //         return view('welcome', [
    //             'data' => $petshop
    //         ]);

    //     } 

    //     $petshop = PetShop::paginate(5);
    //     return view('welcome', [
    //         'data' => $petshop
    //     ]); 

    // }

}

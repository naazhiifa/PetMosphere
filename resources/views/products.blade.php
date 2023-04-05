@extends('layouts.app')

@section('main')
    
    {{-- <a href="{{ url('/petshop/data/create') }}" class="btn btn-outline-success">Add Product</a> --}}
    
    <br>
    <div class="col-lg-6 col-md-7 align-self-center">
        <h2>Products</h2>
    </div>
    <a href="{{ url('/petshop/data/create') }}" class="btn btn-outline-success">Add Product</a>

    <div class="row pb-5 mb-4">
        @foreach ($petshop as $item)
            <div class="col-lg-3 col-md-8 mb-4 mb-lg-0 ">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4" name="Product"><img src="{{ asset('imageproduct/' . $item->Product) }}"
                            alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="#" class="text-dark" name="Price">{{ $item->Price }}</a></h5>
                        <p class="small text-muted font-italic" name="Description">{{ $item->Description }}
                        </p>
                        <form action="{{ url("/petshop/$item->id") }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ url("/petshop/$item->id/edit") }}"
                                class="btn btn-labeled btn-info text-white">edit</a>
                            <button type="submit" class="btn btn-labeled btn-danger">
                                <span class="btn-label"><i class="fa fa-trash"></i></span>delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ url('/petshop') }}" class="btn btn-primary btn-sm">Back</a>
@endsection

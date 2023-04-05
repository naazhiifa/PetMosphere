@extends('layouts.app')
@section('main')

    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                <section class="vh-100">
                    <div class="container py-8 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-2 text-center">

                                    <form action="{{ url("petshop/$petshop->id") }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <h3 class="mb-5">Edit Product</h3>
                                        <div class="form-outline mb-3">
                                            <label class="form-label">Product</label>
                                            <input name="Product" type="file" class="form-control">
                                            <img src="{{ asset('imageproduct/' . $petshop->Product) }}" alt=""
                                                style="width: 80px;">
                                            @error('Product')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label">Price</label>
                                            <input name="Price" type="text"
                                                class="form-control form-control" value="{{ $petshop->Price }}" />
                                            @error('Price')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label">Description</label>
                                            <input name="Description" type="text"
                                                class="form-control form-control-lg" value="{{ $petshop->Description }}"
                                                placeholder="Enter a valid Description" />
                                            @error('Description')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('main')
    <div class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>
        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right"
                        style="background: hsla(0, 0%, 100%, 0.55);
                        backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Add New Product</h2>
                            <form enctype="multipart/form-data" method="POST" action="{{ url('/petshop') }}">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <!-- Email input -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Product</label>
                                    <label for="exampleFormControlFile1">Input File</label>
                                    <input name="Product" type="file" id="image" class="form-control-file"
                                        id="exampleFormControlFile1" value="{{ old('Product') }}">
                                    <br>
                                    @error('Product')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <!-- Password input -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Price</label>
                                    <input name="Price" type="text" class="form-control" value="{{ old('Price') }}">
                                    @error('Price')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <input name="Description" type="text" class="form-control"
                                        value="{{ old('Description') }}">
                                    @error('Description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                            </form>
                            <br>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://i.pinimg.com/564x/61/7a/03/617a032c91678c37343209bb6bef2f6d.jpg"
                    class="w-100 rounded-4 shadow-4" alt="" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    </div>
    <!-- Section: Design Block -->
@endsection

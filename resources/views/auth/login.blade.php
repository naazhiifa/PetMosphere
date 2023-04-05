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
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <h2 class="fw-bold mb-5">Hello! PetMosphery</h2>
                                <form>
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Email address</label>
                                        <input name="email" type="email" class="form-control"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4">Password</label>
                                        <input name="password" type="password" class="form-control"
                                            value="{{ old('password') }}">
                                        @error('password')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>

                                    <a href="{{ route('password.request') }}" class="btn btn-link">
                                        Forgot your Password?
                                    </a>
                                </form>
                            </form>
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

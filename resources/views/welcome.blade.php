@extends('layouts.app')

@section('main')
    
    <img src="https://images.squarespace-cdn.com/content/v1/57606b827c65e4973d0b4d33/1469422211205-NRMLL88TN7U30GKJ77LQ/Untitled+design+%283%29.png?format=2500w"
        class="img-thumbnail" alt="...">
    <br></br>
    <div class="container py-5">

        <!-- First Row [Prosucts]-->
        <h2 class="font-weight-bold mb-2">  Pet Foods 🐕</h2>
        <p class="font-italic text-muted mb-4">Here <mark> can find a lot of pet food </mark> to the price, the quality you
            choose</p>
        <br></br>
        <div class="row pb-5 mb-4">
            @foreach ($petshop as $item)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4" name="Product"><img src="{{ asset('imageproduct/' . $item->Product) }}"
                                alt="" class="img-fluid d-block mx-auto mb-3">
                            <h5> <a href="#" class="text-dark" name="Price">{{ $item->Price }}</a></h5>
                            <p class="small text-muted font-italic" name="Description">{{ $item->Description }}
                            </p>
                            <button type="button" class="btn btn-outline-primary">Add To Cart</button>
                            <form action="{{ url("/petshop/$item->id") }}" method="POST">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <section>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-xl-8 text-center">
                        <br>
                        <br>
                        </br>
                        </br>
                    </div>
                    <div class="testimonial4 py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 align-self-center">
                                    <h2>Hello, Mosphery! 👋🏻</h2>
                                    <h3><em> Of People Are <mark>Happy To Our Products</mark></em></h3>
                                    <div class="owl-carousel owl-theme testi4 mt-4">
                                        <div class="item">
                                            <p>Very fast delivery, the goods are also very high quality, the price is also
                                                very good according to the goods, hopefully petmosphere is always
                                                successful, thank you.</p>
                                            <h6 class="mt-4 mb-0 font-weight-normal">Michelle Anderson</h6>
                                            <span>Meji Owner</span>
                                        </div>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5">
                                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/testimonial/women.png"
                                        alt="wrapkit" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-9 mb-5">
                    <h2 class="font-weight-bold mb-2">The Animals</h2>
                    <h5><mark> and food that you can find here</mark></h5>
                    <br></br>
                    <div class="col-lg-3 col-md-7 mb-4 mb-lg-8">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Q1eA7Vv_MeiWSqKJj7chFqQFqbqw0rbUgQ&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Bird</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKVdlhyMAY41QQ8rCRNJIJ-0u3V9wnWDxgng&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Hamster</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS3coQuFOzc4g_skGWwTB1-WQuTOkNAskY1XGvFkLBTi8vAOdouOAy9ThCGiYXLyN0zro&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Cat</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKc5e-k4ARgQ6i05gNKhUG_tqpp6jOaCQQ1w&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">chicks</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAdMvlyK9wP8G1Ecc9GCjr8RNUMCHixs_MeHUO5y9xNBQyZJD8iE3VAHu8rvZ-w0CwagI&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Dog</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7T2fGBBEWv3CPvG4MvGNMxTxlrG7P4QFiDQ&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Sugar Glider</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf6Vlh1zPIkY7K_jKCwkjgj71JrfJZoGED4Q&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Horse</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded shadow-sm border-0" class="text-center p-3"
                            style="background-color: #EEE9DA;">
                            <div class="card-body p-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI__Jz7VNpC-i3mDVO75Y2ZQ0-WCKC7lTTIg&usqp=CAU"
                                    alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5> <a href="#" class="text-dark">Fish</a></h5>
                            </div>
                        </div>
                    </div>
            </section>
            <a id="back-to-top" href="#" class="btn btn-link btn-lg back-to-top" role="button"><i
            class="fas fa-chevron-up">Back To Top</i></a>
        </div>
    </div>
@endsection

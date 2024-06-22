@extends('include.navbar')
@section('content')
    <section>


        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active bg-1">
                    <div class="homeLayer">
                        <div class="layerContent d-flex flex-column justify-content-center">
                            <h1 class="big-font">Special Trip</h1>
                            <p class="h4">We can recommend your journey for you based on your choice</p>
                            <div>
                                <a href="{{ route('Recommended') }}" class="btn btn-primary mt-5 p-3 ">
                                    <p class="h5">Recommend for me</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-2">
                    <div class="homeLayer">
                        <div class="layerContent d-flex flex-column justify-content-center">



                            <h1 class="big-font">Our plans</h1>
                            <p class="h4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.
                            </p>
                            <div>
                                <a href="{{ route('ourplans') }}" class="btn btn-primary mt-5 p-3">
                                    <p class="h5">See Our plans</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-3">
                    <div class="homeLayer">
                        <div class="layerContent d-flex flex-column justify-content-center">
                            <h1 class="big-font">Activities</h1>
                            <p class="h4">We can recommend your journey for you based on your choice</p>
                            <div class="">
                                <a href="{{ route('restaurants') }}" class="btn btn-primary mt-5 p-3">
                                    <p class="h5">See Our Activities</p>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
<section class="easy">
<div class="easysh">
    <h1 class="poppins-black text-center">
       Easy 
    </h1>
<div class="container">
<div class="row">
<div class="col-lg-4 ">
<a href="#" class="btn btn-primary w-100">Restaurant</a>

</div>
<div class="col-lg-4">
<a href="#" class="btn btn-primary w-100">Restaurant</a>

</div>
<div class="col-lg-4">
<a href="#" class="btn btn-primary w-100">Restaurant</a>

</div>
</div>
<div class="row">
<div class="col-lg-4 ">
<a href="#" class="btn btn-primary w-100">Restaurant</a>

</div>
<div class="col-lg-4">
<a href="#" class="btn btn-primary w-100">Restaurant</a>

</div>
<div class="col-lg-4">
<a href="#" class="btn btn-primary w-100">Restaurant</a>

</div>
</div> 


</div>
</div>
</section>

    <section class="items mb-5">
        <div class="container">
            <div class="headline d-flex text-centre ">
                <h1 class="poppins-extrabold">Tour places</h1>


            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5" >
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5" >
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5" >
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5" >
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="rating m-3 ">
                            <i class="fa-solid fa-star"></i><!-- regular-- -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>

                        </div>
                        <div class="parent position-relative">
                            <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top img-con"
                                alt="...">
                            <div class="child position-absolute bottom-0 start-0 bg-light fs-4 poppins-light p-2">
                                <p>Tour places </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
    </section>
@endsection

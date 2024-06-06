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
                                <a href="{{ route('Recommended') }}" class="btn btn-primary mt-5 p-3 "><p class="h5" >Recommend for me</p></a>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="carousel-item bg-2">
                    <div class="homeLayer">
                        <div class="layerContent d-flex flex-column justify-content-center">



                                    <h1 class="big-font">Our plans</h1>
                                    <p class="h4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
                                    <div>
                                    <a href="{{ route('ourplans') }}" class="btn btn-primary mt-5 p-3"><p class="h5" >See Our plans</p></a>
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
                                <a href="{{ route('restaurants') }}" class="btn btn-primary mt-5 p-3"><p class="h5" >See Our Activities</p></a>
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


    <section class="items">
        <div class="container">
            <div class="headline d-flex text-centre ">
                <h1>Tour places</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
                <a href="{{ route('Tourplaces') }}" class="btn btn-primary">See More</a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/momo-grill-by-ramnas-manikas-7-683x1024.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="hotel1.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="items ">
        <div class="container">
            <div class="headline d-flex text-centre ">
                <h1>Hotels</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
                <a href="{{ route('hotels') }}" class="btn btn-primary">See More</a>
            </div>
            <div >
                <div class="row">
                <div class="col-lg-3 col-md-6 ">
                    <div class="card h-100">
                        <img src="img/273680842.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Grand Nile hotel </h5>
                            <p class="card-text">Grand Tower Hotel features elegantly decorated rooms and suites that
                                include a work desk with cable channels and a minibar. All accommodations include
                                exquisite bathrooms with amenities and a hairdryer.</p>

                            <a href="hotel1.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="card h-100">
                        <img src="img/469090348z.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Central cairo hotel</h5>
                            <p class="card-text">Central Cairo Hotel is located in Cairo, within 1.3 km of The Egyptian
                                Museum and 3 km of Cairo Tower. The property is around 1.3 km from Tahrir Square, 2.1 km
                                from Al-Azhar Mosque and 2.5 km from El Hussien Mosque. The accommodation provides
                                internet

                            </p>
                            <a href="hotel2.php" class="btn btn-primary ">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ">
                    <div class="card h-100">
                        <img src="img/519346238.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kempinski Nile Hotel</h5>
                            <p class="card-text">Located in Cairo’s affluent Garden City district, Kempinski Nile Hotel
                                offers luxurious rooms on the shores of the Nile River. It features a wellness centre
                                and a rooftop swimming pool.Each of Kempinski’s rooms offer free WiFi, high definition
                                LCD TVs</p>
                            <a href="hotel3.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ">
                    <div class="card h-100 ">
                        <img src="img/483731246.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hilton Cairo Zamalek Residences </h5>
                            <p class="card-text">The Hilton Zamalek Residences hotel is set on the picturesque island
                                of Zamalek among the waters of the River Nile. This hotel has an outdoor heated swimming
                                pool adjacent to children </p>
                            <a href="hotel4.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="items ">
        <div class="container">
            <div class="headline d-flex text-centre ">
                <h1>Restaurants</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
                <a href="{{ route('restaurants') }}" class="btn btn-primary">See More</a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/cf0f1c8b-ff5d-4011-80aa-3dd02d046749.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Koshary Abou Tarek </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>

                            <a href="restaurant1.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/qasr.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Qasr ElKbabgi</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="restaurant2.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/465657497rr.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Nile Ritz-Carlton </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="restaurant3.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="img/al-khal.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Al Khal Egyptian Restaurant</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="restaurant4.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('include.navbar')


@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-12 h-50 mb-5">
            <div class="row">
                <div class="col-6 h5">
                <img class="w-100 h-100
                " src="{{URL::asset($hotel_info -> imgpath)}}" alt="">
            </div>


                <div class="col-6 h5 ">


                    <h1 class="text-center">{{ $hotel_info -> Hotels}}</h1>
                    <ul class="navbar-nav p-5 gap-3">
                        <li>  <span class="fa-solid fa-clock me-3"></span>{{ $hotel_info -> Opening_Hours}}</li>
                  <li > <label  class="fa-solid fa-clock me-3">Type:</label> {{ $hotel_info -> Type}}</li>
                  <li>  <label class="fa-solid fa-clock me-3">Region:</label>{{ $hotel_info -> Region}}</li>
                    <li>  <label class="fa-solid fa-clock me-3">Rating:</label>{{ $hotel_info -> Rating}}</li>
                        <li>  <label class="fa-solid fa-clock me-3">Budget:</label>{{ $hotel_info -> Budget}}</li>
                            <li>  <label class="fa-solid fa-clock me-3">Facilities:</label>{{ $hotel_info -> Facilities}}</li>
                </ul>
                </div>
            </div>
        </div>



        <div class="col-12">

                <div class="row">
                  <div class="col-lg-6">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Details</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Images</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="textimg">
                          <!--هنا مكان ال form-->
                          {{$hotel_info -> smalldetails }}
                          <h1></h1>
                          <p></p>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <section class="ink">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-3">
                                <div class="imgtest">
                                  <img src="img/273680842.jpg" alt="">
                                </div>
                                <div class="col-lg-3">
                                  <div class="imgtest">
                                    <img src="img/273680842.jpg" alt="">
                                  </div>



                                </div>
                                <div class="col-lg-3">
                                  <div class="imgtest">
                                    <img src="img/273680842.jpg" alt="">
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="imgtest">
                                      <img src="img/273680842.jpg" alt="">
                                    </div>


                                  </div>
                        </section>





                      </div>


                    </div>



                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110496.81524393763!2d31.550567269822537!3d30.064804215894625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583da2d8c1b967%3A0x182d4ca6361b6a8b!2z2YPZitmF2KjZhtiz2YPZig!5e0!3m2!1sar!2seg!4v1709068346318!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>


@endsection

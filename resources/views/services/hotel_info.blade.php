@extends('include.navbar')


@section('content')

    <div class="container">
        <div class="row mt-3">

            <h1 class="mb-3">{{ $hotel_info->Hotels }}</h1>

            <div class="col-sm-12 col-md-12 d-flex justify-content-between mb-3">

                    <span class="badge text-bg-c fs-6">{{ $hotel_info->Region }}</span>       <i class="fa-regular fa-heart fa-xl color1"></i>
                </div>





            <div class="col-sm-12 col-md-12  ">
                <div class="row g-0  rounded rounded-5 overflow-hidden">
                    @foreach ($img as $img)

                    <div class="col-md-4 p-1"><img class="w-100 h-100 " src="{{ URL::asset('img/Hotels/'.$img-> imgpath )}}"
                            alt=""></div>
@endforeach
                </div>
            </div>



            <div class="container ">
       <div class="amen">
       <div class="row ">
        <h1 class="hzz poppins-black">
            . Room features
        </h1>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-clock"></i>
                    <p class="amenity-category">Opening Hours</p>
                    <p class="amenity-text">{{ $hotel_info->Opening_Hours }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-dollar-sign"></i>
                    <p class="amenity-category">Type</p>
                    <p class="amenity-text">{{ $hotel_info->Type }}
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-star"></i>
                    <p class="amenity-category">Rating</p>
                    <p class="amenity-text">{{ $hotel_info->Rating }}
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-sack-dollar"></i>
                    <p class="amenity-category">Budget</p>
                    <p class="amenity-text">{{ $hotel_info->Budget }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-spa"></i>
                    <p class="amenity-category">relaxation</p>
                    <p class="amenity-text"> Spa</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-person-swimming"></i>
                    <p class="amenity-category">Swimming</p>
                    <p class="amenity-text">pool</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-dumbbell"></i>
                    <p class="amenity-category">Body Building</p>
                    <p class="amenity-text">Gym</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amenity-card">
                    <i class="amenity-icon fas fa-utensils"></i>
                    <p class="amenity-category">Food</p>
                    <p class="amenity-text">Restaurant</p>
                </div>
            </div>
        </div>

       </div>
    </div>




            <div class="col-md-12">



            <div class="hotel-box mb-4 mt-4">
  <h2>Hotel Paradise</h2>
  <p>Located on the beachfront, Hotel Paradise offers stunning views of the ocean and luxurious amenities to make your stay unforgettable.</p>

</div>





                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110496.81524393763!2d31.550567269822537!3d30.064804215894625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583da2d8c1b967%3A0x182d4ca6361b6a8b!2z2YPZitmF2KjZhtiz2YPZig!5e0!3m2!1sar!2seg!4v1709068346318!5m2!1sar!2seg"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        @endsection

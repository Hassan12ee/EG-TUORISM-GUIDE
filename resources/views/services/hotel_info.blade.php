@extends('include.navbar')


@section('content')
    <div class="container">
        <div class="row mt-3">

            <h1 class="mb-3">{{ $hotel_info->Hotels }}</h1>

            <div class="col-sm-12 col-md-12   d-flex justify-content-between mb-3">

                    <span class="badge text-bg-c fs-6">{{ $hotel_info->Region }}</span>       <i class="fa-regular fa-heart fa-xl color1"></i>
                </div>





            <div class="col-sm-12 col-md-12  ">
                <div class="row g-0  rounded rounded-5 overflow-hidden">

                    <div class="col-md-4"><img class="w-100 h-100" src="{{ URL::asset($hotel_info->imgpath) }}"
                            alt=""></div>
                    <div class="col-md-4"><img class="w-100 h-100" src="{{ URL::asset('img/273680842.jpg') }}"
                            alt=""></div>
                    <div class="col-md-4"><img class="w-100 h-100" src="{{ URL::asset('img/273680842.jpg') }}"
                            alt=""></div>
                    <div class="col-md-4"><img class="w-100 h-100" src="{{ URL::asset('img/273680842.jpg') }}"
                            alt=""></div>
                    <div class="col-md-4"><img class="w-100 h-100" src="{{ URL::asset('img/273680842.jpg') }}"
                            alt=""></div>
                    <div class="col-md-4"><img class="w-100 h-100" src="{{ URL::asset('img/273680842.jpg') }}"
                            alt=""></div>
                </div>
            </div>



            <div class="row mb-3 mt-3">
                <div class="col-md-6"><span class="fa-solid fa-clock me-3"></span>{{ $hotel_info->Opening_Hours }}
                </div>
                <div class="col-md-6"><label class="fa-solid fa-clock me-3">Type:</label> {{ $hotel_info->Type }}
                </div>

                <div class="col-md-6"><label class="fa-solid fa-clock me-3">Rating:</label>{{ $hotel_info->Rating }}
                </div>
                <div class="col-md-6"><label class="fa-solid fa-clock me-3">Budget:</label>{{ $hotel_info->Budget }}
                </div>
                <div class="col-md-6"><label
                        class="fa-solid fa-clock me-3">Facilities:</label>{{ $hotel_info->Facilities }}</div>

            </div>


            <div class="col-md-12">




                <h1></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eligendi fuga saepe, asperiores soluta
                    magni error deleniti quas, at assumenda veritatis officia reprehenderit? Vitae excepturi ipsam officia
                    incidunt optio ad ut dignissimos, eligendi quam, facilis neque blanditiis qui magni. Porro cum tempore
                    tenetur explicabo facere nobis deleniti saepe ullam labore, rerum eaque sit optio accusantium nihil
                    inventore incidunt, architecto ad error dolores officiis magnam culpa mollitia reiciendis vitae? Nisi
                    quae asperiores ipsa quaerat neque aliquam magnam culpa sunt ratione eaque itaque nihil, expedita maxime
                    totam harum ducimus cupiditate iste aperiam ipsam aut molestias. Tempore asperiores, qui ex eveniet sunt
                    repellendus.</p>





                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110496.81524393763!2d31.550567269822537!3d30.064804215894625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583da2d8c1b967%3A0x182d4ca6361b6a8b!2z2YPZitmF2KjZhtiz2YPZig!5e0!3m2!1sar!2seg!4v1709068346318!5m2!1sar!2seg"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        @endsection

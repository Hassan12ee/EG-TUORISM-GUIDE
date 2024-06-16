@extends('include.navbar')
@section('content')
    <section class="items p-80">
        <div class="container-fluid">
            <div class="headline d-flex text-centre ">
                <h1>Restaurants</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
            </div>


            <div class="row">


<!--
@foreach ($view as $views)
                    <div class="col-lg-3 col-md-6">
                        <div class="card d-flex ">
                            <div class="h-100"><img src="{{ URL::asset(''. $views-> imgpath) }}" class="rounded  d-block card-img-top"
                                alt="..."></div>
                                <div class="card-body"> <div class="d-flex justify-content-between">
                                    <span class="badge text-bg-secondary">{{ $views-> Region }}</span>       <i class="fa-regular fa-heart "></i></div>
                                  <h5 class="card-title text-center">{{ $views-> Place }}</h5>
                                  <span class="fa-solid fa-clock me-3"></span>{{ $views -> Opening_Hours}}
                                  <h6 class="card-text ">{{ $views-> Food }} Food</h6>
                                  <h6 class="card-text ">Ambiance : {{ $views-> Ambiance }} </h6>
                                  <h6 class="card-text ">Average Cost : {{ $views-> Average_Cost }}$ </h6>
                                  <div class="rating">
                                    <i class="fa-solid fa-star"></i>            <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                    {{ $views-> Rating }}/5
                                  </div>
                                  <p class="card-text">
                                    <a href="{{ url('restaurants/plan/' . $views->ID) }}" class="btn btn-primary">Add to plan</a></p>
                                </div>
                        </div>
                    </div>

            </div> @endforeach  -->
<!-------------------------------------------->
@foreach ($view as $views)
<div class="col-md-6 col-lg-6 col-xl-4 ">
<div class="card mb-3 ">
    <div class="row g-0">
      <div class="col-md-5">
        <img src="{{ URL::asset(''. $views-> imgpath) }}" class="rounded w-100 h-100 mx-auto  " alt="...">
      </div>
      <div class="col-md-7">
        <div class="card-body"> <div class="d-flex justify-content-between">
            <span class="badge text-bg-secondary">{{ $views-> Region }}</span>       <i class="fa-regular fa-heart "></i></div>
          <h5 class="card-title text-center ubuntu-bold">{{ $views-> Place }}</h5>
          <span class="fa-solid fa-clock me-3"></span>{{ $views -> Opening_Hours}}
          <h6 class="card-text ">{{ $views-> Food }} Food</h6>
          <h6 class="card-text ">Ambiance : {{ $views-> Ambiance }} </h6>
          <h6 class="card-text ">Average Cost : {{ $views-> Average_Cost }}$ </h6>
          <div class="rating">
            <i class="fa-solid fa-star"></i><!-- regular-- -->
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half"></i>
            {{ $views-> Rating }}/5
          </div>
          <p class="card-text">
            <a href="{{ url('restaurants/plan/' . $views->ID) }}" class="btn btn-primary">Add to plan</a></p>
        </div>
      </div>
    </div>
</div>
  </div>
 @endforeach
            <div class="d-flex justify-content-center">
                {!!  $view -> links() !!}
                </div>

        </div>
    </section>
@endsection

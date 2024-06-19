@extends('include.navbar')
@section('content')
    <section class="items p-80">
        <div class="container">
            <div class="headline d-flex text-centre ">
                <h1>Tour Places</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
            </div>


            <div class="row">

                @foreach ($view as $views)
                <div class=" col-md-6  ">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-5 img-con">
                        <img src="{{ URL::asset(''. $views-> imgpath) }}" class="rounded w-100 h-100  " alt="...">
                      </div>

                      <div class="col-md-7">
                        <div class="card-body"> <div class="d-flex justify-content-between">
                            <span class="badge text-bg-secondary">{{ $views-> Region }}</span>       <i class="fa-regular fa-heart "></i></div>
                          <h5 class="card-title text-center ubuntu-bold">{{ $views-> Place }}</h5>
                          <span class="fa-solid fa-clock me-3"></span>{{ $views -> Opening_Hours}}
                          <h6 class="card-text ">{{ $views-> Type }} Food</h6>
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
                          <div class="mt-3">
                          <a href="{{ url('hotels/Content/'.$views -> ID ) }}" class="btn btn-primary">see more</a>
                          <a href="{{ url('hotels/plan/' . $views->ID) }}" class="btn btn-primary">Add to plan</a>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                  </div>
                 @endforeach

                @foreach ($view as $views)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{ URL::asset("img/momo-grill-by-ramnas-manikas-7-683x1024.jpg") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $views->Place }}</h5>


                                <a href="{{ url('tourist_place/Content/' . $views->id) }}" class="btn btn-primary">see more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {!!  $view -> links() !!}
                </div>



        </div>
    </section>
@endsection

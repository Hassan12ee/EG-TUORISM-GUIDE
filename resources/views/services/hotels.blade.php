@extends('include.navbar')
@section('content')

<section >
    <div class="container">



       <div class="headline d-flex text-centre ">
          <h1>Hotels</h1>
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
                  <h5 class="card-title text-center ubuntu-bold">{{ $views-> Hotels }}</h5>
                  <span class="fa-solid fa-clock me-3"></span>{{ $views -> Opening_Hours}}
                  <h6 class="card-text ">{{ $views-> Type }} Hotel</h6>
                  <h6 class="card-text ">Facilities : {{ $views-> Facilities }} </h6>
                  <h6 class="card-text ">Average Cost : {{ $views-> Budget }} </h6>

                  <div class="rating" id="hotels" >

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

<div class="d-flex justify-content-center mt-5">
                {{ $view -> links() }}

            </div>

       </div>
    </div>

</section>
@endsection

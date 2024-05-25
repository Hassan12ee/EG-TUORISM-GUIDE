@extends('include.navbar')
@section('content')
<section class="items p-80">
    <div class="container">
       <div class="headline d-flex text-centre ">
          <h1>Hotels</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
       </div>


       <div class="row">



@foreach ($view as $view )



             <div class="col-lg-3 col-md-6">
                <div class="card">
                   <img src="{{URL::asset($view -> imgpath)}}" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 class="card-title">{{$view -> nameh}}</h5>
                      <p class="card-text">{{$view -> smalldetails}}</p>

                      <a href="#" class="btn btn-primary">see more</a>
                   </div>
                </div>
             </div>
             @endforeach
       </div>





    </div>
</section>
@endsection

@extends('include.navbar')
@section('content')
<section >
    <div class="container">
       <div class="headline d-flex text-centre ">
          <h1>Hotels</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
       </div>


       <div class="row">



@foreach ($view as $views )



             <div class="col-lg-3 col-md-6">
                <div class="card H-100">

                   <img src="{{URL::asset('img/469090348z.jpg'  /*$views -> imgpath*/)}}" class="rounded card-img-top" alt="...">

                   <div class="card-body d-flex flex-column justify-content-between">
                      <h5 class="card-title">{{$views -> Hotels}}</h5>


                      <a href="{{ url('hotels/Content/'.$views -> ID ) }}" class="btn btn-primary">see more</a>
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

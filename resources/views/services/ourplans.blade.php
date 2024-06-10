@extends('include.navbar')
@section('content')
<section class="items p-80">
    <div class="container">
       <div class="headline d-flex text-centre ">
          <h1>Hotels</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, maxime.</p>
       </div>


       <div class="row">



@foreach ($view as $views )



             <!-----------------------------newplans-------------------------------->
             <div class="plan col-lg-3 col-md-6">
                <div class="inner">
                    <span class="pricing">
                        <span>
                            $49 <small>/ m</small>
                        </span>
                    </span>
                    <p class="title">{{$views -> nameh}}</p>
                    <p class="info">{{$views -> smalldetails}}</p>
                    <ul class="features">
                        <li>
                            <i class="icon fa-solid fa-circle-check">
                        </i>
                            <span><strong>20</strong> team members</span>
                        </li>
                        <li>
                            <i class="icon fa-solid fa-circle-check"> </i>
                            <span>Plan <strong>team meetings</strong></span>
                        </li>
                        <li>
                            <i class="icon fa-solid fa-circle-check"> </i>
                            <span>File sharing</span>
                        </li>
                    </ul>
                    <div class="action">
                    <a class="button" href="{{ url('hotels/Content/'.$views -> id ) }}">
                        Choose plan
                    </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="mt-5 d-flex justify-content-center">
                {{ $view -> links() }}

            </div>
            </div>





    </div>
</section>
@endsection

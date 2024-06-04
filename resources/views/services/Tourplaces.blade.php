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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{ URL::asset($views->imgpath) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $views->nameh }}</h5>
                                <p class="card-text">{{ $views->smalldetails }}</p>

                                <a href="{{ url('hotels/Content/' . $views->id) }}" class="btn btn-primary">see more</a>
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

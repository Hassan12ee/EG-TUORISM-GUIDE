@extends('include.navbar')
@section('content')
<section class="mt-5">


@if(Session::has('success'))

    <div class="alert alert-success mt-5">
           {{Session::get('success')}}
    </div>
    @endif


@if(Session::has('error'))
     <div class="alert alert-danger">
         {{Session::get('error')}}
     </div>
@endif

<table class="table table-light table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Hotels</th>
        <th scope="col">Type</th>
        <th scope="col">imgpath</th>
        <th scope="col">Region</th>
        <th scope="col">Rating</th>
        <th scope="col">Popularity</th>
        <th scope="col">Opening_Hours</th>
        <th scope="col">Budget</th>
        <th scope="col">Facilities</th>
        <th scope="col">details</th>
        <th scope="col">opeartion</th>
    </tr>
    </thead>
    <tbody>


    @foreach($view as $offer)
        <tr>
            <td scope="row">{{$offer -> ID}}</td>
            <td>{{$offer -> Hotels}}</td>
            <td>{{$offer -> Type}}</td>
            {{-- <td><img  style="width: 90px; height: 90px;" src="{{asset('img/Hotels/'.$offer->imgpath)}}"></td> --}}
            <td>{{$offer -> Region}}</td>
            <td>{{$offer -> Rating}}</td>
            <td>{{$offer -> Popularity}}</td>
            <td>{{$offer -> Opening_Hours}}</td>
            <td>{{$offer -> Budget}}</td>
            <td>{{$offer -> Facilities}}</td>
            <td>{{$offer -> details}}</td>
            <td>
                <a href="{{url('admin/hotels/update/'. $offer-> ID)}}" class="btn btn-success"> update</a>
                {{-- <a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger"> delete</a> --}}
             </td>

        </tr>
    @endforeach

    </tbody>



    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif


</table>
<div class="d-flex justify-content-center">
    {!!  $view -> links() !!}
    </div>
</section>
@endsection

@extends('include.navbar')
@section('content')

@if(Session::has('success'))

    <div class="alert alert-success">
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
        <th scope="col">Place</th>
        <th scope="col">Food</th>
        <th scope="col">imgpath</th>
        <th scope="col">Region</th>
        <th scope="col">Rating</th>
        <th scope="col">Popularity</th>
        <th scope="col">Average_Cost</th>
        <th scope="col">Opening_Hours</th>
        <th scope="col">Price_Range</th>
        <th scope="col">Ambiance</th>
        <th scope="col">details</th>
        <th scope="col">opeartion</th>
    </tr>
    </thead>
    <tbody>


    @foreach($view as $offer)
        <tr>
            <td scope="row">{{$offer -> id}}</td>
            <td>{{$offer -> Place}}</td>
            <td>{{$offer -> Food}}</td>
            <td><img  style="width: 90px; height: 90px;" src="{{asset('images/Hotels/'.$offer->imgpath)}}"></td>
            <td>{{$offer -> Region}}</td>
            <td>{{$offer -> Rating}}</td>
            <td>{{$offer -> Popularity}}</td>
            <td>{{$offer -> Average_Cost}}</td>
            <td>{{$offer -> Opening_Hours}}</td>
            <td>{{$offer -> Price_Range}}</td>
            <td>{{$offer -> Ambiance}}</td>
            <td>{{$offer -> details}}</td>
            <td>
                {{-- <a href="{{url('offers/edit/'.$offer -> id)}}" class="btn btn-success"> update</a>
                <a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger"> delete</a> --}}
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
@endsection

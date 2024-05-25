@extends('include.navbar')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('res.create') }}" enctype="multipart/form-data" >
            @csrf
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" value="{{ old('name') }}" required autocomplete="name">
                    <label for="name">Name</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" value="{{ old('name') }}" required autocomplete="name">
                    <label for="name">Name</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror"
                        id="photo" required autocomplete="photo">
                    <label for="photo">photo</label>
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="textarea" name="small_details"
                        class="form-control @error('small_details') is-invalid @enderror" id="small_details" required
                        autocomplete="small_details">
                    <label for="small_details">small_details</label>
                    @error('small_details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

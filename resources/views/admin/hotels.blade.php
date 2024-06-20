@extends('include.navbar')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('res2.create') }}" enctype="multipart/form-data" >
            @csrf
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Hotels" class="form-control @error('Hotels') is-invalid @enderror"
                        id="Hotels" value="{{ old('Hotels') }}" required autocomplete="Hotels">
                    <label for="Hotels">Place</label>
                    @error('Hotels')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="Type" class="fw-bold pb-2">What type of food do you prefer?</label>
                <select id="Type" name="Type" class="form-select form-select-md @error('Type') is-invalid @enderror" aria-label="Food type select">
                    <option selected disabled>Open this select menu</option>
                    <option value="Egyptian">Egyptian</option>
                    <option value="Fast Food">Fast Food</option>
                    <option value="European">European</option>
                    <option value="Seafood">Seafood</option>
                </select>
                @error('Type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="file" name="imgpath" class="form-control @error('imgpath') is-invalid @enderror"
                        id="imgpath" required autocomplete="imgpath">
                    <label for="imgpath">imgpath</label>
                    @error('imgpath')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="Region" class="fw-bold pb-2">Which region do you prefer?</label>
                <select id="Region" name="Region" class="form-select form-select-md @error('Region') is-invalid @enderror" aria-label="Region select">
                    <option selected disabled>Open this select menu</option>
                    <option value="Cairo">Cairo</option>
                    <option value="Giza">Giza</option>
                    <option value="Alexandria">Alexandria</option>
                    <option value="Luxor">Luxor</option>
                    <option value="Aswan">Aswan</option>
                    <option value="Minya">Minya</option>
                    <option value="Red Sea">Red Sea</option>
                    <option value="Sinai">Sinai</option>
                    <option value="Western Desert">Western Desert</option>
                </select>
                @error('Region')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Rating"
                        class="form-control @error('Rating') is-invalid @enderror" id="Rating"
                        autocomplete="Rating">
                    <label for="Rating">Rating</label>
                    @error('Rating')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Popularity"
                        class="form-control @error('Popularity') is-invalid @enderror" id="Popularity"
                        autocomplete="Popularity">
                    <label for="Popularity">Popularity</label>
                    @error('Popularity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Opening_Hours"
                        class="form-control @error('Opening_Hours') is-invalid @enderror" id="Opening_Hours"
                        autocomplete="Opening_Hours">
                    <label for="Average_Cost">Opening_Hours</label>
                    @error('Opening_Hours')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Facilities"
                        class="form-control @error('Facilities') is-invalid @enderror" id="Facilities"
                        autocomplete="Facilities">
                    <label for="Facilities">Facilities</label>
                    @error('Facilities')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Budget"
                        class="form-control @error('Budget') is-invalid @enderror" id="Budget"
                        autocomplete="Budget">
                    <label for="Budget">Budget</label>
                    @error('Budget')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <textarea type="textarea" name="details"
                        class="form-control @error('details') is-invalid @enderror" id="details" row="5" style="height:250px"
                        autocomplete="details"></textarea>
                    <label for="details">details</label>
                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>




            <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>

@endsection


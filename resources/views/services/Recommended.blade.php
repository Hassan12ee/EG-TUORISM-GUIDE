@extends('include.navbar')

@section('content')
    <div class="container">
        <div class="row g-5">
            <h1 class="text-center">Ansewr the Questions</h1>
             <p class="text-center"> this help us to Recommend the plane </p>
        
        <form method="post" action="{{ route('register') }}" class="row g-3">
            @csrf
            <div class="col-md-6 offset-3">
                <div class="row g-5">


                    <div class="col-md-12">
                        <label for="select" class="fw-bold pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select   form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                



                    <button type="submit" class="btn btn-primary ">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    @endsection

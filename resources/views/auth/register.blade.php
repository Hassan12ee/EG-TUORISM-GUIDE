@extends('include.app')

@section('content')
<section class="csz ">
    <div class="zzz">
        <div class="container">
            <div class="row h-100 justify-content-center align-content-center  ">
                <div class="signupform text-light shadow  zz bg-transparent ">

                    <div class=" text-center mini-big-font">
                        <h1>Register</h1>
                    </div>
                    <form method="post" action="{{ route('register') }}" class="row g-3">
                        @csrf
                        <div class=" offset-1 col-md-10">
                            <div class="form-floating">
                                <input type="text" name="user" class="bg-transparent text-light form-control @error('user') is-invalid @enderror" id="user" value="{{ old('user') }}" required autocomplete="user">
                                <label class="text-light" for="user">User</label>
                                @error('user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" offset-1 col-md-5">
                            <div class="form-floating">
                                <input type="text" name="name" class="bg-transparent text-light form-control" id="name" value="{{ old('name') }}" required autocomplete="name">
                                <label class="text-light" for="name">First Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="text" name="lastname" class=" bg-transparent text-light form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                                <label class="text-light" for="lastname">Last Name</label>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" offset-1 col-md-10">
                            <div class="form-floating ">
                                <input type="email" name="email" class=" bg-transparent text-light form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email">
                                <label class="text-light" for="email">{{ __('Email Address') }}</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="offset-1 col-md-10">
                            <div class="form-floating">
                                <input type="password" name="password" class=" bg-transparent text-light form-control @error('password') is-invalid @enderror" id="password" required autocomplete="new-password">
                                <label class="text-light" for="password">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" offset-1 col-md-10">
                            <div class="form-floating ">
                                <input type="password" name="password_confirmation" class="bg-transparent text-light form-control" id="password-confirm" required autocomplete="new-password">
                                <label class="text-light" for="password-confirm">{{ __('Confirm Password') }}</label>

                            </div>
                        </div>
                        <div class="offset-1 col-md-5">
                            <div class="form-floating ">
                                <input type="date" name="birthday" class="bg-transparent text-light form-control @error('birthday') is-invalid @enderror" id="birthday" required autocomplete="birthday">
                                <label for="birthday" class="text-light">Birthday</label>
                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="form-floating">
                                <input type="tel" name="phone" class="form-control bg-transparent text-light @error('phone') is-invalid @enderror" id="phone" required autocomplete="phone">
                                <label for="phone" class="text-light">phone</label>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-10 offset-1">


                            <button type="submit" class="btn btn-outline-light">
                            Register
                            </button>
                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection

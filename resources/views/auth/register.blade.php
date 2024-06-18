@extends('include.app')

@section('content')
<div class="signupdad">
    <div class="signupform">
 <div class="container">
     <div class="headsi"><h1>Sign up</h1></div>
     <form method="post" action="{{ route('register') }}"  class="row g-3">
        @csrf
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" name="user" class="form-control @error('user') is-invalid @enderror" id="user" value="{{ old('user') }}" required autocomplete="user">
                <label for="user">User</label>
              @error('user')
                   <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                @enderror
            </div>
            </div>
         <div class="col-md-6">
         <div class="form-floating">
             <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required autocomplete="name">
             <label for="name">First Name</label>
            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
         </div>
         </div>
         <div class="col-md-6">
         <div class="form-floating">
             <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
             <label for="lastname">Last Name</label>
             @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
         </div>
         </div>

         <div class="col-md-12">
         <div class="form-floating ">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email">
            <label for="email">{{ __('Email Address') }}</label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
         </div>
        </div>
         <div class="col-md-12">
         <div class="form-floating">
               <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="Password" required autocomplete="new-password">
               <label for="Password">Password</label>
                @error('Password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
            </div>
            </div>
           <div class="col-md-12">
           <div class="form-floating ">
               <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required autocomplete="new-password">
               <label for="password-confirm">{{ __('Confirm Password') }}</label>

            </div>
            </div>
         <div class="col-md-6">
         <div class="form-floating">
             <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror" id="birthday"  required autocomplete="birthday">
             <label for="birthday">Birthday</label>
              @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
         </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"  required autocomplete="phone">
                <label for="phone">phone</label>
                 @error('phone')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
            </div>
           </div>


        <div class="col-12" >


            <button type="submit" class="btn btn-primary signbtn">
                                        {{ __('Sign Up') }}
                                    </button>
                                    </div>


       </form>


    </div>
</div></div>
@endsection

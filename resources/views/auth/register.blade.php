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
                <label for="user">{{ __('User') }}</label>
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
             <input type="text" name="birthday" class="form-control @error('birthday') is-invalid @enderror" id="birthday"  required autocomplete="">
             <label for="birthday">Birthday</label>
              @error('birthday')
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
       <div class="col-md-4 ">
        <a href="{{url('redirect/facebook')}}">Login With FaceBook</a>
    </div>
    <!DOCTYPE html>
<html lang="en">
  <head></head>
  <body>

    <h2>Add Facebook Login to your webpage</h2>

      <!-- Set the element id for the JSON response -->

      <p id="profile"></p>

      <script>

        <!-- Add the Facebook SDK for Javascript -->

        (function(d, s, id){
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) {return;}
                              js = d.createElement(s); js.id = id;
                              js.src = "https://connect.facebook.net/en_US/sdk.js";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk')
        );


        window.fbAsyncInit = function() {
            <!-- Initialize the SDK with your app and the Graph API version for your app -->
            FB.init({
                      appId            : '{your-facebook-app-id}',
                      xfbml            : true,
                      version          : '{the-graph-api-version-for-your-app}'
                    });
            <!-- If you are logged in, automatically get your name and email adress, your public profile information -->
            FB.login(function(response) {
                      if (response.authResponse) {
                           console.log('Welcome!  Fetching your information.... ');
                           FB.api('/me', {fields: 'name, email'}, function(response) {
                               document.getElementById("profile").innerHTML = "Good to see you, " + response.name + ". i see your email address is " + response.email
                           });
                      } else {
                           <!-- If you are not logged in, the login dialog will open for you to login asking for permission to get your public profile and email -->
                           console.log('User cancelled login or did not fully authorize.'); }
            });
        };

      </script>

  </body>
</html>
@endsection

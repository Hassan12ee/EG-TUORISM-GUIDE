@extends('include.app')

@section('content')
<section class="csz ">
    <div class="zzz">
    <div class="container ">
        <div class="row h-100 justify-content-center align-content-center">
            <div class="col-md-8 col-lg-6    ">
                <div class="card border-light text-light shadow  zz bg-transparent">
                    <div class="text-center mini-big-font  ">Login</div>

                    <div class="card-body">
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf


                            <div class=" offset-1 col-md-10">
                                <div class="form-floating">
                                    <input type="text" name="identify" class="bg-transparent text-light form-control @error('identify') is-invalid @enderror" id="identify" value="{{ old('identify') }}" required autocomplete="identify">
                                    <label class="text-light" for="identify">User</label>
                                    @error('identify')
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
                                
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-outline-light        ">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link  text-light" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('loginForm').addEventListener('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route("login") }}', true);

                // Set CSRF token header
                var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                xhr.setRequestHeader('X-CSRF-TOKEN', token);

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.user_id) {
                            localStorage.setItem('user_id', response.user_id);
                            // Redirect to the intended URL
                            window.location.href = '{{ url()->previous() }}';
                        } else {
                            // Handle invalid login response (optional)
                            console.error('Invalid login response');
                        }
                    } else {
                        // Handle error (optional)
                        console.error('Login failed');
                    }
                };

                xhr.send(formData);
            });
        });
    </script>
@endsection

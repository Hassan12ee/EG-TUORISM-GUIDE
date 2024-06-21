@extends('include.app')

@section('content')
    <div class="container align-content-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="identify"
                                    class="col-md-4 col-form-label text-md-end">{{ __('User name or email') }}</label>

                                <div class="col-md-6">
                                    <input id="identify" type="text"
                                        class="form-control @error('identify') is-invalid @enderror" name="identify"
                                        value="{{ old('identify') }}" required autocomplete="identify" autofocus>

                                    @error('identify')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('loginForm').addEventListener('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('login') }}', true);

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

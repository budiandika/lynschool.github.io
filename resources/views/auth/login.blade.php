@extends('layouts.login-master')

@section('content')

                    <form method="POST" action="{{route('login')}}" class="login100-form validate-form">
                        <span class="login100-form-title">
                            Account Login
                        </span>
                        @csrf

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}"" placeholder="Email" id="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" type="password"  placeholder="Password" id="password" name="password" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>

                                @if (Route::has('password.request'))
                                    <a class="txt1" href="{{ route('password.request') }}">
                                        Forgot Your Password
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
@endsection

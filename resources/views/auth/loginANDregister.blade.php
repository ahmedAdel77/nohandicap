@extends('layouts.app')

@section('content')
<div class="container section">

    <ul class="tabs center-align">
        <li class="tab col">
            <a href="#login" class="indigo-text text-darken-4">Login</a>
        </li>
        <li class="tab col">
            <a href="#register" class="indigo-text text-darken-4">Register</a>
        </li>
    </ul>

<div class="row formwidth ">
        <div class="col" id="login">

            <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="input-field">
                        <i class="material-icons prefix">email</i>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email">{{ __('E-Mail') }}</label>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="input-field">
                    <i class="material-icons prefix">lock_outline</i>
                    <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} validate" name="password" required>
                    <label for="password">{{ __('Password') }}</label>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>

                <p>
                    <label>
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>{{ __('Remember Me') }}</span>
                    </label>
                </p>

                <div class="input-field center">
                    <button class="btn green" type="submit">{{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            <p class="">{{ __('Forgot Your Password?') }}</p>
                        </a>
                    @endif

                </div>
            </form>
        </div>
    </div>
        </div>
    </div>

</div>
<div class="row formwidth">
        <div class="col offset-l" id="register">
            <form method="POST" action="{{ route('register') }}">
                    @csrf

                <div class="input-field">
                        <i class="material-icons prefix">person</i>

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    <label for="name">{{ __('Name') }}</label>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field">
                        <i class="material-icons prefix">email</i>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <label for="email">{{ __('E-Mail') }}</label>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field">
                        <i class="material-icons prefix">lock_outline</i>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} validate" name="password" required>
                    <label for="password">{{ __('Password') }}</label>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field">
                        <i class="material-icons prefix">lock_outline</i>

                    <input id="password-confirm" type="password" class="form-control validate" name="password_confirmation" required>
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>

                <div class="input-field center">
                    <button class="btn green" type="submit">{{ __('Register') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection


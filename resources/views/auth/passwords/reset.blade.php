@extends('layouts.app')

@section('content')
<div class="container section center formwidth ">

        <div class="">
           <h5>RESET PASSWORD</h5>

        </div>

    <div class=" ">
            <div class="col" id="resetpassword">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

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
                    <button class="btn green" type="submit">{{ __('Reset Password') }}</button>
                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

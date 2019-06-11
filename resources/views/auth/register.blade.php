@extends('layouts.app')


@section('content')

<div class="container section center formwidth ">

        <div class="">
           <h5>REGISTER</h5>


        </div>

    <div class=" ">
        <div class="col" id="register">
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
                    <i class="material-icons prefix">phone</i>

                    <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required >
                    <label for="phone">{{ __('Phone Number') }}</label>

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
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

</div>
<div class="card-panel" style="background-color: whitesmoke; width: ;">
        <div class=" center panel" style="padding: 5px;">
            <span class="center infostyle" style="font-weight: bolder">By creating an account you will have access to My ads, where you can:</span>
            <ul>
                <li class=""><span style="font-weight: bolder">-</span> Place an Ad on the platform.</li>
                <li class=""><span style="font-weight: bolder">-</span> Edit or delete your Ads.</li>
                <li class=""><span style="font-weight: bolder">-</span> Check responses for your Ads.</li>
            </ul>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container section center formwidth ">

        <div class="">
           <h5>RESET PASSWORD</h5>

        </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="col">
                <div class="col " id="resetpassword">

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="input-field center">
                            <button type="submit" class="btn ">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class=" section"></div>
        </div>
    </div>

</div>

@endsection

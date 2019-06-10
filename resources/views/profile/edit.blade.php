@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Your Profile</span>

              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/profile/show" class="btn-small grey darken-3 waves-effect waves-light"><span>Back</span>
                        <i class="material-icons left">arrow_back_ios</i></a>

                    <h3>Edit Profile</h3>
{{-- {{ route('routeName', ['id'=>1]) }} --}}
                    <form action="{{ route('users.update', $user->id) }}" method="POST" class="container section">
                        @method('PUT')
                     @csrf

                        <div class="input-field">
                               <input type="text" id="name" name="name" value="{{ $user->name }}">
                               <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                               <input type="email" id="email" name="email" value="{{ $user->email }}">
                               <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                               <input type="tel" id="phone" name="phone" value="{{ $user->phone }}">
                               <label for="phone">Phone Number</label>
                        </div>

                         <div class="section">
                                <button type="submit" class="btn purple darken-2 waves-effect waves-light">
                                        <span>Edit</span>
                                        <i class="material-icons left">done</i>
                                </button>
                         </div>

                    </form>

                    <div class="section">
                    </div>

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection

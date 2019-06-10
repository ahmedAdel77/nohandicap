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

                    <a href="/profile/{{ $user->id }}/edit" class="btn blue  btn-small"><span>Edit</span>
                        <i class="material-icons left">edit</i></a>
                    <div class="container ">
                        <div class="row section">
                            <div class="col l12">
                                <h5 class="infostyle">Name</h5>
                                <p>{{ $user->name }}</p>
                            </div>

                            <div class="col l12">
                                <h5 class="infostyle">Email</h5>
                                <p>{{ $user->email }}</p>
                            </div>

                            <div class="col l12">
                                <h5 class="infostyle">Phone Number</h5>
                                <p>{{ $user->phone }}</p>
                            </div>

                        </div>
                    </div>

                    <div class="section">
                    </div>

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection

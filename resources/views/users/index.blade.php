@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Users</span>


              @if (count($users))

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Role</th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            @foreach ($users as $user)

                      <tr>

                        <td><a href="">   {{ $user->name }}</a>

                        </td>

                        <td>

                            @if ($user->isAdmin == 0)
                                User
                            @else
                                    Admin
                            @endif

                        </td>

                        <td>

                        </td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>

                @else
                        <p class="section">No Users Listed.</p>
                @endif

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection

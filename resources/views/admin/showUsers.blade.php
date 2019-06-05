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
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            @foreach ($users as $user)

                      <tr>
                        <td><a href="">   {{ $user->name }}</a>

                        </td>
                        <td>
                                <a href="" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @method("DELETE")
                                @csrf

                                <button type="submit" class="btn red darken-2">
                                        <span>Delete</span>
                                        <i class="material-icons left">delete</i>
                                </button>
                            </form>

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

@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Conditions</span>


                    <a href="/conditions/create" class="btn purple lighten-1 btn-small"><span>Add New Condition</span>
                        <i class="material-icons left">add</i></a>


              @if (count($conditions) > 0)

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Condition Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            @foreach ($conditions as $condition)

                      <tr>
                        <td><a href="{{ route('conditions.show', $condition->id) }}">   {{ $condition->name }}</a>

                        </td>
                        <td>
                                <a href="{{ route('conditions.edit', $condition->id) }}" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>
                            <form action="{{ route('conditions.destroy', $condition->id) }}" method="POST" enctype="multipart/form-data">
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
                        <p class="section">No Conditions Listed.</p>
                @endif

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection

@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Categories</span>


                    <a href="/categories/create" class="btn purple lighten-1 btn-small"><span>Add New Category</span>
                        <i class="material-icons left">add</i></a>


              @if (count($categories) > 0)

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Category Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            @foreach ($categories as $category)

                      <tr>
                        <td><a href="{{ route('categories.show', $category->id) }}">   {{ $category->name }}</a>

                        </td>
                        <td>
                                <a href="/categories/{{ $category->id }}/edit" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>
                            <form action="{{url("categories/".$category->id)}}" method="POST" enctype="multipart/form-data">
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
                        <p class="section">No Categories Listed.</p>
                @endif

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection

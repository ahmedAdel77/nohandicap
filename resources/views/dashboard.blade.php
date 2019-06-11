@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Dashboard</span>

              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/products/create" class="btn purple lighten-1 btn-small"><span>Post An Ad</span>
                        <i class="material-icons left">add</i></a>

              <h6 style="font-weight: lighter; font-size: 40px;">Your posted Ads</h6>

              @if (count($products) > 0)

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Product Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            @foreach ($products as $product)

                      <tr>
                        <td><a href="/products/{{ $product->id }}">   {{ $product->name }}</a>

                        </td>
                        <td>
                                <a href="/products/{{ $product->id }}/edit" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>

                            <form action="{{url("products/".$product->id)}}" method="POST" enctype="multipart/form-data">
                                @method("DELETE")
                                @csrf

                                <a class="waves-effect waves-red red darken-2 btn modal-trigger" href="#modal1">
                                        <span>Delete</span>
                                        <i class="material-icons left">delete</i>
                                    </a>

                                    <!-- Modal Structure -->
                                    <div id="modal1" class="modal">
                                      <div class="modal-content">
                                        <h5>Are you sure you want to delete this item ? </h5>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="modal-close btn red darken-2 waves-effect">
                                                <span>Yes, delete it</span>
                                        </button>
                                      </div>
                                    </div>
                            </form>

                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>

                @else
                        <p class="section">You have no posted products.</p>
                @endif

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection

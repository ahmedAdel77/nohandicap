@extends('layouts.app')


@section('content')
    <h3>Create A Category</h3>

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" class="container section">

        @csrf

        <div class="input-field">
               <input type="text" id="name" name="name">
               <label for="name">Category Name</label>
        </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Create</span>
                        <i class="material-icons left">add</i>
                </button>
         </div>

    </form>

@endsection

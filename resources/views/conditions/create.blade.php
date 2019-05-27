@extends('layouts.app')


@section('content')
    <h3>Create A Conditions</h3>

    <form action="{{ route('conditions.store') }}" method="POST" enctype="multipart/form-data" class="container section">

        @csrf

        <div class="input-field">
               <input type="text" id="name" name="name">
               <label for="name">Condition Name</label>
        </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Create</span>
                        <i class="material-icons left">add</i>
                </button>
         </div>

    </form>

@endsection

@extends('layouts.app')


@section('content')

<div class="section">
    <a href="/categories" class="btn grey darken-3">
        <span>Back</span>
        <i class="material-icons left">arrow_back_ios</i>
    </a>
</div>

    <h3>Edit Category</h3>

    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="container section">
        @method('PUT')
        @csrf

        <div class="input-field">
               <input type="text" id="name" name="name" value="{{ $category->name }}">
               <label for="name">Category Name</label>
        </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Edit</span>
                        <i class="material-icons left">edit</i>
                </button>
         </div>

    </form>

@endsection

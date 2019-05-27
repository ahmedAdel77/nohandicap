@extends('layouts.app')


@section('content')
    <h3>Place an Ad</h3>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="container">

        @csrf

        <div class="input-field">
               <input type="text" id="name" name="name">
               <label for="name">Title</label>
        </div>

        <div class="input-field">
            <select name="" id="">
                <option value="" disabled selected>Choose your category</option>
                <option value="1">Mobility</option>
                <option value="2">Hearing Impairment (HI)</option>
                <option value="3">Visual Impairment (VI)</option>
            </select>
            <label for="">Category</label>
        </div>

        <div class="input-field">
            <select name="" id="">
                <option value="" disabled selected>Choose product condition</option>
                <option value="1">New</option>
                <option value="2">Used</option>
            </select>
            <label for="">Condition</label>
        </div>

        <div class="input-field">
                <textarea name="description" id="description" class="materialize-textarea" data-length="100"></textarea>
                <label for="description">Description</label>
        </div>

        <div class="file-field input-field">
            <div class="btn white black-text">
                <span>Photo</span>
                <i class="material-icons left">photo_library</i>
                <input type="file" name="cover_image">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload file" name="cover_image">
            </div>
        </div>

        <div class="input-field">
                <input type="number" id="price" name="price">
                <label for="price">Price</label>
         </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Post</span>
                        <i class="material-icons left">add</i>
                </button>
         </div>

    </form>

@endsection

@extends('layouts.app')


@section('content')

    <h3>Edit Ad</h3>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="container section">
        @method('PUT')
        @csrf

        <div class="input-field">
                <input type="text" id="name" name="name" value="{{ $product->name }}">
                <label for="name">Product Name</label>
         </div>

         <div class="input-field">
                <textarea name="description" id="description" class="materialize-textarea" data-length="100">{{ $product->description }}</textarea>
                <label for="description">Description</label>
        </div>

        <div class="file-field input-field">
            <div class="btn white black-text">
                <span>Photo</span>
                <i class="material-icons left">photo_library</i>
                <input type="file" name="cover_image">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload file" name="cover_image" value="{{ $product->cover_image }}">
            </div>
        </div>

        <div class="input-field">
                <input type="number" id="price" name="price" value="{{ $product->price }}">
                <label for="price">Price</label>
        </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Edit</span>
                        <i class="material-icons left">edit</i>
                </button>
         </div>

    </form>

@endsection

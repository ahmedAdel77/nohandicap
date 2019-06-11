@extends('layouts.app')

@push('js')
    <script>

        function readUrl(input, index) {

            if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function(e) {
                $('#myimage'+ index).attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
            }
        }

        $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;
                $(placeToInsertImagePreview).text("");
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img class="col l2">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });

    </script>
@endpush

@section('content')
    <h3 style="font-weight: lighter; font-size: 50px;">Place an Ad</h3>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="container">

        @csrf

        <div class="input-field">
               <input type="text" id="name" name="name">
               <label for="name">Title</label>
        </div>

        <div class="input-field">
            <select name="category" id="">
                <option value="" disabled selected>Choose your category</option>
                <option value="Mobility">Mobility</option>
                <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
            </select>
            <label for="">Category</label>
        </div>

        <div class="input-field">
            <select name="condition" id="">
                <option value="" disabled selected>Choose product condition</option>
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
            <label for="">Condition</label>
        </div>

        <div class="input-field">
                <textarea name="description" id="description" class="materialize-textarea" data-length="100"></textarea>
                <label for="description">Description</label>
        </div>

    <div class="row">
        <div class="col l10">
            <div class="file-field input-field">
                <div class="btn orange white-text">
                    <span>Cover Image</span>
                    <i class="material-icons left">insert_photo</i>
                    <input type="file" name="cover_image" onchange="readUrl(this, 0)"  style="width: 100px;">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload Cover Image" >
                </div>
            </div>
        </div>

        <div class="col l2 ">
            <img src="" id="myimage0" style="width: 100px;">
        </div>
    </div>

        <div class="file-field input-field increment">
            <div class="btn orange white-text">
                <span>Product Photos</span>
                <i class="material-icons left">photo_library</i>
                <input id="gallery-photo-add" type="file" name="product_image[]" multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload 1 or more Product Photos" name="product_image[]">
            </div>
        </div>

        <div class="gallery row">
            {{-- @foreach (json_decode($product->product_image, true) as $i => $image)
                <img src="/storage/product_images/{{ $image }}" class="col l2" >
            @endforeach --}}
        </div>

        <div class="input-field">
                <input type="number" id="price" name="price">
                <label for="price">Price</label>
         </div>

         <div class="section">
                <button type="submit" class="btn purple darken-2 waves-effect waves-light">
                        <span>Post</span>
                        <i class="material-icons left">add</i>
                </button>
         </div>

    </form>

@endsection

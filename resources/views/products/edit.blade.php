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
            <select name="category" id="">
                @if ($product->category == "Mobility")
                    <option value="" disabled>Choose your category</option>
                    <option value="Mobility" selected>Mobility</option>
                    <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                @elseif($product->category == "Hearing Impairment (HI)")
                    <option value="" disabled>Choose your category</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Hearing Impairment (HI)" selected>Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                @elseif($product->category == "Visual Impairment (VI)")
                    <option value="" disabled>Choose your category</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)" selected>Visual Impairment (VI)</option>
                @else
                    <option value="" disabled selected>Choose your category</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                @endif

            </select>
            <label for="">Category</label>
        </div>

        <div class="input-field">
            <select name="condition" id="">

                    @if ($product->condition == "New")
                        <option value="" disabled>Choose product condition</option>
                        <option value="New" selected>New</option>
                        <option value="Used">Used</option>

                    @elseif ($product->condition == "Used")
                        <option value="" disabled>Choose product condition</option>
                        <option value="New">New</option>
                        <option value="Used" selected>Used</option>
                    @else
                        <option value="" disabled selected>Choose product condition</option>
                        <option value="New">New</option>
                        <option value="Used">Used</option>
                    @endif

            </select>
            <label for="">Condition</label>
        </div>

         <div class="input-field">
                <textarea name="description" id="description" class="materialize-textarea" data-length="100">{{ $product->description }}</textarea>
                <label for="description">Description</label>
        </div>

        <div class="file-field input-field ">
            <div class="btn white black-text">
                <span>Cover Image</span>
                <i class="material-icons left">insert_photo</i>
                <input type="file" name="cover_image">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload Cover Imag" name="cover_image" value="{{ $product->cover_image }}">
            </div>
        </div>


        <div class="file-field input-field increment">
                <div class="btn white black-text">
                    <span>Product Photos</span>
                    <i class="material-icons left">photo_library</i>
                    <input type="file" name="product_image[]" multiple>
                </div>
                <div class="file-path-wrapper">

                        {{-- @foreach (json_decode($product->product_image, true) as $i => $image)
                            @php
                                $str = $image[$i].','.' '.$i;

                            @endphp
                      @endforeach --}}


                    <input class="file-path validate" type="text" placeholder="Upload 1 or more Product Photos" name="product_image[]" value="{{ $product->product_image }}">
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

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>

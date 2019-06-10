@extends('layouts.app')

@section('content')

    <h1>Products</h1>

    <div class=" section">
        @include('inc.filter')
    </div>

    <div class="row section">

    @if (count($products)>0)
        @foreach ($products as $product)

            <div class="col s12 m6 l4" style="">
              <a href="/products/{{ $product->id }}">
                <div class="card hoverable" style="">
                  <div class="card-image" class="">
                    <img src="/storage/cover_images/{{ $product->cover_image }}" class="">
                  </div>
                  <div class="card-content" style="   overflow: hidden;">
                    <h1 class="card-title truncate"><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h1>
                    <p class="truncate">{!! $product->description !!}</p>
                  </div>
                  <div class="card-content">
                    <p  class="price truncate">{{ $product->price }} EGP</p>
                  </div>
                </div>
              </a>
            </div>

        @endforeach
        {{ $products->links() }}
    @else
        <p>No products found.</p>
    @endif
</div>

@endsection

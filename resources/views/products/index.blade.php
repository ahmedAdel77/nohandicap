@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <div class="row section">
    @if (count($products) > 0)
        @foreach ($products as $product)

            <div class="col s12 m6 l4">
              <a href="/products/{{ $product->id }}">
                <div class="card hoverable">
                  <div class="card-image">
                    <img src="/storage/cover_images/{{ $product->cover_image }}" style="width:100%">
                  </div>
                  <div class="card-content">
                    <h1 class="card-title"><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h1>
                    <p>{!! $product->description !!}</p>
                  </div>
                  <div class="card-content">
                    <p  class="price">{{ $product->price }} EGP</p>
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

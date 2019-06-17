@extends('layouts.app')

@section('extra')

@include('inc.filter')
@endsection

@section('content')

    <h3 style="font-weight: lighter; font-size: 50px;">Latest Ads</h3>

    <div class="row section">

    @if (count($products))
        @foreach ($products as $product)

            <div class="col s12 m6 l4" style="">
              <a href="/products/{{ $product->id }}">
                <div class="card hoverable" style="">
                  <div class="card-image" class="">
                    <img src="/storage/cover_images/{{ $product->cover_image }}" class="">
                  </div>
                  <div class="card-content" style="overflow: hidden;">
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
        <p style="color: maroon">No products found! .. We are sorry.</p>
    @endif
</div>

@include('inc.scrollup')

@endsection

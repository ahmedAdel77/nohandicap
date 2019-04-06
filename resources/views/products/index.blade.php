@extends('layouts.applayout')

@section('content')
    <h1>Products</h1>
    @if (count($products) > 0)
        @foreach ($products as $product)
            <div class="jumbotron">
                <h3> <a href="/products/{{ $product->id }}">{{ $product->name }}</a></h3>
                <small>Posted at {{ $product->created_at }}</small>
            </div>
        @endforeach
        {{ $products->links() }}
    @else
        <p>No products found.</p>
    @endif
@endsection

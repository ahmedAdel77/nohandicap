@extends('layouts.applayout')

@section('content')
    <a href="/products" class="btn btn-lg btn-dark">Back</a>
    <h1>{{ $product->name }}</h1>
    <div>
        {!! $product->description !!}
    </div>
    <hr>
    <small>Posted at {{ $product->created_at }}</small>

@endsection

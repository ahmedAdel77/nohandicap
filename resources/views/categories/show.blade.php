@extends('layouts.app')

@section('content')

    <div class="section">
        <a href="/categories" class="btn grey darken-3">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>

    <div class="row ">
        <div class="col l6">
            <h5 class="infostyle">Category</h5>
            <p>{{ $category->name }}</p>
        </div>
    </div>

    <div class="section">
    </div>

@endsection

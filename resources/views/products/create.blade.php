@extends('layouts.applayout')

@section('content')
    <h1>Post Product</h1>
    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
        <div class="form-group ">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description']) }}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection

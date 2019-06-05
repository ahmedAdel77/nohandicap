@extends('layouts.app')

@section('content')

    <div class="section">
        <a href="/reports" class="btn grey darken-3">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>

    <div class="row ">
        <div class="col l6">
            <h5 class="infostyle">Report Reason</h5>
            <p>{{ $report->reason }}</p>
        </div>
        <div class="col l6">
            <h5 class="infostyle">Info.</h5>
            <p>{{ $report->info }}</p>
        </div>
        <div class="col l6">
            <h5 class="infostyle">Product Reported</h5>
            <p><a href="/products/{{ $report->product->id }}">{{ $report->product->id }}</a></p>
        </div>
    </div>

    <div class="section">
    </div>

@endsection

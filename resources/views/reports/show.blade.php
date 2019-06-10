@extends('layouts.app')

@section('content')

    <div class="section">
        <a href="/reports" class="btn grey darken-3">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>
    <div class="row ">
        <div class="col l8">
            <h5 class="infostyle">Report Reason</h5>
            <p>{{ $report->reason }}</p>
        </div>
        <div class="col l7">
            <h5 class="infostyle">Info.</h5>
            <p>{{ $report->info }}</p>
        </div>
        <div class="col l6">
            <h5 class="infostyle">Product Reported</h5>

            <div class="card horizontal">
              <div class="card-image">
                <img src="/storage/cover_images/{{ $report->product->cover_image }}" style="width: 250px;">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><span style="font-weight: 500; font-size: 20px">Title: </span><br>{{ $report->product->name }}</p>
                  <p><span style="font-weight: 500; font-size: 20px">Description: </span><br>{{ $report->product->description }}</p>
                  <p><span style="font-weight: 500; font-size: 20px">Category: </span><br>{{ $report->product->category }}</p>
                  <p><span style="font-weight: 500; font-size: 20px">Condition: </span><br>{{ $report->product->condition }}</p>
                </div>

                <div class="card-action">
                  <a target="_blank" href="/products/{{ $report->product->id }}" class="green-text">View Product</a>
                </div>
              </div>
            </div>
        </div>
    </div>


    <div class="section">
    </div>

@endsection

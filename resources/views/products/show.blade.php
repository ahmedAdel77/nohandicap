@extends('layouts.app')



@section('content')

    <div class="section">
        <a href="/products" class="btn grey darken-3">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>

    <div class="">

            <div class="row">
                <div class="col l6">
                    <h3 class="">{{ $product->name }}</h3>

                </div>
                <div class="col l6 right-align">
                    <h5 class="" style="font-weight: 500; font-size: 30px;">{{ $product->price }} EGP</h5>

                </div>
                <div class="col l6">
                    <p class="right-align">Posted at {{ $product->created_at }} by {{ $product->user->name }}</p>

                </div>
            </div>

            <div class="slider ">
                <ul class="slides">
                    <li>
                        <img src="/storage/cover_images/{{ $product->cover_image }}" style="width:100%" class="materialboxed">
                    </li>
                </ul>
            </div>

            <div class="row section">
                <div class="col l6">
                    <h5 class="infostyle">Category</h5>
                    <p>{{ $product->category }}</p>
                </div>
                <div class="col l6">
                    <h5 class="infostyle">Condition</h5>
                    <p>{{ $product->condition }}</p>
                </div>
                <div class="col l6">
                    <h5 class="infostyle">Description</h5>
                    {!! $product->description !!}
                </div>
            </div>

            @if (!Auth::guest())
                @if (Auth::user()->id == $product->user_id)

                <div class="container ">

                        <form action="{{url("products/".$product->id)}}" method="POST">

                            <a type="" class="btn blue darken-2 left" href="/products/{{ $product->id }}/edit" >
                                <span>Edit</span>
                                <i class="material-icons left">edit</i>
                            </a>

                            @method("DELETE")
                            @csrf

                            <button type="submit" class="btn red darken-2 right">
                                    <span>Delete</span>
                                    <i class="material-icons left">delete</i>
                            </button>

                        </form>


                </div>

                @endif

            @endif

            <div class="section">
            <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons red-text text-darken-2">report_problem</i>Report</div>
                  <div class="collapsible-body">
                    <span>
                            <form action="#">
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" class="with-gap" checked>
                                            <span>This is illegal/fraudulent</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" class="with-gap">
                                            <span>This ad is spam</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" class="with-gap">
                                            <span>This ad is a duplicate</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" class="with-gap">
                                            <span>This ad is in the wrong category</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" class="with-gap">
                                            <span>The ad goes against <a href="#">posting rules</a> </span>
                                        </label>
                                    </p>

                                    <div class="input-field">
                                        <textarea name="" id="textarea" class="materialize-textarea" data-length="100"></textarea>
                                        <label for="textarea">More information</label>
                                    </div>
                                </form>
                                <a href="" class="btn modal-close red darken-3 waves-effect waves-dark">Send report</a>

                    </span></div>
                </li>
            </ul>
        </div>
        <p>Views: <span style="font-weight: 500;">51</span></p>


        <!-- contact seller -->
        <div class="">

                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4>Contact Seller</h4>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle blue">phone</i>
                        <span class="title">Phone</span>
                        <p class="grey-text">010-123-4567</p>

                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle blue">email</i>
                        <span class="title">Email</span>


                        <form action="#">
                            <div class="input-field">
                                <input type="email" id="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <textarea name="" id="textarea" class="materialize-textarea" data-length="100"></textarea>
                                <label for="textarea">Message content</label>
                            </div>
                            <div class="input-field center">
                                <button class="btn green">
                                    <span>Send</span>
                                    <i class="material-icons right">email</i>
                                </button>
                            </div>
                        </form>
                    </li>

                </ul>
            </div>
        </div>


    <div class="container section center safe">
        <i class="material-icons green-text">info</i>

        <h5>Safety Tips</h5>
        <p>1. Only meet in public/crowded places for example metro stations and malls.</p>
        <p>2. Never go alone to meet a buyer/seller, always take someone with you.</p>
        <p>3. Check and inspect the product properly before purchasing it</p>
        <p>4. Never pay anything in advance or transfer money before inspecting the product</p>
    </div>

    </div>



@endsection

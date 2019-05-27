<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('js/materialize.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

     <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href=" {{ URL::asset('css/materialize.css') }}" rel="stylesheet">

    <style>

.price {
    font-size: 25px;
    color: #5cb74c;
}

.safe{
    background-color: ghostwhite;
    box-shadow:  .5px .5px 3px 1px #5cb74c;

    margin-bottom: 30px;
}

.section {
    padding-top: 4vw;
    padding-bottom: 4vw;
}

.formwidth {
    width: 300px;
    align-content: center;
}

.infostyle {
    border-bottom: 1px solid #d8d6d9;
    padding-bottom: 10px;
}

.tabs .indicator {
    background-color: limegreen;
}

.tabs .tab a:focus,
.tabs .tab a:focus.active {
    background: transparent;
}</style>


</head>
<body>

    <div id="app">

        <main class="">
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
            @yield('content')

            </div>
        </main>
    </div>

    @include('inc.footer')

 <!-- Compiled and minified JQuery & JavaScript -->
 <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 {{-- <script src="js/materialize.js"></script> --}}
 <script src="{{ asset('js/materialize.js') }}" defer></script>
 <script>
   $(document).ready(function () {
     $('.sidenav').sidenav();
     $('.tabs').tabs();
     $('.dropdown-trigger').dropdown();
     $('select').formSelect();
     $('.slider').slider();
     $('.materialboxed').materialbox();
     $('.modal').modal();
     $('input#input_text, textarea#textarea2').characterCounter();
     $('.collapsible').collapsible();
   });

   $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
 </script>

</body>
</html>

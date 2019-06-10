<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> | Classified Ads for assistive tools</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

     <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href=" <?php echo e(URL::asset('css/materialize.css')); ?>" rel="stylesheet">
    <link href=" <?php echo e(URL::asset('css/materialize.min.css')); ?>" rel="stylesheet">

    <style>

.price {
    font-size: 25px;
    color: #5cb74c;
}
.card-image{
    height: 250px; /* Your height here */
    overflow: hidden;
}

.safe{
    background-color: ghostwhite;
    box-shadow:  .5px .5px 3px 1px #5cb74c;

    margin-bottom: 30px;
}

.imagein{

    display: inline-block;
    height: 100%;
    width: auto;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateY(-50%) translateX(-50%);
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
    border-bottom: 1px solid lightgray;
    padding-bottom: 10px;
}

.tabs .indicator {
    background-color: limegreen;
}

.tabs .tab a:focus,
.tabs .tab a:focus.active {
    background: transparent;
}


/* header, main, footer {
      padding-left: 300px;
    }

    @media  only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    } */


</style>


</head>
<body>

    <div id="app">

        <main class="">
            <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container">
                <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>

            </div>
        </main>
    </div>

    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!-- Compiled and minified JQuery & JavaScript -->
 <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
 <script src="<?php echo e(asset('js/materialize.js')); ?>" defer></script>
 <script src="<?php echo e(asset('js/materialize.min.js')); ?>" defer></script>

 <script>

   $(document).ready(function () {

    $("findBtn").click(function(){
        var cat = $("#catID").val();
        alert(cat);
    });

     $('.sidenav').sidenav();
     $('.tabs').tabs();
     $('.dropdown-trigger').dropdown();
     $('select').formSelect();
     $('.slider').slider();
     $('.materialboxed').materialbox();
     $('.modal').modal();
     $('input#input_text, textarea#textarea2').characterCounter();
     $('.collapsible').collapsible();
     $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

      $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });

    $('.filter-select').change(function(){
        table.column( $(this).data('column') )
        .search( $(this).val() )
        .draw();
    });

   });




 </script>

<?php echo $__env->yieldPushContent('js'); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/layouts/app.blade.php ENDPATH**/ ?>
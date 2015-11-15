<!DOCTYPE html>
<html>
<head>
    <title>Urban Bliss</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
<!-- 

Sonic Template 

http://www.templatemo.com/tm-394-sonic 

-->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css')}}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/product-slider.css')}}">
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

</head>
<body>
    @include('menuSingle')
    @yield('menu')

    <div id="main-content">

     

        <div class="container-fluid">
        <div id="portfolio" class="section-content">
          <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>404 ERROR</h2>
                        </div> <!-- /.section-title -->
                        	<h1>Page Not Found</h1>
                    </div> <!-- /.col-md-12 -->
          </div> <!-- /.row -->



        </div><!--Portfolio -->

        </div> <!-- /.container-fluid -->

         @include('footer')
        @yield('footer')

    </div> <!-- /#main-content -->

    <!-- JavaScripts -->
    <!--<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>-->
    <script src="{{asset('js/jquery.singlePageNav.js')}}"></script>
   <!-- <script src="{{asset('js/jquery.flexslider.js')}}"></script>-->
   <!-- <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>-->
    <!--<script src="{{asset('js/custom.js')}}"></script>-->
    
    <script src="{{asset('js/product-slider/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('js/product-slider/jquery.mobile.min.js')}}"></script>
    <script src="{{asset('js/product-slider/main.js')}}"></script>
    

      
 

</body>
</html>
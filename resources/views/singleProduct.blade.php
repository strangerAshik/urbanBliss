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
                            <h2>Product Name Product Name Product Name</h2>
                        </div> <!-- /.section-title -->
                    </div> <!-- /.col-md-12 -->
          </div> <!-- /.row -->
        <div class="row">
            
            <div class="col-md-5">
                 <ul class="cd-gallery">
                    <li>
                        <a href="">
                            <ul class="cd-item-wrapper">
                                <li class="selected">
                                    {!!Html::image('images/products/ugmonk-tshirt-1.jpg')!!}
                                </li>

                                <li class="move-right" data-sale="true" data-price="$22">
                                     {!!Html::image('images/products/ugmonk-tshirt-2.jpg')!!}
                                </li>

                                <li>
                                     {!!Html::image('images/products/ugmonk-tshirt-3.jpg')!!}
                                </li>
                            </ul> <!-- cd-item-wrapper -->
                        </a>

                        <div class="cd-item-info">
                           {{--  <b><a href="#0">Mountains</a></b>

                            <em class="cd-price">$26</em> --}}
                        </div> <!-- cd-item-info -->
                    </li>
            </ul>
           
            
            </div>
         <div class="col-md-7 ">
            <h3 class="portfolio-title"><a>Product Feature</a></h3>
            <p class="text-justify">

            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less 
            normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, 
          

            </p>
         </div>
           
        </div>
        <!--Product Other Description-->
        <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>MOre Details</h2>
                        </div> <!-- /.section-title -->
                    </div> <!-- /.col-md-12 -->
          </div> <!-- /.row -->
           <div class="row">
                <div class="col-md-12">
                      <h3 class=""><i class="fa fa-download"></i><a href="#"> Download Product Details</a></h3>
                      <p>
                      sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, 
                      </p>
                </div>

        </div>
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
@section('menu')


    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
                <li class="home"><a href="{{ url('/') }}#templatemo">Home</a></li>
                <li class="about"><a href="{{ url('/') }}#about">About Us</a></li>
                <li class="services"><a href="{{ url('/') }}#services">Services</a></li>
                <li class="portfolio"><a href="{{ url('/') }}#portfolio">Product</a></li>
                <li class="contact"><a href="{{ url('/') }}#contact">Contact</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

    <div id="main-sidebar" class="hidden-xs hidden-sm">
        <div class="logo">
       

            <a href="{{url('/')}}"><h1  class="text-center" >{!!Html::image('images/logo.png','Urban Bliss',['height'=>'193','width'=>'150'])!!}</h1></a>
            {{-- <span><i class="text-al">Where Quality Meets Satisfaction</i></span> --}}
        </div> <!-- /.logo -->

        <div class="navigation">
            <ul class="main-menu">
                <li class="home"><a href="{{ url('/') }}#templatemo">Home</a></li>
                <li class="about"><a href="{{ url('/') }}#about">About Us</a></li>
                <li class="services"><a href="{{ url('/') }}#services">Services</a></li>
                <li class="portfolio"><a href="{{ url('/') }}#portfolio">Product</a></li>
                <li class="contact"><a href="{{ url('/') }}#contact">Contact</a></li>
            </ul>
        </div> <!-- /.navigation -->

    </div> <!-- /#main-sidebar -->

@stop
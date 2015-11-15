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
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    @include('menu')
    @yield('menu')

    <div id="main-content">

        @include('sliderAndWelcome')
        @yield('sliderAndWelcome')

        <div class="container-fluid">

            @include('aboutUs')
            @yield('aboutUs')

            @include('services')
            @yield('services')

            @include('portfolio')
            @yield('portfolio')

            @include('contact')       
            @yield('contact')        
            

            

          

        </div> <!-- /.container-fluid -->

        @include('footer')
        @yield('footer')

    </div> <!-- /#main-content -->

    <!-- JavaScripts -->
    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('js/jquery.singlePageNav.j')}}s"></script>
    <script src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

        <!--Product Load More-->
    <script type="text/javascript">
        $(document).ready(function () {
    size_li = $("#productList div").size();
    x=12;
    $('#productList div:lt('+x+')').show();
    $('#loadMore').click(function () {
        if(size_li==x){alert('All Product Shown')}
        x= (x+12 <= size_li) ? x+12 : size_li;

        $('#productList div:lt('+x+')').show();

    });
    $('#showLess').click(function () {
        x=(x-9<0) ? 3 : x-5;
        $('#productList div').not(':lt('+x+')').hide();
    });
});
    </script>
    <script>
        $(document).ready(function(){
            $("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
        });

        function initialize() {
          var mapOptions = {
            zoom: 17,
            center: new google.maps.LatLng(23.81136,90.41302)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);

           /*FOr Pointing location*/
    var marker_latlng = new google.maps.LatLng(23.81136,90.41302);

    var marker = new google.maps.Marker({
    position: marker_latlng,
    map: map,
    title:"Urban BLiss BD!"
    });
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }


        window.onload = loadScript;
    </script>
<!-- templatemo 394 sonic -->
</body>
</html>

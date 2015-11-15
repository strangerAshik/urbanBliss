@section('sliderAndWelcome')
<div id="templatemo">
            <div class="main-slider">
                <div class="flexslider">
                    <ul class="slides">
                    
                     {{--    <li>
                            <div class="slider-caption">
                                <h2>Product Titel</h2>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                                <a href="#" class="largeButton homeBgColor">Read More</a>
                            </div>
                            <img src="images/slide1.jpg" alt="Slide 1">
                        </li> --}}
                          <li>
                            <div class="slider-caption">
                                <h2>SI Clean Energy Inverter</h2>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                               {{--  <a href="#" class="largeButton homeBgColor">Read More</a> --}}
                            </div>
                            {!!Html::image('images/slide1.jpg','',['height'=>'570','draggable'=>"false"])!!}

                        </li>
                        
                        <li>
                            <div class="slider-caption">
                                <h2>Solis Inverter</h2>
                                <p>Fusce convallis enim vitae sagittis mollis. Sed bibendum ultricies dignissim.</p>
                             
                            </div>
                            {!!Html::image('images/slide2.jpg','',['height'=>'570','draggable'=>"false"])!!}
                        </li>
                        
                        <li>
                            <div class="slider-caption">
                                <h2>Vikram Solar moudle</h2>
                                <p>All templates are free to download and use for your personal or commercial websites.</p>
                               
                            </div>
                            {!!Html::image('images/slide3.jpg','',['height'=>'570','draggable'=>"false"])!!}
                        </li>
                         <li>
                            <div class="slider-caption">
                                <h2>Solar water heater</h2>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                                <a href="#" class="largeButton homeBgColor">Read More</a>
                            </div>
                            {!!Html::image('images/slide5.jpg','',['height'=>'570','draggable'=>"false"])!!}
                        </li>
                        
                        <li>
                            <div class="slider-caption">
                                <h2>renewable energy solar moudle</h2>
                                <p>Fusce convallis enim vitae sagittis mollis. Sed bibendum ultricies dignissim.</p>
                             
                            </div>
                           {!!Html::image('images/slide6.jpg','',['height'=>'570','draggable'=>"false"])!!}
                        </li>
                        
                        <li>
                            <div class="slider-caption">
                                <h2>Product Titel</h2>
                                <p>All templates are free to download and use for your personal or commercial websites.</p>
                               
                            </div>
                            {!!Html::image('images/slide3.jpg','',['height'=>'570','draggable'=>"false"])!!}
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-text">
                            <h2>Welcome to Urban Bliss BD</h2>
                            <p class="text-justify">Our team is involved in all assets classes that promote renewable energy generation through sustainable processes, either with existing or new green/clean technologies. We aim to create a more sustainable energy environment for local communities, reduce the carbon footprint and attract investment through industry and commerce.</p>
                            <p class="text-justify">                          
                            It could be argued that many countries have not learned from the mistakes of others, but moving forward, we believe that due to an improved political and economic environment, a more realistic environment will be created, thus delivering sustainable long term investment returns. The reduction in technology costs combined with increased efficiencies creates a more stable long term view.
                            </p>
                                                    </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#sTop -->
@stop
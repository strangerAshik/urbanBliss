@section('portfolio')
<div id="portfolio" class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Products</h2>
                        </div> <!-- /.section-title -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row" id="productList">
                    <div class="col-md-4">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                            {!!Html::image('images/portfolio/1.jpg')!!}
                               
                                <div class="overlay-p">
                                    <a href="images/portfolio/1.jpg" data-gal="prettyPhoto">
                                        <i class="fa fa-arrows-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div> <!-- /.portfolio-thumb -->
                            <h3 class="portfolio-title"><a  href="{{action('dashboardController@singleProduct', ['id' => 1])}}">Fantasy</a></h3>
                            <p>Description:Nulla in nunc elit. Etiam porttitor nibh et <b>Details..</b></p>
                        </div> <!-- /.portfolio-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                  {!!Html::image('images/portfolio/2.jpg')!!}
                                <div class="overlay-p">
                                    <a href="images/portfolio/2.jpg" data-gal="prettyPhoto">
                                        <i class="fa fa-arrows-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div> <!-- /.portfolio-thumb -->
                            <h3 class="portfolio-title"><a href="#">Botany</a></h3>
                            <p>Description:Nulla in nunc elit. Etiam porttitor nibh et <b>Details..</b></p>
                        </div> <!-- /.portfolio-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                 {!!Html::image('images/portfolio/3.jpg')!!}
                                <div class="overlay-p">
                                    <a href="images/portfolio/3.jpg" data-gal="prettyPhoto">
                                        <i class="fa fa-arrows-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div> <!-- /.portfolio-thumb -->
                            <h3 class="portfolio-title"><a href="#">Universe</a></h3>
                            <p>Description:Nulla in nunc elit. Etiam porttitor nibh et <b>Details..</b></p>
                        </div> <!-- /.portfolio-item -->
                    </div> <!-- /.col-md-4 --><div class="col-md-4">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                            {!!Html::image('images/portfolio/1.jpg')!!}
                               
                                <div class="overlay-p">
                                    <a href="images/portfolio/1.jpg" data-gal="prettyPhoto">
                                        <i class="fa fa-arrows-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div> <!-- /.portfolio-thumb -->
                            <h3 class="portfolio-title"><a href="#">Fantasy</a></h3>
                            <p>Description:Nulla in nunc elit. Etiam porttitor nibh et <b>Details..</b></p>
                        </div> <!-- /.portfolio-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                  {!!Html::image('images/portfolio/2.jpg')!!}
                                <div class="overlay-p">
                                    <a href="images/portfolio/2.jpg" data-gal="prettyPhoto">
                                        <i class="fa fa-arrows-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div> <!-- /.portfolio-thumb -->
                            <h3 class="portfolio-title"><a href="#">Botany</a></h3>
                            <p>Description:Nulla in nunc elit. Etiam porttitor nibh et <b>Details..</b></p>
                        </div> <!-- /.portfolio-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="portfolio-item">
                            <div class="portfolio-thumb">
                                 {!!Html::image('images/portfolio/3.jpg')!!}
                                <div class="overlay-p">
                                    <a href="images/portfolio/3.jpg" data-gal="prettyPhoto">
                                        <i class="fa fa-arrows-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div> <!-- /.portfolio-thumb -->
                            <h3 class="portfolio-title"><a href="#">Universe</a></h3>
                            <p>Description:Nulla in nunc elit. Etiam porttitor nibh et <b>Details..</b></p>
                        </div> <!-- /.portfolio-item -->
                    </div> <!-- /.col-md-4 -->
                
                   
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more">
                            <a  id="loadMore" class="largeButton portfolioBgColor">Load More</a>
                        </div>
                    </div>
                </div>
            </div> <!-- /#portfolio -->
@stop
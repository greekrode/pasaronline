<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>
        ECOMMERCE
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}" />

    <!-- theme stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.default.css') }}" />

    <!-- your stylesheet with modifications -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />

    <script type="text/javascript" src="{{ URL::asset('js/respond.min.js') }}"></script>

    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" />



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="/registeraccount">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="/" data-animate-hover="bounce">
                    <img src="http://placehold.it/80x50" alt="" class="hidden-xs">
                    <img src="http://placehold.it/80x50" alt="O" class="visible-xs"><span class="sr-only"></span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="/cart">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">My cart</span>
                    </a>
                    <a class="btn btn-default navbar-toggle" href="/sell">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Sell items</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="/">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">SEMBAKO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>SEMBAKO</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>SEMBAKO</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>FEATURED</h5>
                                            <ul>
                                                 <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                            <h5>FEATURED</h5>
                                            <ul>
                                                 <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">SEMBAKO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>SEMBAKO</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>SEMBAKO</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                                <li><a href="category.html">CATEGORY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="http://placehold.it/400x300" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="http://placehold.it/400x300" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="/cart" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">My Cart</span></a>
                </div>

                <div class="navbar-collapse collapse right" id="basket-overview" style="margin-right: 10px;">
                    <a href="/sell" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Sell Items</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->


    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-sm-6">  
                <img src="http://placehold.it/560x400">
            </div>
            <div class="col-sm-4">  
                <img src="http://placehold.it/370x200">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-6">
                            <img src="http://placehold.it/175x190">
                        </div>
                        <div class="col-sm-6">
                            <img src="http://placehold.it/175x190">
                        </div>
                    </div>
            </div>
            <div class="col-sm-2">
                <img src="http://placehold.it/200x400">
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 20px;">
        <div class="promo">
            <div class="row">
                <div class="col-sm-12">
                    <p>Today's Best Deals</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <img src="http://placehold.it/180x200">
                </div>
                <div class="col-sm-2">
                    <img src="http://placehold.it/180x200">
                </div>
                <div class="col-sm-2">
                    <img src="http://placehold.it/180x200">
                </div>
                <div class="col-sm-2">
                    <img src="http://placehold.it/180x200">
                </div>
                <div class="col-sm-2">
                    <img src="http://placehold.it/180x200">
                </div>
                <div class="col-sm-2">
                    <img src="http://placehold.it/180x200">
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 20px;">
        <div class="recommend">
            <div class="row">
                <div class="col-sm-6">
                    <p>Reommended for You</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                     <div class="carousel slide" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                            <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                            <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                             <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                    </div>
                    <!-- /Slide1 -->
                    <div class="item">
                            <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                            <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                             <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                    </div>
                    <!-- /Slide2 -->
                    <div class="item">
                            <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                            <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                             <div class="col-sm-2">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>     
                            </div>
                            <div class="col-sm-2">
                                 <a href="#"><img class="img-responsive" src="http://placehold.it/180x200" alt=""></a>
                            </div>
                    </div>
                    <!-- /Slide3 -->
                  <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                  </a>
                  <a data-slide="next" href="#myCarousel" class="carousel-control right">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                  </a>
                </div>

            </div>
            <!-- /#myCarousel -->
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="background-color: gray ">  
            <div class="container" style="padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-sm-2">
                        <img src="http://placehold.it/150x150" style="border-radius: 50%;">
                            <p class="caption">ada</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="http://placehold.it/150x150" style="border-radius: 50%;">
                            <p class="caption">ada</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="http://placehold.it/150x150" style="border-radius: 50%;">
                            <p class="caption">ada</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="http://placehold.it/150x150" style="border-radius: 50%;">
                            <p class="caption">ada</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="http://placehold.it/150x150" style="border-radius: 50%;">
                            <p class="caption">ada</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="http://placehold.it/150x150" style="border-radius: 50%;">
                            <p class="caption">ada</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- *** FOOTER ***
 _________________________________________________________ -->
         <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.html">About us</a>
                            </li>
                            <li><a href="text.html">Terms and conditions</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="contact.html">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="/registeraccount">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>SEMBAKO</h5>

                        <ul>
                            <li><a href="category.html">CATEGORY</a>
                            </li>
                            <li><a href="category.html">CATEGORY</a>
                            </li>
                            <li><a href="category.html">CATEGORY</a>
                            </li>
                        </ul>

                        <h5>SEMBAKO</h5>

                        <ul>
                            <li><a href="category.html">CATEGORY</a>
                            </li>
                            <li><a href="category.html">CATEGORY</a>
                            </li>
                            <li><a href="category.html">CATEGORY</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>ECOMMERCE</strong>
                            <br>jalan laravel
                            <br>Nomor 17
                            <br>kota medan
                            <br>sumut
                            <br>INDOG
                            <br>
                            <strong>DOGDOG</strong>
                        </p>

                        <a href="contact.html">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

             <button class="btn btn-default" type="button">Subscribe!</button>

         </span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 HMJ SI</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">BY<a href="http://hmjsi.org">HMJSI UPH MEDAN</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <!-- <script type="text/javascript" src="{{ URL::asset('js/front.js') }}"></script> -->
    
    <script type="text/javascript">
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel();
    });
    </script>

</body>

</html>

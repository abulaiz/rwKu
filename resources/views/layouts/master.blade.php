<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('main/img/fav-icon.png') }}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		    <title>@yield('title')</title>
        <!-- Icon css link -->
        <link href="{{ asset('main/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="{{ asset('main/vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('main/vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ asset('main/vendors/revolution/css/navigation.css') }}" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="{{ asset('main/vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('main/vendors/magnify-popup/magnific-popup.css') }}" rel="stylesheet">

        <link href="{{ asset('main/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('main/css/responsive.css') }}" rel="stylesheet">

        <!-- Extra plugin css -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

      @include('layouts.navbar')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    @yield('banner-title')
                    @yield('banner-detail')
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        @yield('content')

        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="{{ asset('main/img/footer-logo.png') }}" alt="">
                                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                    <h3>Galery</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-1.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-2.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-3.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-4.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-5.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-6.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-7.jpg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('main/img/instagram/ins-8.jpg') }}" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Langganan Berita RW</h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Langganan</button>
                                    </span>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; 2019 All rights reserved | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a> | System by <a href="#" target="_blank">GK-Studio</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h5>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('main/js/jquery-3.2.1.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('main/js/popper.min.js') }}"></script>
        <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('main/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('main/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <!-- Extra plugin css -->
        <script src="{{ asset('main/vendors/counterup/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('main/vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('main/vendors/counterup/apear.js') }}"></script>
        <script src="{{ asset('main/vendors/counterup/countto.js') }}"></script>
        <script src="{{ asset('main/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('main/vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('main/js/smoothscroll.js') }}"></script>

        <script src="{{ asset('main/js/theme.js') }}"></script>
    </body>
</html>

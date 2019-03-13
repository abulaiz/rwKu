<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Go-Bengkel | Layanan service mobil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets2/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/owl.carousel.css">
    <link rel="stylesheet" href="../../../assets2/css/owl.theme.css">
    <link rel="stylesheet" href="../../../assets2/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/normalize.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/wave/waves.min.css">
    <link rel="stylesheet" href="../../../assets2/css/wave/button.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/notika-custom-icon.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/jquery.dataTables.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../../../assets2/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../../../assets2/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
	<!-- Header -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="assets2/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="fa fa-user"></i></span></a>
                                <ul role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <li role="presentation">
                                        <a role="menuitem" href="auth/logout"><i style="margin-right: 10px;" class="fa fa-times mr-5"></i>Logout</a> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.menubar')
    @yield('content')
    <!-- jquery
        ============================================ -->
    <script src="../../../assets2/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="../../../assets2/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="../../../assets2/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="../../../assets2/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="../../../assets2/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="../../../assets2/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="../../../assets2/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="../../../assets2/js/counterup/jquery.counterup.min.js"></script>
    <script src="../../../assets2/js/counterup/waypoints.min.js"></script>
    <script src="../../../assets2/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="../../../assets2/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="../../../assets2/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../../assets2/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="../../../assets2/js/flot/jquery.flot.js"></script>
    <script src="../../../assets2/js/flot/jquery.flot.resize.js"></script>
    <script src="../../../assets2/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="../../../assets2/js/knob/jquery.knob.js"></script>
    <script src="../../../assets2/js/knob/jquery.appear.js"></script>
    <script src="../../../assets2/js/knob/knob-active.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="../../../assets2/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="../../../assets2/js/todo/jquery.todo.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="../../../assets2/js/wave/waves.min.js"></script>
    <script src="../../../assets2/js/wave/wave-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="../../../assets2/js/plugins.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="../../../assets2/js/data-table/jquery.dataTables.min.js"></script>
    <script src="../../../assets2/js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="../../../assets2/js/main.js"></script>    
</body>
</html>
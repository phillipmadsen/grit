<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Grace Management Login</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="Phillip Madsen" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->




        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />

        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/bower_components/font-awesome/css/font-awesome.min.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/assets/css/bootstrap-toggle.min.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/assets/fonts/clip-font.min.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/bower_components/iCheck/skins/all.css') !!}" />

        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/bower_components/sweetalert/dist/sweetalert.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/assets/css/main.min.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/clip/assets/css/main-responsive.min.css') !!}" />
        <link type="text/css" rel="stylesheet" media="print" href="{!! asset('/clip/assets/css/print.min.css') !!}" />
        <link type="text/css" rel="stylesheet" id="skin_color" href="{!! asset('/clip/assets/css/theme/light.min.css') !!}" />
        <link href="{!! asset('/clip/bower_components/summernote/dist/summernote.css') !!}" rel="stylesheet" />
        <link href="{!! asset('/clip/assets/css/bootstrap-toggle.min.css') !!}" rel="stylesheet" />



        <!--[if IE 7]>
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') !!}">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <body class="login example1">
        <div class="main-login col-sm-4 col-sm-offset-4">
            <div class="logo">GRACE<i class="clip-clip"></i>ADMIN</div>
            <!-- start: LOGIN BOX -->
            <div class="box-login">
@yield('login-content')

            </div>
            <!-- end: LOGIN BOX -->
            <!-- start: FORGOT BOX -->
            <div class="box-forgot">
@yield('forgot-content')
            </div>
            <!-- end: FORGOT BOX -->
            <!-- start: REGISTER BOX -->
            <div class="box-register">

@yield('register-content')
            </div>
            <!-- end: REGISTER BOX -->
            <!-- start: COPYRIGHT -->
            <div class="copyright">
                2016 &copy; GraceAdmin by Phillip Madsen.
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="{!! asset('/clip/assets/plugins/respond.min.js') !!}"></script>
        <script src="{!! asset('/clip/assets/plugins/excanvas.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/assets/plugins/jQuery-lib/1.10.2/jquery.min.js') !!}"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="{!! asset('/clip/assets/plugins/jQuery-lib/2.0.3/jquery.min.js') !!}"></script>
        <!--<![endif]-->




        <script type="text/javascript" src="{!! asset('/clip/bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/blockUI/jquery.blockUI.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/iCheck/icheck.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/jquery.cookie/jquery.cookie.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/bower_components/sweetalert/dist/sweetalert.min.js') !!}"></script>

        <script src="{!! asset('/clip/bower_components/summernote/dist/summernote.min.js') !!}"></script>
        <script src="{!! asset('/clip/assets/js/bootstrap-toggle.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/assets/js/min/main.min.js') !!}"></script>

        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{!! asset('/clip/assets/plugins/jquery-validation/dist/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/js/login.js') !!}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                @yield('inline')
                Login.init();
            });

            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });


        </script>
    </body>
    <!-- end: BODY -->
</html>

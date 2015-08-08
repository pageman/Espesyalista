<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $pageTitle or 'Dashboard'}} | Espesyalista</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/bootstrap02dc.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/materialadmin0768.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/font-awesome.min445a.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/material-design-iconic-font.min3cd8.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/libs/rickshaw/rickshawd56b.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/libs/morris/morris.core5e0a.css"/>

    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/jquery.dataTablesdee9.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.colVis941e.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.tableTools4029.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/select2/select201ef.css" />

    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/libs/toastr/toastrf6d7.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/dropzone/dropzone-theme23ba.css"/>
    <link rel="stylesheet" href="/assets/css/custom.css"/>
    <link rel="stylesheet" href="/assets/css/front.css"/>

    <style>
        .hide {
            display: none;
        }
    </style>
    @yield('page-styles')
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->

    <style>
        #loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(255, 255, 255, 0.90);
        }

        #loader img {
            align-content: center;
            position: fixed;
            left: 45%;
            top: 40%;
        }
    </style>
</head>

<body id="front_search">
<!-- BEGIN JAVASCRIPT -->
<script src="/assets/js/modules/materialadmin/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/bootstrap/bootstrap.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/spin.js/spin.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/autosize/jquery.autosize.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/cache/9782537cea5b6dc42cb13bd7821cceca.js"></script>
<script src="/assets/js/modules/materialadmin/libs/moment/moment.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/cache/ec2c8835c9f9fbb7b8cd36464b491e73.js"></script>
<script src="/assets/js/modules/materialadmin/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/toastr/toastr.js"></script>
<script src="/assets/js/modules/materialadmin/libs/dropzone/dropzone.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/cache/43ef607ee92d94826432d1d6f09372e1.js"></script>
{{--<script src="/assets/js/modules/materialadmin/libs/rickshaw/rickshaw.min.js"></script>--}}
<script src="/assets/js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js"></script>
<script src="/assets/js/modules/materialadmin/libs/select2/select2.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/demo/Demo.js"></script>

<!-- END JAVASCRIPT -->
@yield('content')
@yield('page-scripts')

</body>
</html>
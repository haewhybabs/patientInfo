<!doctype html>
<html class="no-js" lang="">
<head>
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset("admin/css/toastr.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    {{-- Toast --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
  {{-- <script type='text/javascript' src='{{asset('assets/js/jquery.js?ver=1.11.1')}}'></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script> --}}

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{URL::TO('admin/dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Content</li>
                    <li class="menu-item">
                        <a href="{{URL::TO("admin/patients")}}" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Patients</a>
                    </li>
        
                    <li class="menu-item">
                        <a href="{{URL::TO('admin/doctors')}}" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Doctors</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{URL::TO('admin/logout')}}" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{URL::TO('admin/dashboard')}}"><h4>{{env('APP_NAME')}}</h4></a>
                    <a class="navbar-brand hidden" href="{{URL::TO('admin/dashboard')}}"><h4>{{env('APP_NAME')}}</h4></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </header>
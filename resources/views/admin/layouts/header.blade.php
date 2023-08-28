<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>

    
 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B302GTP20W');
</script>
 
       

        

    
    <meta charset="utf-8"/>
    <title>   {{ setting()->name  }} @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
   
    @stack('meta')

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
          
    <link href="{{url('/')}}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{url('/')}}/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{url('/')}}/assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components"
          type="text/css"/>




    <!--link href="{{url('/')}}/assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css"/ !-->


    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{url('/')}}/assets/layouts/layout/css/layout-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/layouts/layout/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{url('/')}}/assets/layouts/layout/css/custom-rtl.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="shortcut icon" href="{{url('/')}}/{{ setting()->logo  }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/{{ setting()->logo  }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/{{ setting()->logo  }}" />

      
   <link href="{{url('/')}}/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
 
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{url('/')}}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    @stack('style')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link href="{{ asset('/assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">

   <link rel="stylesheet" href="{{url('/')}}/assets/jstree/dist/themes/default/style.min.css">
 

        <link href="{{url('/')}}/assets/layouts/layout/css/themes/darkblue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
  <style type="text/css">

        .btn {
  outline: 0 !important;
  margin-bottom: 3%;
}

        /* Switch
           ========================================================================== */
        .switch,
        .switch * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -khtml-user-select: none;
            -ms-user-select: none;
        }

        .switch label {
            cursor: pointer;
        }

        .switch label input[type=checkbox] {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .switch label input[type=checkbox]:checked + .lever {
            background-color: #84c7c1;
        }

        .switch label input[type=checkbox]:checked + .lever:after {
            background-color: #26a69a;
            left: 24px;
        }

        .switch label .lever {
            content: "";
            display: inline-block;
            position: relative;
            width: 40px;
            height: 15px;
            background-color: #818181;
            border-radius: 15px;
            margin-right: 10px;
            -webkit-transition: background 0.3s ease;
            -o-transition: background 0.3s ease;
            transition: background 0.3s ease;
            vertical-align: middle;
            margin: 0 16px;
        }

        .switch label .lever:after {
            content: "";
            position: absolute;
            display: inline-block;
            width: 21px;
            height: 21px;
            background-color: #F1F1F1;
            border-radius: 21px;
            -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
            left: -5px;
            top: -3px;
            -webkit-transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease;
            transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease;
            -o-transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
            transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
            transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease, -webkit-box-shadow 0.1s ease;
        }


        input[type=checkbox]:checked:not(:disabled) ~ .lever:active::after,
        input[type=checkbox]:checked:not(:disabled).tabbed:focus ~ .lever::after {
            -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
        }

        input[type=checkbox]:not(:disabled) ~ .lever:active:after,
        input[type=checkbox]:not(:disabled).tabbed:focus ~ .lever::after {
            -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
        }

        .switch input[type=checkbox][disabled] + .lever {
            cursor: default;
        }

        .switch label input[type=checkbox][disabled] + .lever:after,
        .switch label input[type=checkbox][disabled]:checked + .lever:after {
            background-color: #BDBDBD;
        }
        
        .page-header.navbar {
            background-color: #67809f;
        }
        .page-sidebar .page-sidebar-menu, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu {
            background-color: #fff;
        }

      
         body{
            background-color: #fff;
        }
        .page-sidebar .page-sidebar-menu.page-sidebar-menu-light>li .sub-menu, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu.page-sidebar-menu-light>li .sub-menu {
            background-color: #fff;
        }

 .cbp-caption-active .cbp-caption, .cbp-caption-active .cbp-caption-defaultWrap, .cbp-caption-active .cbp-caption-activeWrap
 {
    border: solid 1px #eee;
 }

 .page-sidebar .page-sidebar-menu > li > a > i[class*="icon-"], .page-sidebar .page-sidebar-menu > li > a > i[class^="icon-"], .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu > li > a > i[class*="icon-"], .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu > li > a > i[class^="icon-"] {
  color: #000;
}
.page-sidebar .page-sidebar-menu > li > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu > li > a {
  color: #000;
}


.page-sidebar .page-sidebar-menu.page-sidebar-menu-light > li.active.open > a, .page-sidebar .page-sidebar-menu.page-sidebar-menu-light > li.active > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu.page-sidebar-menu-light > li.active.open > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu.page-sidebar-menu-light > li.active > a {
background: linear-gradient(-118deg, #7367F0, rgba(115, 103, 240, 0.7));
box-shadow: 0 0 10px 1px rgba(115, 103, 240, 0.7);
  border-right: 4px solid #d64635;
  color: #f1f1f1;
}

.page-sidebar .page-sidebar-menu.page-sidebar-menu-light > li.open > a, .page-sidebar .page-sidebar-menu.page-sidebar-menu-light > li:hover > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu.page-sidebar-menu-light > li.open > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu.page-sidebar-menu-light > li:hover > a {
background: linear-gradient(-118deg, #7367F0, rgba(115, 103, 240, 0.7));
box-shadow: 0 0 10px 1px rgba(115, 103, 240, 0.7);
  border-right: 4px solid #d64635;
  color: #f1f1f1;
}

.page-sidebar .page-sidebar-menu > li > a > i, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu > li > a > i {
  color: #000;
}

 
 .page-header.navbar .top-menu .navbar-nav > li.dropdown .dropdown-toggle:hover, .page-header.navbar .top-menu .navbar-nav > li.dropdown.open .dropdown-toggle {
 background: linear-gradient(-118deg, #7367F0, rgba(115, 103, 240, 0.7));
 
   
  
}
.pb-50, .py-50 {
  padding-bottom: 0.5rem !important;
}

.badge-success {
  background-color: #28C76F;
}

.btn.btn-outline.red {
  border-color: #000;
  color: #fff;
  background: 0 0;
}

.new1 {
  border-top: 1px solid red;
}

  @media (max-width: 767px)
  {
.page-header.navbar .top-menu .navbar-nav > li.dropdown-inbox .dropdown-menu 
{
  margin-left: -105px;

}

.page-header.navbar .top-menu .navbar-nav > li.dropdown-notification .dropdown-menu {
 margin-left: -108px;
}

.page-header.navbar .top-menu .navbar-nav > li.dropdown-extended .dropdown-menu {
min-width: 367px;
max-width: 300px;
width: 250px;
z-index: 9995;
height: 1000px;
}

 

}

@media (min-width: 1200px)
 {

    .page-header.navbar .top-menu .navbar-nav > li.dropdown-extended .dropdown-menu {
min-width: 500px;
max-width: 500px;
width: 250px;
z-index: 9995;
}
 
   }

 
.saddfs
{
    text-align: left;
float: left;
margin-left: 4%;
}

.page-sidebar .page-sidebar-menu .sub-menu > li > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu .sub-menu > li > a {
  color: #fff;
}

  @media (max-width: 480px)
{
    .page-header.navbar .top-menu .navbar-nav > li.dropdown-user .dropdown-toggle 
{
  background-color: #fff;
}


}

.page-header.navbar .top-menu .navbar-nav > li.dropdown .dropdown-toggle .badge.badge-default {
  background-color: #d64635;
  color: #fff;
}

.Freeshipping
{
    position: absolute;
margin: 5%;
color: #fff;
font-weight: bold;
background-color: black;
height: 29px;
width: 100px;
padding: 2px;
border-radius: 16%;
font-family: ArabicFontL;
}

.Freeshippingwithoutpostion
{
    color: #fff;
font-weight: bold;
background-color: black;
height: 29px;
width: 100px;
padding: 2px;
border-radius: 16%;
font-family: ArabicFontL;
}

.page-header.navbar .top-menu .navbar-nav > li.dropdown .dropdown-toggle > i {
  color: #fff;
}
.page-header.navbar .top-menu .navbar-nav > li.dropdown-user .dropdown-toggle {
  padding: 16px 8px 13px 6px;
  color: #fff;
}
.page-header.navbar .top-menu .navbar-nav > li.dropdown .dropdown-toggle > i {
  color: #fff;
}

    </style >


    

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white page-md">
<div class="page-wrapper">
   <div class="portlet-body">

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outlay - Responsive Material Design Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/css/animate.css">
    <link rel="stylesheet" href="plugins/css/ripples.min.css">
    <link rel="stylesheet" href="plugins/css/jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="css/outlay.css">
    
    <link rel="stylesheet" href="css/colors/green.css">
    <!-- Skin switcher -->
    <!-- Manually link your desire skin -->
    <style type="text/css">
    .skins {
        position: fixed;
        top: 190px;
        left: -120px;
        transition: .3s ease-in-out;
        z-index: 1000;
    }
    
    .skins:hover {
        left: 0;
    }
    
    .skin-colors {
        list-style: none;
        padding: 20px;
        margin: 0;
        background-color: #fff;
        width: 120px;
        border: 1px solid #e7e7e7;
    }
    
    .skin-colors li {
        position: relative;
        display: inline-block;
        width: 32px;
        height: 32px;
        cursor: pointer;
        margin: -3px;
        line-height: 0;
        transition: .3s ease-in-out;
    }
    
    .skin-colors li:hover {
        opacity: .7;
    }
    
    .skin-colors li.active::before {
        content: "\f00c";
        font-family: FontAwesome;
        font-size: 20px;
        width: 32px;
        line-height: 32px;
        text-align: center;
        position: absolute;
        color: #fff;
    }
    
    .skin-toggler {
        position: absolute;
        display: inline-block;
        width: 50px;
        height: 50px;
        right: -49px;
        top: 0;
        background-color: #fff;
        font-size: 30px;
        text-align: center;
        line-height: 50px;
        color: #888;
        border: 1px solid #e7e7e7;
        border-left: 0;
    }
    

    </style>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>O</b>L</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Knowitz</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-fixed-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle waves-effect" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav" data-dropdown-in="flipInY" data-dropdown-out="fadeOut">
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0);" class="waves-effect" data-toggle="collapse" data-target="#site_navbar_search">
                                <i class="fa fa-search top-nav-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link toggle-fullscreen" href="#">
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </li>
                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-info">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 7 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="notification-menu">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar2.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">John Deo <small> <i class="fa fa-clock-o"></i> 4 mins</small></h4>
                                                    <p>Started Following you </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"> Vance Osborn<small> <i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                    <p>Forked your project</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar3.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Gary Robinson<small> <i class="fa fa-clock-o"></i> 8 mins</small></h4>
                                                    <p>Created new project with John Deo</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar4.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Kelly Richards<small> <i class="fa fa-clock-o"></i> 3 hours</small></h4>
                                                    <p>Pined an Event for tomorrow</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar5.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Steven Peterson<small> <i class="fa fa-clock-o"></i> 2 days</small></h4>
                                                    <p>Started Following you </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar6.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Micheal Terry<small> <i class="fa fa-clock-o"></i> 4 days</small></h4>
                                                    <p>Started Following you </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle img-48" src="img/avatars/avatar7.png" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">David Perry<small> <i class="fa fa-clock-o"></i> 1 weeks</small></h4>
                                                    <p>Commented on your commit</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Gary Robinson</span>
                                <!-- The user image in the navbar-->
                                <img src="img/avatars/avatar4.png" class="user-image" alt="User Image">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox <span class="label label-danger">3</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-search-overlap" aid="site_navbar_search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <div class="input-group">
                                    <input type="text" id="overlay_search" name="overlay-search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon">
                                    <a  href="javascript:void(0)" class="close-input-overlay waves-effect" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar sidebar-light">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="image waves-effect">
                        <img src="img/avatars/avatar4.png" class="img-circle img-responsive " alt="User Image">
                    </div>
                    <div class="text-center info">
                        <strong>Gary Robinson</strong>
                        <i>UX/ Designer</i>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">Navigation</li>
                    <li class="active ">
                        <a href="index.html" class="waves-effect"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-sliders"></i> <span>UI Elements</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="inc/ui-elements/grid.html">Grid</a></li>
                            <li><a href="inc/ui-elements/buttons.html">Buttons</a></li>
                            <li><a href="inc/ui-elements/icons.html">Icons</a></li>
                            <li><a href="inc/ui-elements/notifications.html">Notifications</a></li>
                            <li><a href="inc/ui-elements/panels.html">Panels</a></li>
                            <li><a href="inc/ui-elements/tabs-and-accordions.html">Tabs & Accordions</a></li>
                            <li><a href="inc/ui-elements/slider.html">Range Slider</a></li>
                            <li><a href="inc/ui-elements/modal.html">Modals</a></li>
                            <li><a href="inc/ui-elements/typography.html">Typography</a></li>
                            <li><a href="inc/ui-elements/miscellaneous.html">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Forms</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href='inc/forms/basic-form.html'>Basic</a></li>
                            <li><a href='inc/forms/advanced-form.html'>Advanced Froms</a></li>
                            <li><a href='inc/forms/wizard.html'>Wizard</a></li>
                            <li><a href='inc/forms/wysiwyg-editors.html'>Wysiwyg Editors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-list-ul"></i> <span>Tables</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href='inc/tables/table-basic.html'>Basic</a></li>
                            <li><a href='inc/tables/data-tables.html'>Data Table</a></li>
                            <li><a href='inc/tables/x-editable.html'>Editable</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-area-chart"></i> <span>Charts</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href='inc/charts/chartjs.html'>Chartjs</a></li>
                            <li><a href='inc/charts/flot-chart.html'>Flot Chart</a></li>
                            <li><a href='inc/charts/morris.html'>Morris</a></li>
                            <li><a href='inc/charts/sparkline.html'>Sparkline</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="inc/widgets.html"><i class="fa fa-puzzle-piece"></i> <span>Widgets</span> <span class="label label-success pull-right">14</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-television"></i> <span>Pages</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href='inc/pages/login.html'>Login</a></li>
                            <li><a href='inc/pages/register.html'>Register</a></li>
                            <li><a href='inc/pages/login-register.html'>Login & Register</a></li>
                            <li><a href='inc/pages/forgot-password.html'>Forgot Password</a></li>
                            <li><a href='inc/pages/timeline.html'>Timeline</a></li>
                            <li><a href='inc/pages/invoice.html'>Invoice</a></li>
                            <li><a href='inc/pages/404.html'>404</a></li>
                        </ul>
                    </li>
                    <li class="header">More</li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-envelope"></i> <span>Email</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href='inc/email/inbox.html'>Inbox</a></li>
                            <li><a href='inc/email/email-details.html'>Details</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-map"></i> <span>Map</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href='inc/maps/google-map.html'>Google</a></li>
                            <li><a href='inc/maps/vector-map.html'>Vector Map</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
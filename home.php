<?php 
include("header.php");
?>

 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   Dashboard
                    <small>Dashboard Widgets</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <div class="content">
                <!-- Your Page Content Here -->
                <!-- header widgets -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget-tile">
                            <div id="spark1" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="value"><span class="indicator fa-green fa fa-angle-double-up"></span><span data-toggle="counter" data-end="645" class="number">0</span>
                                </div>
                                <div class="desc">Download</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget-tile">
                            <div id="spark2" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="value"><span class="indicator fa-blue fa fa-angle-up"></span><span data-toggle="counter" data-end="99" data-suffix="%" class="number">0</span>
                                </div>
                                <div class="desc">Revenue</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget-tile">
                            <div id="spark3" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="value"><span class="indicator indicator-equal fa fa-angle-right"></span><span data-toggle="counter" data-end="1313" class="number">0</span>
                                    <div class="desc">Veiws</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget-tile">
                            <div id="spark4" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="value"><span class="indicator fa fa-orange fa-xs fa-angle-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                                </div>
                                <div class="desc">Projects</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header widgets -->
                <!-- second row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h3 class="panel-title txt-dark"><i class="icon-chart mr-10"></i>Radar Chart</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper">
                                <div class="panel-body">
                                    <canvas id="chart_3" height="360"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="panel text-center">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h3 class="panel-title txt-dark"><i class="fa fa-area-chart"> </i> Area Chart</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div id="morris_area_chart" class="morris-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end second row -->
                <!-- third row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Visitors location</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div id="visitors_map" style="height: 400px"></div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="table-wrap">
                                                <table class="table visitors-country">
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="img/flags/australia.svg" alt="country flag"></td>
                                                            <td>Australia</td>
                                                            <td>2349</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/flags/canada.svg" alt="country flag"></td>
                                                            <td>Canada</td>
                                                            <td>813</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/flags/united-kingdom.svg" alt="country flag"></td>
                                                            <td>United Kigdom</td>
                                                            <td>334</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/flags/united-states-of-america.svg" alt="country flag"></td>
                                                            <td>United States</td>
                                                            <td>134</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/flags/france.svg" alt="country flag"></td>
                                                            <td>France</td>
                                                            <td>90</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/flags/china.svg" alt="country flag"></td>
                                                            <td>China</td>
                                                            <td>50</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/flags/russia.svg" alt="country flag"></td>
                                                            <td>Russia</td>
                                                            <td>10</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end third row -->
                <!-- fourth row -->
                <div class="row">
                    <!-- user card -->
                    <div class="col-md-4">
                        <div class="widget bg-white user-card">
                            <div class="u-img img-cover" style="background-image: url(img/cards/2.jpg);"></div>
                            <div class="u-content">
                                <div class="avatar box-80">
                                    <img class="img-responsive img-circle img-70 shadow-white" src="img/avatars/avatar4.png" alt="">
                                    <i class="fa fa-circle-o fa-green"></i>
                                </div>
                                <h5><a class="text-black" href="#">Gary Robinson</a></h5>
                                <p class="text-muted">UX/ Designer</p>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-raised btn-success">Follow</button>
                                    <button type="submit" class="btn btn-raised btn-info">Message</button>
                                </div>
                            </div>
                            <div class="user-card-social">
                                <ul>
                                    <li><a href="#" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn btn-just-icon btn-simple btn-instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end user card -->
                    <!-- Todo -->
                    <div class="col-md-4">
                        <div class="panel panel-border-color panel-border-color-success">
                            <h3 class="panel-heading ">Todo List</h3>
                            <div class="panel-body">
                                <!-- Todo-List -->
                                <ul class="todo-list">
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox001"> <span>Check your Email</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox002" checked> <span>Play Game with Friends</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox003"> <span>Go to Store for Shopping</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox004"> <span>Read Book for 10 minutes</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox005" checked> <span>Write Code for Practice</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox006"> <span>Play Football Game</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox007"> <span>Write Blog Article</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" id="checkbox008" checked> <span>Prepare for Presentation</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /Todo-List -->
                                <!-- New todo -->
                                <div class="form-group">
                                    <input type="text" name="send-msg" class="form-control" placeholder="Type something">
                                    <span class="fa fa-plus fa-red form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end todo -->
                    <!-- signin form -->
                    <div class="col-md-4">
                        <div class="panel login-panel">
                            <div class="panel-heading text-center">
                                <h3>Login Form</h3>
                            </div>
                            <div class="user-card-social text-center">
                                <ul>
                                    <li><a href="#" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i><div class="ripple-container"></div></a></li>
                                    <li><a href="#" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal">
                                    <div class="form-group ">
                                        <label for="inputEmail3" class="col-sm-2 control-label">
                                            <i class="fa fa-user-o"></i>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group remember-label">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label class="control-label">
                                                    <input type="checkbox"> Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end signin form -->
                </div>
                <!-- end fourth row  -->
                <!-- Fifth row   -->
                <div class="row">
                    <!-- User Activity -->
                    <div class="col-md-4">
                        <div class="panel">
                            <h3 class="panel-heading">User Activity</h3>
                            <div class="panel-body">
                                <div class="streamline">
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Marc Evans</a>
                                            <span class="text-block font-14">Today</span>
                                            <p class="text-gray">Created New Application</p>
                                        </div>
                                    </div>
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar2.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Marcia Castro</a>
                                            <span class="text-block font-14">Yesterday</span>
                                            <p class="text-gray">Added New User to Project</p>
                                        </div>
                                    </div>
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar3.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Abigail Phillips</a>
                                            <span class="text-block font-14">4 days ago</span>
                                            <p class="text-gray">Removed database from cpanel</p>
                                        </div>
                                    </div>
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar4.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Susan Harris</a>
                                            <span class="text-block font-14">3 Jan</span>
                                            <p class="text-gray">Started The Startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End User Activity -->
                    <!-- User lists -->
                    <div class="col-md-4">
                        <div class="panel">
                            <h3 class="panel-heading">Users List</h3>
                            <div class="panel-body">
                                <ul class="chat-list-wrap">
                                    <li class="chat-list">
                                        <div class="chat-body">
                                            <a class="" href="#">
                                                <div class="chat-data">
                                                    <img class="user-img img-circle" src="img/avatars/avatar.png" alt="user">
                                                    <div class="user-data">
                                                        <span class="name block capitalize-font">Manuel Carpenter</span>
                                                        <span class="time block text-gray">8min</span>
                                                    </div>
                                                    <div class="status online"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                            <a class="" href="#">
                                                <div class="chat-data">
                                                    <img class="user-img img-circle" src="img/avatars/avatar2.png" alt="user">
                                                    <div class="user-data">
                                                        <span class="name block capitalize-font">Irene Ramirez</span>
                                                        <span class="time block text-gray">30min</span>
                                                    </div>
                                                    <div class="status online"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                            <a class="" href="#">
                                                <div class="chat-data">
                                                    <img class="user-img img-circle" src="img/avatars/avatar3.png" alt="user">
                                                    <div class="user-data">
                                                        <span class="name block capitalize-font">Bobby Pierce</span>
                                                        <span class="time block text-gray">2pm</span>
                                                    </div>
                                                    <div class="status away"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                            <a class="" href="#">
                                                <div class="chat-data">
                                                    <img class="user-img img-circle" src="img/avatars/avatar4.png" alt="user">
                                                    <div class="user-data">
                                                        <span class="name block capitalize-font">Vanessa Lawson</span>
                                                        <span class="time block text-gray">Wed</span>
                                                    </div>
                                                    <div class="status offline"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end User lists -->
                    <!-- Chat Room -->
                    <div class="col-md-4">
                        <div class="panel panel-border-color panel-border-color-success">
                            <div class="panel-heading text-center">Alexa Ali</div>
                            <div class="panel-body">
                                <div class="chat-content">
                                    <ul>
                                        <li class="friend">
                                            <div class="friend-msg-wrap">
                                                <img class="user-img img-circle block pull-left" src="img/avatars/avatar3.png" alt="user">
                                                <div class="msg pull-left">Hi, How are you doing
                                                    <div class="msg-per-detail mt-5">
                                                        <span class="msg-per-name txt-success">Jane</span>
                                                        <span class="msg-time txt-grey">1:00pm</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li class="self">
                                            <div class="self-msg-wrap">
                                                <div class="msg block pull-right">Hi, me fine and u?
                                                    <div class="msg-per-detail mt-5">
                                                        <span class="msg-time txt-grey">1:03pm</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li class="friend">
                                            <div class="friend-msg-wrap">
                                                <img class="user-img img-circle block pull-left" src="img/avatars/avatar3.png" alt="user">
                                                <div class="msg pull-left">Thank's, me too, doing well
                                                    <div class="msg-per-detail mt-5">
                                                        <span class="msg-per-name txt-success">Jane</span>
                                                        <span class="msg-time txt-grey">1:04pm</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="input_msg_send" name="send-msg" class="form-control" placeholder="Type something">
                                    <span class="fa fa-send-o form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Chat Room -->
                </div>
                <!-- end Fifth row -->
                <!-- sixth row -->
                <div class="row">
                    <!-- Status Row -->
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_1" class="easypiechart skill-circle" data-percent="84">
                                                <span class="percent head-font">84</span>
                                    </span>
                                    <span class="skill-head">Developers</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_2" class="easypiechart skill-circle" data-percent="65">
                                            <span class="percent head-font">65</span>
                                    </span>
                                    <span class="skill-head">Skills</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_3" class="easypiechart skill-circle" data-percent="87">
                                                <span class="percent head-font">87</span>
                                    </span>
                                    <span class="skill-head">Completed</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_4" class="easypiechart skill-circle" data-percent="90">
                                                <span class="percent head-font">90</span>
                                    </span>
                                    <span class="skill-head">Progress</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Status Row -->
                </div>
                <!-- ens sixth row -->
            </div>
            <!-- /.content -->
        </div>
		
		<?php 
include("footer.php");
?>

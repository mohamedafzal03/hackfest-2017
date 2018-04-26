
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
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
<body class="skin-red outlay-register-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-container">
                    <div class="card"></div>
                    <div class="card">
                        <h1 class="title">Login</h1>
                        <form>
                            <div class="input-login-container">
                                <input type="text" id="username" required="required" />
                                <label for="username">Username</label>
                                <div class="bar"></div>
                            </div>
                            <div class="input-login-container">
                                <input type="password" id="password" required="required" />
                                <label for="password">Password</label>
                                <div class="bar"></div>
                            </div>
                            <div class="button-login-container">
                                <button class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card alt">
                        <div class="login-toggle"></div>
                        <h1 class="title">Register
                      <span class="login-close"></span>
                    </h1>
                        <form>
                            <div class="input-login-container">
                                <input type="text" id="username2" required="required" />
                                <label for="username2">Username</label>
                                <div class="bar"></div>
                            </div>
                            <div class="input-login-container">
                                <input type="password" id="password2" required="required" />
                                <label for="password2">Password</label>
                                <div class="bar"></div>
                            </div>
                            <div class="input-login-container">
                                <input type="password" id="confirm-password" required="required" />
                                <label for="confirm-password">Repeat Password</label>
                                <div class="bar"></div>
                            </div>
                            <div class="button-login-container">
                                <button class="btn btn-success btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- REQUIRED JS SCRIPTS -->
    <script src="plugins/js/jquery-3.1.1.min.js"></script>
    <script src="plugins/js/bootstrap.js"></script>
    <script src="plugins/js/material.min.js"></script>
    <script src="plugins/js/ripples.min.js"></script>
    <script src="js/app.js"></script>
    <script>
    /*Login and Register */
    jQuery(document).ready(function($) {
        'use strict';
        
        $('.login-toggle').on('click', function() {
            $('.login-container').stop().addClass('active');
        });

        $('.login-close').on('click', function() {
            $('.login-container').stop().removeClass('active');
        });
    });
    </script>
</body>


<!-- Mirrored from www.upplanet.com/bighero/outlay-demo/inc/pages/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2017 16:19:11 GMT -->
</html>

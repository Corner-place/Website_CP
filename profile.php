<?php
    session_start();

    if(isset($_SESSION["uid"])) {
        require './includes/connect.php';
        require './includes/functions.php';
    } else {
        $conn->close();
        header('Location: ./index.php');
        die;
    }
    $uid = $_SESSION['uid'];
    $query = "SELECT * FROM userinfo WHERE uid = ".$uid.";";
    
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    $fname = $row['fname'];
    $lname = $row['lname'];
    $uname = $row['uname'];
    $email = $row['email'];
    $doj = $row['doj'];
    $collegeId = $row['collegeId'];
    if ($row['collegeName'] === '1') $collegeName = "Chitkara University, Himachal Pradesh";
    else if ($row['collegeName'] === '2') $collegeName = "Chitkara University, Punjab";
    else $collegeName = "Other";
    $phone = $row['phone'];
    if ($row['year'] === '1') $year = "1st Year";
    else if ($row['year'] === '2') $collegeName = "2nd Year";
    else if ($row['year'] === '3') $collegeName = "3rd Year";
    else if ($row['year'] === '4') $collegeName = "4nd Year";
    if ($row['branch'] === '0') $branch = "Computer Science and Enigineering";
    else if ($row['branch'] === '1') $branch = "Electronics and Communication Engineering";
    else $branch = "Civil Engineering";
    $dob = $row['dob'];
    if ($row['gender'] === 1) $gender = "Male";
    else if ($row['gender'] === 2) $branch = "Female";
    else $gender = "Other";
    $about = $row['about'];

    $conn->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Profile | CornerPlace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-polymaps/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/component.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen">
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <link type="text/css" rel="stylesheet" media="all" href="stylesheets/chat.css" />
    <link type="text/css" rel="stylesheet" media="all" href="stylesheets/screen.css" />

<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="condense-menu">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="#">
              <img src = "assets/img/logo-cornerplace-white.png" class="logo" width="200" height="50">
          </a>
          <!-- END LOGO -->
          <ul class="nav pull-right notifcation-center">
            <li class="dropdown visible-xs visible-sm">
              <a href="#" data-webarch="toggle-right-side">
                <i class="material-icons">chat</i>
              </a>
            </li>
          </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
            <ul class="nav quick-section">
                <!--Left nav-->
              
            </ul>
          </div>
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    Welcome to CornerPlace!
                  </div>
                  <div class="description">
                    Thank you for registering here.
                  </div>
                  <div class="date pull-left">
                    A min ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            <ul class="nav quick-section ">
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                  <i class="material-icons">notifications_none</i>
                  <span class="badge badge-important bubble-only"></span>
                </a>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                  <i class="material-icons">tune</i>
                </a>
                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li>
                    <a href="profile.php"> Profile</a>
                  </li>
                  <li>
                    <a href="messenger.php"> Messenger</a>
                  </li>
                  <li>
                    <a href="upload.php"> Upload Resource</a>
                  </li>
                  
                  <li class="divider"></li>
                  <li>
                    <a href="dologout.php"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Logout</a>
                  </li>
                </ul>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
            </ul>
          </div>
          <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar mini" id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <img src="assets/img/profiles/ba.jpg" alt="" data-src="assets/img/profiles/ba.jpg" data-src-retina="assets/img/profiles/ba2x.jpg" width="69" height="69" />
              <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
              <div class="username"><?php echo $_SESSION["fname"]; ?> <span class="semi-bold"><?php echo $_SESSION["lname"]; ?></span></div>
              <div class="status">Life happens.</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm">Options <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
          <ul>
            <li class="open active">
              <a href="dashboard.php"> <i class="material-icons">home</i> <span class="title">Home</span> <span class="label label-important bubble-only pull-right "></span></a>
            </li>            
            <li class="">
              <a href="javascript:;"> <i class="material-icons">more_horiz</i> <span class="title">Me</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="profile.php"> Profile </a> </li>
                <li> <a href="messenger.php"> Messenger </a> </li>
                <li> <a href="upload.php"> Upload Resources </a> </li>
                <!--<li>
                  <a href="javascript:;"> <span class="title">Level 2</span> <span class=" arrow"></span> </a>
                  <ul class="sub-menu">
                    <li> <a href="javascript:;"> Sub Menu </a> </li>
                    <li> <a href="ujavascript:;"> Sub Menu </a> </li>
                  </ul>
                </li>-->
              </ul>
            </li>
          </ul>
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
      <a href="#" class="scrollup">Scroll</a>
      <div class="footer-widget">
        <div class="pull-right">
          <a href="dologout.php"><i class="material-icons">power_settings_new</i></a></div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content condensed">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class=" tiles white col-md-12 no-padding">
                <div class="tiles green cover-pic-wrapper">
                  <div class="overlayer bottom-right">
                    <div class="overlayer-wrapper">
                      <div class="padding-10 hidden-xs">
                        
                        <!--<button type="button" class="btn btn-primary btn-small">Edit Profile</button>-->
                      </div>
                    </div>
                  </div>
                  <img src="assets/img/cover_pic.png" alt="">
                </div>
                <div class="tiles white">
                  <div class="row">
                    <div class="col-md-3 col-sm-3">
                      <div class="user-profile-pic">
                        <img width="69" height="69" data-src-retina="assets/img/profiles/ba2x.jpg" data-src="assets/img/profiles/ba.jpg" src="assets/img/profiles/ba2.jpg" alt="">
                      </div><!--
                      <div class="user-mini-description">
                        <h3 class="text-success semi-bold">
									2548
									</h3>
                        <h5>Followers</h5>
                        <h3 class="text-success semi-bold">
									457
									</h3>
                        <h5>Following</h5>
                      </div>-->
                    </div>
                    <div class="col-md-5 user-description-box  col-sm-5">
                      <h4 class="semi-bold no-margin"><?php echo $fname." ".$lname;?></h4>
                      <!--<h6 class="no-margin">full name</h6>-->
                      <br>
                      <p><i class="fa fa-briefcase"></i><?php echo $uname; ?></p>
                      <p><i class="fa fa-globe"></i><?php echo $email; ?></p>
                      <p><i class="fa fa-file-o"></i><?php echo $phone; ?></p>
                      <p><i class="fa fa-envelope"></i><?php echo $collegeName; ?></p>
                        <p><i class="fa fa-envelope"></i><?php echo $year; ?></p>
                         <p><i class="fa fa-envelope"></i><?php echo $branch; ?></p> 
                        <p><i class="fa fa-envelope"></i><?php echo $about; ?></p>
                    </div>
                    <div class="col-md-3  col-sm-3">
                  
                      <div class="clearfix"></div>
                    </div>
                  </div>
                 
            </div>
            <div class="col-md-6">
             
             
              <!--<div class="row">
                <div class="col-md-12 no-padding">
                  <div class="tiles white">
                    <textarea rows="3" class="form-control user-status-box post-input" placeholder="Whats on your mind?"></textarea>
                  </div>
                  <div class="tiles grey padding-10">
                    <div class="pull-left">
                      <button class="btn btn-default btn-sm btn-small" type="button"><i class="fa fa-camera"></i></button>
                      <button class="btn btn-default btn-sm btn-small" type="button"><i class="fa fa-map-marker"></i></button>
                    </div>
                    <div class="pull-right">
                      <button class="btn btn-primary btn-sm btn-small" type="button">POST</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>-->
              <br>
              <br>
               </div>
                        </div>
                       
                   
      <!-- END CONTAINER -->
      <!-- BEGIN CHAT -->
      
    </div>
    <!-- BEGIN CORE JS FRAMEWORK-->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
  </body>
</html>
<?php
    session_start();
    


    if(isset($_SESSION["uid"])) {
        require './includes/connect.php';
        
    } else {
        header('Location: ./index.php');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Dashboard | CornerPlace</title>
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
        <div class="content sm-gutter">
          <div class="row">
            <div class="col-md-6 col-vlg-4 col-sm-12 ">
              <!-- BEGIN BLOG POST BIG IMAGE WIDGET -->
              <div class="tiles overflow-hidden full-height tiles-overlay-hover m-b-10 widget-item">
                <div class="controller overlay right">
                  <a href="javascript:;" class="remove"></a>
                </div>
                <div class="overlayer tiles-overlay auto blue">
                  <div class="overlayer-wrapper  p-t-20 p-l-20 p-r-20 p-b-20"> <i class="fa fa-map-marker fa-2x"></i>
                      <p class="p-t-20 text-white-opacity">cornerplace</p>
                    <h3 class="text-white">Introducing <span class="semi-bold"><span>cornerplace</span> <br>
                </span> on the roll</h3>
                    <p class="p-t-20"><span class="bold">eBooks</span>-<span class="m-l-10 bold">Magazines</span></p>
                  </div>
                </div>
                <div class="overlayer bottom-left fullwidth">
                  <div class="overlayer-wrapper">
                    <div class="tiles gradient-grey p-l-20 p-r-20 p-b-20 p-t-20"> <a href="#" class="hashtags transparent"> #AwesomeRelease </a> <a href="#" class="hashtags transparent"> #CornerPlace </a> <a href="#" class="hashtags transparent"> #amazing </a>
                      <p class="p-t-10 p-b-10 "><span class="bold">Made with &hearts; at Chitkara University</span></p>
                    </div>
                  </div>
                </div>
                <img src="assets/img/others/9.jpg" data-src="assets/img/others/9.jpg" data-src-retina="assets/img/others/rob.jpg" alt="" class="image-responsive-width hover-effect-img">
                <!-- END BLOG POST BIG IMAGE WIDGET -->
              </div>
            </div>
            <div class="col-md-6 col-vlg-4 col-sm-12">
              <div class="row ">
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6 col-sm-6 m-b-10" data-aspect-ratio="true">
                  <div class="live-tile slide ha " data-speed="750" data-delay="4000" data-mode="carousel">
                    <?php
                      
                       $query = "SELECT rname, author, category, location FROM resources WHERE isFeatured = '1' AND isActive = '1';";
                       $result = $conn->query($query);
                       while ($row = $result->fetch_assoc()) {                      
                           echo ' <div class="slide-front ha tiles adjust-text blue">
                                    <div class="p-t-20 p-l-20 p-r-20 p-b-20"> <i class="fa fa-map-marker fa-2x"></i>
                                        <p class="text-white-opacity p-t-10">Featured</p>
                                        <h3 class="text-white no-margin">'.$row["rname"].' <br /><span class="semi-bold">by '.$row["author"].' <br>
                                        </span> ('.$row["category"].')</h3><br/>
                                        <p class="p-t-20 "><a href="resources/'.$row["location"].'" class="hashtags transparent center"> Download </a> </p>
                                  </div>
                                </div>';
                       }
                    
                    ?>
                      
                  </div>
                </div>
                <!-- END ANIMATED TILE -->
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6 col-sm-6 m-b-10" data-aspect-ratio="true">
                  <div class="live-tile slide ha " data-speed="750" data-delay="3000" data-mode="carousel">
                    <?php
                      
                       $query = "SELECT rname, author, category, location FROM resources WHERE isActive = '1' ORDER BY uploaded DESC LIMIT 7;";
                       $result = $conn->query($query);
                       while ($row = $result->fetch_assoc()) {                      
                           echo ' <div class="slide-front ha tiles adjust-text green">
                                    <div class="p-t-20 p-l-20 p-r-20 p-b-20"> <i class="fa fa-map-marker fa-2x"></i>
                                        <p class="text-white-opacity p-t-10">Latest Uploaded</p>
                                        <h3 class="text-white no-margin">'.$row["rname"].' <br /><span class="semi-bold">by '.$row["author"].' <br>
                                        </span> ('.$row["category"].')</h3><br/>
                                        <p class="p-t-20 "><a href="resources/'.$row["location"].'" class="hashtags transparent center"> Download </a> </p>
                                  </div>
                                </div>';
                       }
                       $conn->close();
                    ?>                 
                  </div>
                </div>
                <!-- END ANIMATED TILE -->
              </div>
              <div class="row">
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6  col-sm-6 m-b-10" data-aspect-ratio="true">
                  <div class="live-tile slide ha" data-speed="750" data-delay="4500" data-mode="carousel">
                    <div class="slide-front ha tiles green p-t-20 p-l-20 p-r-20 p-b-20">
                        <h1 class="semi-bold text-white"><a href = "upload.php"><i class="icon-custom-up icon-custom-2x"></i></a></h1>
                      <div class="overlayer bottom-left fullwidth">
                        <div class="overlayer-wrapper">
                          <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                            <p class="bold">Upload Resources</p>
                            <p>Books <span class="m-l-10"> Magazines</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slide-back ha tiles green">
                      <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                        <h5 class="text-white semi-bold no-margin p-b-5">CORNERPLACE ON THE RISE!</h5>
                        <h3 class="text-white no-margin"> <span class="semi-bold"></span></h3> </div>
                      <div class="overlayer bottom-left fullwidth">
                        <div class="overlayer-wrapper">
                          <div id="sales-sparkline"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END ANIMATED TILE -->
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6  col-sm-6 m-b-10" data-aspect-ratio="true">
                  <div class="live-tile slide ha " data-speed="750" data-delay="6000" data-mode="carousel">
                    <div class="slide-front ha tiles green ">
                      <div class="overlayer bottom-left fullwidth">
                        <div class="overlayer-wrapper">
                          <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                            <h4 class="text-white semi-bold no-margin"> </h4>
                            <h5 class="text-white semi-bold "></h5>
                            <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> </p>
                          </div>
                        </div>
                      </div>
                      <img src="assets/img/others/11.png" alt="" class="image-responsive-width xs-image-responsive-width"> </div>
                    <div class="slide-back ha tiles green">
                      <div class="overlayer bottom-left fullwidth">
                        <div class="overlayer-wrapper">
                          <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                            <h5 class="text-white semi-bold "></h5>
                            <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> </p>
                          </div>
                        </div>
                      </div>
                      <img src="assets/img/others/cover.jpg" alt="" class="image-responsive-width xs-image-responsive-width">
                    </div>
                  </div>
                </div>
                <!-- END ANIMATED TILE -->
              </div>
            </div>

                            <div class="col-vlg-4 visible-xlg" style = "display:none;">
                              <!-- BEGIN MARKET SALES WIDGET -->
                              <div class="row tiles-container">
                                <div class="col-md-12">
                                  <div class="tiles white" data-aspect-ratio="true">
                                    <div class="col-md-7 b-grey b-r no-padding" style="height:100%">
                                      <div class="p-l-20 p-r-20 p-b-10 p-t-10 b-b b-grey">
                                        <h5 class="text-success bold inline">MARKET</h5>
                                        <h5 class="text-black bold inline m-l-10">DOW</h5>
                                        <div class=""> <i class="fa fa-sort-asc fa-2x text-error inline p-b-10" style="vertical-align: super;"></i>
                                          <h1 class="text-error bold inline no-margin"> 15,580.11</h1>
                                        </div>
                                      </div>
                                      <div class="p-l-20 p-r-20 p-b-10 p-t-10 b-b b-grey">
                                        <div class="pull-left">
                                          <p class="text-success">Open</p>
                                          <p class="text-black">16:203.26</p>
                                        </div>
                                        <div class="pull-right">
                                          <p class="text-success">Day Range</p>
                                          <p class="text-black">15,568.11 - 16,203.25</p>
                                        </div>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="overlayer bottom-left fullwidth">
                                        <div class="overlayer-wrapper">
                                          <div class="" id="shares-chart-01" style="width:100%"> </div>
                                        </div>
                                      </div>
                                    </div>
                                   
                                  </div>
                                </div>
                              </div>
                              <!-- END MARKET SALES WIDGET -->
                            </div>
                          </div>
                          <div class="row" style = "display:none;">
                            <!-- BEGIN WORLD MAP WIDGET - CRAFT MAP -->
                            <div class="col-md-8 col-vlg-8 m-b-10">
                              <div class="row">
                                <div class="col-md-12" data-sync-height="true">
                                  <div class="col-md-5 col-vlg-4 col-sm-4 no-padding">
                                    <div class="tiles black">
                                      <div id="chart" style="height:123px"> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- END WORLD MAP WIDGET - CRAFT MAP -->
                            <!-- BEGIN REALTIME SALES GRAPH -->
                            <div class="col-md-4 col-vlg-4 m-b-10 ">
                              <div class="tiles white">              
                                <div id="sales-graph"> </div>
                              </div>
                            </div>
                            <!-- END REALTIME SALES GRAPH -->
                          </div>
                          <div class="row" style = "display: none;">
                            <!-- START ONLY VISIBLE AT 1800 -->
                            <div class="col-md-6 col-vlg-4 visible-xlg" style = "display: none;">
                              <div class="row tiles-container tiles white m-b-10 visible-xlg">
                                <div class="col-md-7  col-sm-7 b-grey b-r ">
                                  <div class="b-grey b-b">
                                    <div class="row auto m-t-10 m-b-10">
                                      <div class="col-md-3 col-sm-3 col-xs-3  no-padding col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                                        <canvas id="white_widget_cloudy_big" width="48" height="48" class="h-align-middle "></canvas>
                                      </div>
                                      <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                        <div class="m-t-10">
                                          <div class="pull-left m-l-5">
                                            <canvas id="white_widget_13" width="16" height="16" class="inline"></canvas>
                                          
                                          </div>
                                          <div class="pull-right m-r-10">
                                            <canvas id="white_widget_14" width="16" height="16" class="inline"></canvas>
                                        
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row auto m-t-15" style = "display: none;">
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding col-md-offset-1 col-xs-offset-1 b-grey b-r">
                                      
                                      <canvas id="white_widget_01" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey b-r">
                                     
                                      <canvas id="white_widget_02" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey b-r">
                                      
                                      <canvas id="white_widget_03" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                     
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey b-r">
                                     
                                      <canvas id="white_widget_04" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                   
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey">
                                    
                                      <canvas id="white_widget_05" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-5 col-sm-5 tiles grey" style = "display: none;">
                                  <div class=" p-t-25 p-r-10 p-l-10 p-b-15">
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold text-black m-r-15 text-right">Sun</span>
                                        <canvas id="white_widget_06" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-15">Mon</span>
                                        <canvas id="white_widget_07" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                    
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-15">Tue</span>
                                        <canvas id="white_widget_08" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-5">Wed</span>
                                        <canvas id="white_widget_09" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                     
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-5">Thur</span>
                                        <canvas id="white_widget_10" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-15">Fri</span>
                                        <canvas id="white_widget_11" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                    <div class="p-b-10 m-b-10 b-grey">
                                      <div class="pull-left"> <span class="bold  text-black m-r-10">Sat</span>
                                        <canvas id="white_widget_12" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            <!-- END ONLY VISIBLE AT 1800 -->
                            <!-- START ONLY VISIBLE AT 1600 BELOW -->
                            <div class="col-md-6 hidden-xlg " style = "display: none;">
                              <div class="row tiles-container tiles white m-b-10 ">
                                <div class="col-md-7  col-sm-7 b-grey b-r ">
                                 
                                  <div class="b-grey b-b">
                                   
                                    <div class="row auto m-t-10 m-b-10">
                                      <div class="col-md-3 col-sm-3 col-xs-3  no-padding col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                                        <canvas id="white_widget2_cloudy_big" width="48" height="48" class="h-align-middle "></canvas>
                                      </div>
                                      <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                        <div class="m-t-10">
                                          <div class="pull-left m-l-5">
                                            <canvas id="white_widget2_13" width="16" height="16" class="inline"></canvas>
                                            <div class="inline">
                                              
                                            </div>
                                          </div>
                                          <div class="pull-right m-r-10">
                                            <canvas id="white_widget2_14" width="16" height="16" class="inline"></canvas>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row auto m-t-15" style = "display: none;">
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding col-md-offset-1 col-xs-offset-1 b-grey b-r">
                                      <p class="text-center no-margin">11:30</p>
                                      <p class="text-center no-margin">PM</p>
                                      <canvas id="white_widget2_01" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      <h5 class="semi-bold text-center text-error">32&deg;</h5>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey b-r">
                                      <div class="text-center">11:30</div>
                                      <div class="text-center">PM</div>
                                      <canvas id="white_widget2_02" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      <h5 class="semi-bold text-center text-error">32&deg;</h5>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey b-r">
                                      <div class="text-center">11:30</div>
                                      <div class="text-center">PM</div>
                                      <canvas id="white_widget2_03" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      <h5 class="semi-bold text-center text-error">32&deg;</h5>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey b-r">
                                      <div class="text-center">11:30</div>
                                      <div class="text-center">PM</div>
                                      <canvas id="white_widget2_04" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      <h5 class="semi-bold text-center text-error">32&deg;</h5>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 no-padding b-grey">
                                      <div class="text-center">11:30</div>
                                      <div class="text-center">PM</div>
                                      <canvas id="white_widget2_05" width="20" height="20" class="h-align-middle m-t-10"></canvas>
                                      <h5 class="semi-bold text-center text-error">32&deg;</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-5 col-sm-5 tiles grey" style="display: none;">
                                  <div class=" p-t-25 p-r-10 p-l-10 p-b-15">
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold text-black m-r-15 text-right">Sun</span>
                                        <canvas id="white_widget2_06" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-15">Mon</span>
                                        <canvas id="white_widget2_07" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-15">Tue</span>
                                        <canvas id="white_widget2_08" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-5">Wed</span>
                                        <canvas id="white_widget2_09" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-5">Thur</span>
                                        <canvas id="white_widget2_10" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey b-b">
                                      <div class="pull-left"> <span class="bold  text-black m-r-15">Fri</span>
                                        <canvas id="white_widget2_11" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="p-b-10 m-b-10 b-grey">
                                      <div class="pull-left"> <span class="bold  text-black m-r-10">Sat</span>
                                        <canvas id="white_widget2_12" width="20" height="20" class="inline m-l-10"></canvas>
                                      </div>
                                      <div class="pull-right"> <span class="semi-bold text-grey">32 - 28</span> <span class="bold text-error">C&deg; </span> </div>
                                      <div class="clearfix"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                            
                            <!-- END ONLY VISIBLE AT 1600 BELOW -->
                            <div class="col-md-8 col-vlg-8 visible-xlg" style = "display: none;">

                              <div class="row tiles-container m-b-10 tiles grey">
                                <div class="col-md-12">
                                  <div class="tiles white col-md-8 col-sm-8 no-padding">
                                    <div class="tiles-body">

                                    </div>
                                    <br>
                                    <div id="ricksaw" class="ricksaw"></div>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 no-padding">
                                    <div class="tiles grey ">
                                      <div class="tiles white no-margin">
                                        <div class="tiles-body">
                                          <div class="tiles-title blend"> OVERALL VIEWS </div>
                                          <div class="heading"> <span data-animation-duration="1000" data-value="432852" class="animate-number">0</span> </div>
                                          44% higher <span class="blend">than last month</span> </div>
                                      </div>
                                      <div id="legend"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row hidden-xlg" style = "display: none;   ">
                            <div class="col-md-12 ">

                              <div class="row tiles-container m-b-10 tiles grey">
                                <div class="col-md-12">
                                  <div class="tiles white col-md-8 col-sm-8 no-padding">
                                    <div class="tiles-body">
                                    </div>
                                    <br>
                                    <div id="ricksaw_2" class="ricksaw"></div>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 no-padding">
                                    <div class="tiles grey ">
                                      <div id="legend_2"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        </div></div>
    <!-- END CONTAINER -->
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
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
    <script src="assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
    <script src="assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
    <script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="assets/plugins/skycons/skycons.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->
    <script src="assets/js/widgets.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
      $(".live-tile,.flip-list").liveTile();
    });
    </script>
    <!-- END CORE TEMPLATE JS -->
  </body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>CornerPlace - Food for the Brain</title>
<meta name="description" content="">
<meta name="keywords" content="">

    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <meta http-equiv="x-ua-compatible" content="IE=9">
    <!-- Font Awesome -->
    <link href="stylesheets/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--headerIncludes-->
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="stylesheets/menu.css">
    <link rel="stylesheet" href="stylesheets/flat-ui-slider.css">
    <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/skeleton.css">
    <link rel="stylesheet" href="stylesheets/landings.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="stylesheets/landings_layouts.css">
    <link rel="stylesheet" href="stylesheets/box.css">
    <link rel="stylesheet" href="stylesheets/pixicon.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link href="assets/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>

<!-- PHP Begins here -->

<?php
    session_start();
    require './includes/connect.php'; //Runs connection check
    require './includes/functions.php'; //Loads the functions file
?>

<?php
    if (isset($_SESSION["uid"])) { //Checks if the user is logged in
        header('Location: ./dashboard.php'); //Launches dashboard
    }

?>

<body>

<div id="page" class="page">
        <div class="pixfort_normal_1" id="section_header_2_dark">
        <div style="background-image: none; background-color: rgb(51, 51, 51); padding-top: 0px; padding-bottom: 0px; box-shadow: none; background-size: auto; background-attachment: scroll; background-repeat: repeat; outline-offset: -3px;" class="header_nav_1 dark pix_builder_bg">
            <div class="container">
                <div class="sixteen columns firas2">
                    <nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg pix_nav_1">
                        <div class="containerss">
                            <div class="navbar-header">
                                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle pix_text" type="button">
                                    <span class="sr-only ">Toggle navigation</span>
                                </button>
                            <a href = "#"><img src ="assets/img/logo-cornerplace-white.png" class = "pix_nav_logo" alt = "cornerplace" width = "160" height = "40"></a>             
                            </div>
                            <div id="navbar-collapse-02" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active propClone"><a href="#">Home</a></li>
                                    <!--<li class="propClone"><a href="#">About Us</a></li>
                                    <li class="propClone"><a href="#">Contact</a></li>-->
                                    <li class="propClone"><a src="images/main/placeholder150.png" style="color: rgb(194, 123, 160); font-weight: 700; text-transform: none; font-size: 15px;" href="#popup_2">Register</a></li>
                                    <li class="propClone icon-item"><a class="pi pixicon-facebook2" href="https://www.facebook.com"></a></li>
                                    <li class="propClone icon-item"><a class="pi pixicon-twitter2" href="https://www.twitter.com/"></a></li>
                                    <li class="propClone icon-item"><a class="pi pixicon-instagram" href="https://www.instagram.com/"></a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container -->
                    </nav>
                </div>
            </div><!-- container -->
        </div>
    </div><div class="pixfort_gym_13 construction " id="section_gym_5">
			<div class="join_us_section pix_builder_bg">
				<div class="container">
					<div class="sixteen columns">
						<div class="ten columns alpha area_1">
                            <span class="const_title" style = "line-height: 10px; font-style: oblique; font-family: serif;"><strong>corner</strong>place</span>
                            <p><span style = "font-style: oblique;">"food for the brain"</span></p>
							<p><span>Get access to tons of eBooks, Magazines and Periodicals. Sign in now!</span>
							</p>
						</div>

						<div class="six columns omega">
							<div class="pix_form_area">
								<div class="substyle pix_builder_bg">
									<div class="title-style"><span><span class="pix_text">Login</span></span></div>
									<br>
									<div class="text-style">
										<span><span class="pix_text">Login to CornerPlace</span></span>
									</div><br>
									<div class="clearfix"></div>
									<form id="contact_form" method="post">
										<div class = 'error' id = 'logerror' style = 'display:none;'></div>
										<input name="lusername" id="lusername" placeholder="Username" class="pix_text" type="text">
										<input name="lpassword" id="lpassword" placeholder="Password" class="pix_text" type="password">
										<span class="send_btn">
											<button src="images/main/placeholder150.png" id="submitlogin" onclick = "javascript:login();" class = "mainbutton">
												<span>Login</span>
											</button><a href="#popup_2">
											<button src="images/main/placeholder150.png" id="signup_btn_8" class="slow_fade pix_text mainbutton">
												<span>Register</span>
												</button></a>
										</span>
									</form>
                      <div class="clearfix"></div>
                  </div>
                  <div class="note_contact pix_builder_bg"><span><span class="pix_text">*Note: You need to login for access.</span></span></div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<div style="display: none;" id="hidden_pix_13" class="confirm_page confirm_page_13 construction pix_builder_bg">
	<div class="pixfort_gym_13 ">
		<div class="confirm_header">
			<span>
				<span class="pix_text">
					Done.
				</span>
			</span>
		</div>
		<div class="confirm_text">
			<span>
				<span class="pix_text">
					Successful.
				</span>
			</span>
		</div>
		<div class="center_text padding_bottom_60">
			<ul class="bottom-icons confirm_icons center_text big_title pix_inline_block">
				<li><a class="pi pixicon-facebook6 white" href="#fakelink"></a></li>
				<li><a class="pi pixicon-twitter6 white" href="#fakelink"></a></li>
				<li><a class="pi pixicon-googleplus7 white" href="#fakelink"></a></li>
			</ul>
		</div>
	</div>
</div>
        <div id="popup_2" class="well pix_popup pop_style_1 pop_hidden light_gray_bg pix_builder_bg" style="display: none;">
            <div class="center_text ">
                <div class="big_icon dark_red">
                    <span class="pi pixicon-clipboard2"></span>
                </div>
                <span><h4 class="margin_bottom pix_text"><strong>Register to CornerPlace</strong></h4></span>
                <p>Fill out the form below</p>
                
                <span id = 'regFormOuter'><form id="regForm" name="regform" class="pix_form" pix-confirm="" pix-redirect="" style="background-color: rgba(0, 0, 0, 0); padding-top: 10px; padding-bottom: 10px;" method="post">
                    
                    <input name="fname" id="fname" placeholder="First Name" class="pix_text" type="text"> 
                    <input type="text" name="lname" id="lname" placeholder="Last Name" class="pix_text">
                    <input name="email" id="email" placeholder="Email" class="pix_text" type="text">
                    <input type="text" name="uname" id="uname" placeholder="User Name" class="pix_text">
                    <input type="password" name="rpassword" id="rpassword" placeholder="Enter Password" class="pix_text">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Re-enter your Password" class="pix_text">
                    <input name="number" id="number" placeholder="Phone Number" class="pix_text" type="text">
                    <select name="cname" id="cname" class="pix_text">&gt;
                        <option value="-1">Select your College </option>
                        <option value="1">Chitkara University (Himachal Pradesh)</option>
                        <option value="2">Chitkara University (Punjab)</option>
                        <option value="3">Other</option>
                    </select>
                    <input name="cid" id="cid" placeholder="Enter College ID" class="pix_text" type="text">
                    <select name="gender" id="gender" class="pix_text">&gt;
                        <option value="-1">Select your gender </option>
                        <option value="2">Female</option>
                        <option value="1">Male</option>
                        <option value="3">Other</option>
                    </select>
                    <select name="year" id="year" class="pix_text">&gt;
                        <option value="-1">Select your Academic Year </option>
                        <option value="1">1st Year</option>
                        <option value="2">2rd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4rd Year</option>
                    </select>
                    
                    <select id="branch" name="branch" class="pix_text">
                        <option value="-1">Select your Branch</option>
                        <option value="0">Computer Science and Engineering</option>
                        <option value="1">Electronics and Communication Engineering</option>
                        <option value="2">Civil Engineering</option>
                    </select>
                    
                    <input type="text" name="dob" id="dob" class="pix_text" placeholder="Date of Birth (YYYY-MM-DD)"><br><br>
                    <textarea rows="5" name="about" id="about" class="text_area pix_text" placeholder="Write about yourself here"></textarea><br>
                    
                    <input type="checkbox" name="terms" id="terms" vslue="on"><span class="label_span editContent"> I accept the Terms of Use. </span><br>
                    <div id="regerror" class = "error" style = "display: none;"></div>
                    <span class="send_btn">
                        <button type="submit" class="orange_bg submit_btn pix_text" id="regSubmit" onclick="javascript:register();">
                            Register
                        </button>
                    </span>
                    <div class="pix_text pix_note"><span>*required</span></div>
                    </form></span>
            </div>
        </div><div class="dark big_padding pix_builder_bg" id="section_title_1_dark">
		<div class="container ">       
	            <div class="twelve columns">
	            	<div class="">
	            		<div class="title_56 margin_bottom_10 green_1">
				            <span class="pi pixicon-tools"></span>
				        </div>
	            		<h2 class="big_title dark_gray editContent">Crowdsourced content</h2>
	                	<p class="normal_text light_gray editContent">Resources shared for the people, by the people.</p>
	                </div>
	            </div>
	    </div>
	</div><div class="pix_builder_bg padding_bottom_60" id="section_pixfort_medical_3">
            <div class="container normal_padding">
                <div class="three columns alpha">
                    <div class="big_circle ">
                        <i class="big_circle_content pi pixicon-chat"></i>
                    </div>
                </div>
                <div class="five columns">
                    <div class="content_div">
                        <h4><strong>Chat Support</strong></h4>
                        <p class="editContent small_text light_gray">Now chat with users across the website!</p>
                    </div>
                </div>
                <div class="three columns">
                    <div class="big_circle">
                        <i class="big_circle_content pi pixicon-compass"></i>
                    </div>
                </div>
                <div class="five columns omega">
                    <div class="content_div">
                        <h4><strong>Timelined content</strong></h4>
                        <p class="editContent small_text light_gray">View all content posted in a timeline view.</p>
                    </div>
                </div>
            </div>

            <div class="container normal_padding">
                <div class="three columns alpha">
                    <div class="big_circle">
                        <i class="big_circle_content pi pixicon-heart2"></i>
                    </div>
                </div>
                <div class="five columns">
                    <div class="content_div">
                        <h4><strong>React to posts</strong></h4>
                        <p class="editContent small_text light_gray">Rate, comment and recommend different resources shared sitewide.</p>
                    </div>
                </div>
                <div class="three columns">
                    <div class="big_circle">
                        <i class="big_circle_content pi pixicon-map2"></i>
                    </div>
                </div>
                <div class="five columns omega">
                    <div class="content_div">
                        <h4><strong>On the Go!</strong></h4>
                        <p class="editContent small_text light_gray">All your content is stored securely in the cloud and is available, on-demand on-the-go.</p>
                    </div>
                </div>
            </div>
        </div><div class="pixfort_pix_1 construction" id="section_testimonials_1">
			<div class="tesi_style pix_builder_bg">
				<div class="container">
					<div class="sixteen columns">
						<img src="images/main/light-normal.png" alt="" class="q-icon">
						<ul style="height: 0px;" class="testimonials ticker_fade">
							<!-- First Testimonial -->
							
							<!-- End of First Testimonial -->
							<!-- Second Testimonial -->
							
							<!-- End of Second Testimonial -->
							<!-- Third Testimonial -->
							
							<!-- End of Third Testimonial -->
						<li style="display: none;">
								<p class="quote-text editContent">
									<!-- Change to your text here -->
									Great service with fast and reliable support. The design work and
									detail put into these themes has been recognized by my customers.
								</p>
								<div class="quote-dots">. . .</div>
								<div class="quote-title editContent pix_text">
									<!-- Change title Here -->
									Saikat Choudhary
								</div>
								<div class="quote-link editContent pix_text">
									<!-- Change Link Here -->
									via Facebook
								</div>

							</li><li style="display: none;">
								<p class="quote-text editContent">
									<!-- Change to your text here -->
									I'm a web designer from Pakistan, you guys are very inspiring. I wish to see more work from you, maybe more freebies.
								</p>
								<div class="quote-dots">. . .</div>
								<div class="quote-title editContent pix_text">
									<!-- Change title Here -->
									Naman Gupta
								</div>
								<div class="quote-link editContent pix_text">
									<!-- Change Link Here -->
									via Facebook
								</div>

							</li><li style="display: none;">
								<p class="quote-text editContent">
									<!-- Change to your text here -->
									I’m happy man. This is fantastic code, and it’s only just getting on its feet! love CornerPlace alot :)
								</p>
								<div class="quote-dots">. . .</div>
								<div class="quote-title editContent pix_text">
									<!-- Change title Here -->
									Pema Thinley
								</div>
								<div class="quote-link editContent pix_text">
									<!-- Change Link Here -->
									via Facebook
								</div>
							</li></ul>
					</div>
				</div><!-- container -->
			</div>
		</div><div class="center_text big_padding pix_builder_bg" id="section_intro_title">
            <div class="container">       
                    <div class="eight columns">
                        <div class="simple_team">
                            <div class="simple_team_img ">
                                <img style="border-radius: 75px; border-style: none; border-width: 1px; width: 150px; height: 150px;" src="images/uploads/16113913_1815927965328303_1813117067791322224_n.jpg" alt="">
                            </div>
                            <div>
                                <h4 class="editContent gray"><strong>Sonam Chophel</strong></h4>
                                <p class="editContent small_text light_gray">
                                    
                                </p>
                                <ul class="bottom-icons">
                                    <li><a src="images/2_corporate/logos.png" style="color: rgb(0, 0, 0); font-size: 18px; background-color: transparent;" class="pi light_gray pixicon-facebook2" href="https://fb.me/sonam.chophel.7798"></a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="eight columns">
                        <div class="simple_team">
                            <div class="simple_team_img ">
                                <img style="border-radius: 75px; border-style: none; border-width: 1px; width: 150px; height: 150px;" src="images/uploads/15109362_896696110461373_8555473657641958500_n.jpg" alt="">
                            </div>
                            <div>
                                <h4 class="editContent gray"><strong>Saurabh Suryavanshi</strong></h4>
                                <p class="editContent small_text light_gray"></p>
                                <ul class="bottom-icons">
                                    <li><a src="images/2_corporate/logos.png" style="color: rgb(0, 0, 0); font-size: 18px; background-color: transparent;" class="pi light_gray pixicon-facebook2" href="https://fb.me/saurabh.singhsuryavanshi.1"></a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div><div class="center_text big_padding pix_builder_bg" id="section_intro_title">
            <div class="container">       
                    <div class="eight columns">
                        <div class="simple_team">
                            <div class="simple_team_img ">
                                <img style="border-radius: 75px; border-style: none; border-width: 1px; width: 150px; height: 150px;" src="images/uploads/15032039_1122645314518095_7692949402900077781_n.jpg" alt="">
                            </div>
                            <div>
                                <h4 class="editContent gray"><strong>Sebin Babu</strong></h4>
                                <p class="editContent small_text light_gray"></p>
                                <ul class="bottom-icons">
                                    <li><a src="images/2_corporate/logos.png" style="color: rgb(0, 0, 0); font-size: 18px; background-color: transparent;" class="pi light_gray pixicon-facebook2" href="https://fb.me/sebinba"></a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="eight columns">
                        <div class="simple_team">
                            <div class="simple_team_img ">
                                <img style="border-radius: 75px; border-style: none; border-width: 1px; width: 150px; height: 150px;" src="images/uploads/17190923_638290643040431_7684794177400518499_n.jpg" alt="">
                            </div>
                            <div>
                                <h4 class="editContent gray"><strong>Shobhit Sinha</strong></h4>
                                <p class="editContent small_text light_gray"></p>
                                <ul class="bottom-icons">
                                    <li><a src="images/2_corporate/logos.png" style="color: rgb(0, 0, 0); font-size: 18px; background-color: transparent;" class="pi light_gray pixicon-facebook2" href="https://fb.me/shobhit.sinha.169"></a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div><div class="pixfort_corporate_2" id="section_corporate_7">
		<div class="logos_style pix_builder_bg">
			<div class="container">
				<div class="sixteen columns">
					<div class="LL1_style"><span style=""><span class="pix_text">Companies We Work With</span></span></div>
					<div class="LL2_style"><span style=""><span class="pix_text">great words from great people</span></span></div>
					<span> <img style="border-radius: 0px; border-style: none; border-width: 1px; width: 180px; height: 79px;" src="images/uploads/logo.png" class="logos" alt=""> </span>	        
				</div>
			</div><!-- container -->
		</div>
	</div><div style="outline-offset: -3px;" class="pix_builder_bg dark" id="section_footer_5_dark">
        <div class="footer3">
            <div class="container ">
                <div class="sixteen columns ">
                    <div class="one-third column alpha mobile_center margin_vertical ">
                        <div class="pix_div_fit">
                              
                        </div>
                    </div>
                    <div class="one-third column margin_vertical">
                        <p class="small_text light_gray left_text mobile_center editContent">Get access to on-demand content like eBooks, magazines and periodicals. Also find institution specific materials such as course handouts, pervious year question papers and tutorial sheets.
                        </p>
                        <p class="medium_text left_text mobile_center editContent">Copyright &copy; 2017 CornerPlace
                        </p>
                    </div>
                    <div class="one-third column omega right_text margin_vertical mobile_center">
                        <ul class="bottom-icons center_text big_title">
                            <li><a class="pi pixicon-facebook6 normal_gray" href="#fakelink"></a> </li>
                            <li><a class="pi pixicon-twitter6 normal_gray" href="#fakelink"></a> </li>
                            <li><a class="pi pixicon-googleplus7 normal_gray" href="#fakelink"></a> </li>
                        </ul>
                    </div>                   
                </div>
            </div>
        </div> 
    </div></div>

<!-- JavaScript
================================================== -->
<script src="js-files/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="js-files/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="js-files/jquery.common.min.js"></script>
<script src="js-files/ticker.js" type="text/javascript"></script>
<script src="js-files/custom1.js" type="text/javascript"></script>
<script src="assets/js/smoothscroll.min.js" type="text/javascript"></script>
<script src="assets/js/appear.min.js" type="text/javascript"></script>
<script src="js-files/jquery.ui.touch-punch.min.js"></script>
<script src="js-files/bootstrap.min.js"></script>
<script src="js-files/bootstrap-switch.js"></script>
<script src="js-files/custom3.js" type="text/javascript"></script>
<script src="js-files/validation.js" type="text/javascript"></script>

<script src="assets/js/appear.min.js" type="text/javascript"></script>
<script src="assets/js/animations.js" type="text/javascript"></script>
    

</body>
</html>

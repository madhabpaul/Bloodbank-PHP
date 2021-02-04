<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Jthemes">
		<meta name="description" content="MedService - Medical &amp; Medical Health Landing Page Template">
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- SITE TITLE -->
		<title>MedService - Medical &amp; Medical Health Landing Page Template</title>
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="favicons/9816-images-favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicons/5557-images-favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="favicons/1714-images-apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicons/7311-images-apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicons/2968-images-apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="favicons/719-images-apple-touch-icon.png">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<!-- BOOTSTRAP CSS -->
		<link href="css/css-bootstrap.min.css" rel="stylesheet">
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
		<link href="css/css-flaticon.css" rel="stylesheet">
		<!-- PLUGINS STYLESHEET -->
		<link href="css/css-menu.css" rel="stylesheet">
		<link id="effect" href="css/dropdown-effects-fade-down.css" media="all" rel="stylesheet">
		<link href="css/css-magnific-popup.css" rel="stylesheet">
		<link href="css/css-owl.carousel.min.css" rel="stylesheet">
		<link href="css/css-owl.theme.default.min.css" rel="stylesheet">
		<link href="css/css-animate.css" rel="stylesheet"><link href="css/css-jquery.datetimepicker.min.css" rel="stylesheet">
		<!-- TEMPLATE CSS -->
		<link href="css/css-style.css" rel="stylesheet"><!-- RESPONSIVE CSS --><link href="css/css-responsive.css" rel="stylesheet">
	</head>
	<body>


  <?php
    include('databaseconnect.php');
    include('function.php');

    session_start();
    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
        $phone = $_SESSION['phone'];
    }
    else{
      redirect('login.php');
    }

  ?>

		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">


			<!-- HEADER
			============================================= -->
			<header id="header" class="header"><!-- MOBILE HEADER -->
			
			<div class="wsmobileheader clearfix">
			    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
			    	<span class="smllogo"><img src="images/logo-grey.png" width="180" height="40" alt="mobile-logo"/></span>
			    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
			 	</div>

			 	<!-- HEADER STRIP -->
			 	<div class="headtoppart bg-blue clearfix">
			    	<div class="headerwp clearfix">

			    		<!-- Address -->
			     		<div class="headertopleft">			     			
			        		<div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>121 King St,
			            		Melbourne, VIC 3000 </span> <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i>(800)-569-7890</a>
			            	</div>
			     		</div>

			     		<!-- Social Links -->
					    <div class="headertopright">
					    	<a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
					        <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
					        <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
                  <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
                  <span><?php echo strtoupper($user) ?></span>
				      	</div>

				    </div>
			  	</div>	<!-- END HEADER STRIP -->


			  	<!-- NAVIGATION MENU -->
			  	<div class="wsmainfull menu clearfix">
    				<div class="wsmainwp clearfix">

    					<!-- LOGO IMAGE -->
    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
    					<div class="desktoplogo"><a href="#hero-1"><img src="images/images-logo-grey.png" width="180" height="40" alt="header-logo"></a></div>

    					<!-- MAIN MENU -->
      					<nav class="wsmenu clearfix"><ul class="wsmenu-list"><!-- DROPDOWN MENU --><li aria-haspopup="true"><a href="#">Home <span class="wsarrow"></span></a>
					           		<ul class="sub-menu"><li aria-haspopup="true"><a href="demo-2.html">Home Concept #2</a></li>
					              		<li aria-haspopup="true"><a href="demo-3.html">Home Concept #3</a></li>
					              		<li aria-haspopup="true"><a href="demo-4.html">Home Concept #4</a></li>
					              		<li aria-haspopup="true"><a href="demo-5.html">Home Concept #5</a></li>
					              		<li aria-haspopup="true"><a href="demo-6.html">Home Concept #6</a></li>
					              		<li aria-haspopup="true"><a href="demo-7.html">Home Concept #7</a></li>
					              		<li aria-haspopup="true"><a href="demo-8.html">Home Concept #8</a></li>
					              		<li aria-haspopup="true"><a href="demo-9.html">Home Concept #9</a></li>
					              		<li aria-haspopup="true"><a href="demo-10.html">Home Concept #10</a></li>
					              		<li aria-haspopup="true"><a href="demo-11.html">Home Concept #11</a></li>
					              		<li aria-haspopup="true"><a href="demo-12.html">Home Concept #12</a></li>
					           		</ul></li>	<!-- END DROPDOWN MENU -->


					          	<!-- PAGES -->
					          	<li aria-haspopup="true"><a href="#">Pages <span class="wsarrow"></span></a>
            						<div class="wsmegamenu clearfix">
             							<div class="container">
               								<div class="row">

               									<!-- MEGAMENU LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list"><li class="title">Standard Pages:</li>
								                    <li><a href="about-us.html">About Us Page</a></li>
								                    <li><a href="who-we-are.html">Who We Are</a></li>
								                    <li><a href="all-services.html">Our Services</a></li>
								                    <li><a href="service-1.html">Service Single #1</a></li>
								                    <li><a href="service-2.html">Service Single #2</a></li>				                             
								                </ul><!-- MEGAMENU LINKS --><ul class="col-lg-3 col-md-12 col-xs-12 link-list"><li class="title">Medical Pages:</li>
								                    <li><a href="all-departments.html">Our Departments</a></li>								                    
								                    <li><a href="department-single.html">Department Single</a></li>
								                    <li><a href="all-doctors.html">Meet the Doctors</a></li>
								                    <li><a href="doctor-1.html">Doctor's Profile #1</a></li>
								                    <li><a href="doctor-2.html">Doctor's Profile #2</a></li>
								                    <li><a href="timetable.html">Doctors Timetable</a></li>									                    
								                </ul><!-- MEGAMENU LINKS --><ul class="col-lg-3 col-md-12 col-xs-12 link-list"><li class="title">Special Pages:</li>
								                    <li><a href="pricing-1.html">Pricing Packages #1</a></li>
								                    <li><a href="pricing-2.html">Pricing Packages #2</a></li>								                    
								                    <li><a href="appointment.html">Make an Appointment</a></li>
								                    <li><a href="faqs.html">FAQs Page</a></li>
								                    <li><a href="terms.html">Terms of Use</a></li> 
								                </ul><!-- MEGAMENU LINKS --><ul class="col-lg-3 col-md-12 col-xs-12 link-list"><li class="title">Auxiliary Pages:</li>
								                    <li><a href="gallery.html">Our Gallery</a></li>
								                    <li><a href="blog-listing.html">Blog Listing Page</a></li>
								                    <li><a href="single-post.html">Single Blog Post</a></li>								                   
								                    <li><a href="contacts-1.html">Contact Us #1</a></li>
								                    <li><a href="contacts-2.html">Contact Us #2</a></li> 						
								                </ul></div>  <!-- End row -->	
							            </div>  <!-- End container -->	
							        </div>  <!-- End wsmegamenu -->	
							    </li>	<!-- END PAGES -->


					          	<!-- HALF MENU -->
					          	<li aria-haspopup="true"><a href="#">Half Menu <span class="wsarrow"></span></a>
					            	<div class="wsmegamenu clearfix halfmenu">
					              		<div class="container-fluid">
					                		<div class="row">

					                			<!-- Links -->
							                	<ul class="col-lg-6 col-md-12 col-xs-12 link-list"><li class="title">For Patients:</li>
								                    <li><a href="#">Meet The Doctors</a></li>							                    
								                    <li><a href="#">Patient Info Sheets</a></li>
								                    <li><a href="#">Online Patients Portal</a></li>
								                    <li><a href="#">Patients Testimonials</a></li>
								                    <li><a href="#">Blog &amp; Latest News</a></li>								                    
							                  	</ul><!-- Links --><ul class="col-lg-6 col-md-12 col-xs-12 link-list"><li class="title">Quick Links:</li>
								                    <li><a href="#">Terms &amp; Privacy Policy</a></li>
								                    <li><a href="#">Donor Privacy Policy</a></li>
								                    <li><a href="#">Workers Compensation</a></li>
								                    <li><a href="#">Insurance Information</a></li>
								                    <li><a href="#">After Hours Care</a></li>
								                </ul></div>
					              		</div>
					            	</div>
					          	</li>	<!-- END HALF MENU -->


							    <!-- SIMPLE NAVIGATION LINK -->
							    <li class="nl-simple" aria-haspopup="true"><a href="#">Simple Link</a></li>

							    <!-- NAVIGATION MENU BUTTON -->
							    <li class="nl-simple header-btn" aria-haspopup="true"><a href="appointment.html">Make an Appointment</a></li>


        					</ul></nav><!-- END MAIN MENU --></div>
    			</div>	<!-- END NAVIGATION MENU -->


			</header>
</div>
			<!-- END HEADER -->



  
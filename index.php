<?php
include('conn.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="insert into contactinfo (name,email,sub,mess) values ('$name','$email','$subject','$message')";
    $result=mysqli_query($conn,$query);
    if($result==false)
    {
        echo "no";
    }
	
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Ball Releaser Machine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
	
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	

</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="header-left">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<h1>
								<a href="index.html">
									
								<centre>BALL RELEASER MACHINE</centre>
									
								</a>
							</h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-9" id="link-effect-9">
							<ul class="nav navbar-nav">
								<li class="active">
									<a class="hvr-overline-from-center scroll" href="index.html">Home</a>
								</li>
								<li>
									<a href="#about" class="hvr-overline-from-center scroll">About Us</a>
								</li>
								<li>
									<a href="#Facilities" class="hvr-overline-from-center scroll">Facilities</a>
								</li>
								<li>
								</li>
								<li>
									<a href="#gallery" class="hvr-overline-from-center scroll">Gallery</a>
								</li>
								<li>
								<!-- class="hvr-overline-from-center scroll" -->
									<a href="register.php" >Registration 
									</a>
								</li>
								<li>
									<a href="#contact" class="hvr-overline-from-center scroll">Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
					
				</nav>
			</div> 
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //header -->

	<!-- banner-text -->
	<div class="banner-text">
		<div class="container">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>

							<div class="banner-w3lstext">
								<h3>A wide selection of cricket accessories</h3>
								
								<div class="video-pop-wthree">
									
									<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
									</div>
								</div>
							</div>
						</li>
						<li>

							<div class="banner-w3lstext">
								<h3>Everything you need for playing cricket</h3>
								
								<div class="video-pop-wthree">
									
									<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
									</div>
								</div>
							</div>
						</li>
						<li>

							<div class="banner-w3lstext">
								<h3>We build leaders on the cricket ground</h3>
							
								<div class="video-pop-wthree">
									
									<div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner-text -->
	<!-- //banner -->

	<!-- welcome -->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title">About Us
			
			</h3>
			<div class="about-top">
				<div class="col-md-6 about-img-agile">
					<img class="img-responsive" src="images/g1.png" alt="">
				</div>
				<div class="col-md-6 about-wel">
					<h2>A Few Words About Our Machine</h2>
					<p>In cricket a bowling machine is a device which enables a batsman to practice (usually in the nets) and to hone specific skills through repetition of the ball being bowled at a certain length, line and speed. It can also be used when there is no-one available to bowl, or no one of the desired style or standard.</p>
					<ul>
						<li>
							<i class="glyphicon glyphicon-ok"></i>Fast bowling</li>
						<li>
							<i class="glyphicon glyphicon-ok"></i>Swing bowling</li>
						<li>
							<i class="glyphicon glyphicon-ok"></i>Bouncers</li>
						<li>
							<i class="glyphicon glyphicon-ok"></i>Seam bowling</li>
					</ul>
					<div class="video-agile">
						
					<iframe width="560" height="315" src="https://www.youtube.com/embed/e4ubE2gQsB4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->

	<!-- stats -->
	<div class="stats">
		<div class="container">
			<div class="stats-info">
			    <div class="col-md-3 col-sm-3 stats-grid slideanim">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2' data-delay='.5' data-increment="10">9000</div>
					<p class="stats-info">Our Branches</p>
				</div>
				<div class="col-md-3 col-sm-3 stats-grid slideanim">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='32' data-delay='.5' data-increment="1">1200</div>
					<p class="stats-info">years of experience</p>
				</div>
				<div class="col-md-3 col-sm-3 stats-grid slideanim">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='15' data-delay='.5' data-increment="1">3000</div>
					<p class="stats-info">qualified Coaches</p>
				</div>
				<div class="col-md-3 col-sm-3 stats-grid slideanim">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='8' data-delay='.5' data-increment="10">9000</div>
					<p class="stats-info">Bowling Machine</p>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //stats -->

	<!-- services -->
	<div class="Facilities" id="Facilities">
		<div class="container">
			<h3 class="title">Facilities
				
			</h3>
			<div class="col-md-6 left-services-agile">
				<div class="left-services-agile1">
					<i class="fa fa-clone i1" aria-hidden="true"></i>
					<h4>Facilities 1</h4>
					<div class="clearfix"></div>
					<p> The Cricket pitch and a ground has been built by our special workers as per ICC standards and is fit for organizing even international matches </p>
				</div>
				<div class="left-services-agile1">
					<i class="fa fa-american-sign-language-interpreting i1" aria-hidden="true"></i>
					<h4>Facilities 2</h4>
					<div class="clearfix"></div>
					<p>We provide a amiable atmosphere and a polution free enviournment </p>
				</div>
				<div class="left-services-agile1">
					<i class="fa fa-magic i1" aria-hidden="true"></i>
					<h4>Facilities 3</h4>
					<div class="clearfix"></div>
					<p>Our Academy gives a facilities to pick-up and drop your children at your dour-step , who's don't have any facility to come at academy</p>
				</div>
			</div>
			<div class="col-md-6 agileits_updates_grid_right">
				<h3>Features</h3>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Fast bowling
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
								This is achieved by setting both wheels to the same speed, as fast as the batsman is able to deal with, although the machine itself would have to be tipped horizontally. The coach can move the machine around slightly to vary the line and length of each ball.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Swing bowling
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								The plane of the wheels is flat, and the motors are set to run at slightly different speeds. This means the ball will spin about an axis perpendicular to the ground, causing it to swing due to the Magnus effect,The swing produced in this way is different from normal swing bowling, however - it is much more like a curling ball in football.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Bouncers
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								To get balls that bounce unnaturally high or low, the plane of the machine must be set so that it is vertical. Not all machines can do this, simply because their ball joint doesn’t give the required range of movement. To get balls that bounce higher than normal, the lower wheel should spin slightly faster than the upper. 
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
								    aria-controls="collapseFour">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Seam bowling
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body panel_text">
								This is difficult to achieve since the operator cannot control exactly how the ball will roll into the machine and between the wheels. However, by the law of averages, a ball will occasionally come out with its seam at the correct angle, and bounce unpredictably as a result.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->

	<!-- team -->
	<div class="team  wthree" id="team">
		<div class="container">
			<h3 class="title">Coaches
				
			</h3>
			<div class="team-bottom">
				<div class="col-md-3 col-xs-3 team-grid">
					<img src="images/t1.jpg" class="img-responsive" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Sachin</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-3 team-grid">
					<img src="images/t2.jpg" class="img-responsive" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Kumble</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-3 team-grid">
					<img src="images/t3.jpg" class="img-responsive" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Dhoni</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-3 team-grid">
					<img src="images/t4.jpg" class="img-responsive" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Sehwag</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	

	<!-- gallery -->
	
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="title">Our Gallery
				
			</h3>
			<div class="gallery-main">
				<div class="gallery-bott">
					<div class="col-xs-4 col1 gallery-grid">
						<a href="images/s1.jpg" class="b-link-stripe b-animate-go  thickbox">

							<figure class="effect-bubba">
								<img class="img-responsive" src="images/s1.jpg" alt="">
								<figcaption>
									<h4 class="gal">Ball Releaser Machine</h4>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-xs-4 col1 gallery-grid">
						<a href="images/g6.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="images/g6.jpg" alt="">
								<figcaption>
									<h4 class="gal">Ball Releaser Machine</h4>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-xs-4 col1 gallery-grid">
						<a href="images/g5.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="images/g5.jpg" alt="">
								<figcaption>
									<h4 class="gal">Ball Releaser Machine</h4>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-xs-4 col1 gallery-grid">
						<a href="images/g4.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="images/g4.jpg" alt="">
								<figcaption>
									<h4 class="gal">Ball Releaser Machine</h4>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-xs-4 col1 gallery-grid">
						<a href="images/b1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="images/b1.jpg" alt="">
								<figcaption>
									<h4 class="gal">Ball Releaser Machine</h4>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-xs-4 col1 gallery-grid">
						<a href="images/b2.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="images/b2.jpg" alt="">
								<figcaption>
									<h4 class="gal">Ball Releaser Machine</h4>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">Contact Us:-
				
			</h3>
			<div class="contact-grid-agiles-w3l">
				<div class="col-md-5 col-xs-5 contact-grid-agile">
					<div class="contact-right1">
						
					</div>
					<div class="contact-right2">
						<div class="call ">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Call us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>+91 9558994620</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Locate us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>738 ,Sindhu Bhavan Road</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Mail us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>
										<a href="mailto:Cricketacademy11@gmail.com">Cricketacademy11@gmail.com</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-xs-7 contact-grid-agile">
					<form action="#" method="post">
						<input type="text" placeholder="Name" name="name" required="">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="text" placeholder="Subject" name="subject" required="">
						<textarea placeholder="Message.." name="message" required=""></textarea>
						<input type="submit" name="submit" value="Send Now">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-xs-4 agileinfo_footer_grid">
				<h4>About Us</h4>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					<span>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</p>
			</div>
			<div class="col-xs-4 agileinfo_footer_grid">
				<h4>Address</h4>
				<ul>
					<li>
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 , Sindhu Bhavan Road, Ahmedabad</li>
					
					<li>
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91 7984208993</li>
					<li>
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Mon-Sun 09:00 AM - 05:00PM </li>
				</ul>
			</div>
			<div class="col-xs-4 agileinfo_footer_grid">
				
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class=" newsletter">
				<h4>Subscribe Here</h4>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" name="email" placeholder="Enter Your Email...">
					<input type="submit" class="submit" value="subscribe">
				</form>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile_footer_copy">
				
			</div>
		</div>
	</div>
	<!-- //footer -->


	<!-- js-scripts -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- banner Slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //banner Slider -->

	<!-- Numscroller -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->

	<!-- pop-up(for video popup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box (syllabus section video)-->

	<!-- lightbox -->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.gallery-grid a').Chocolat();
		});
	</script>
	<!-- //lightbox -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- //js-scripts -->

</body>

</html>
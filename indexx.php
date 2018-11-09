
<?php
require('db.php');

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message= $_REQUEST['message'];

$ins_query="insert into messages(`trn_date`,`name`,`email`,`subject`,`message`)values('$trn_date','$name','$email','$subject','$message')";
mysql_query($ins_query) or die(mysql_error());
$status = "Message sent Successfully.</br></br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Pioneer Car Rentals</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
 
</head>
<body id="top" data-spy="scroll">
	<!--top header-->

	<header id="home">

		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="top-left">

							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>

						</div>
					</div>

				<div class="col-md-4">
						<div class="top-center">
							<h3>Pioneer Car Rentals</h3>
						</div>
					</div>

				<div class="col-md-3">
						<div class="top-right">
				
							<p>Location:<span>3rd Street,Eldoret </span></p>
						</div>
					</div>


				</div>
			</div>
		</section>

		<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						<a href="index.html" class="navbar-brand">Pioneer Car Rentals</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home">home</a></li>
							<li><a href="gallery.php">gallery</a></li>
							<li><a href="login.php">log in</a></li>
							<li><a href="registration.php">sign up</a></li>
							<li><a href="#service">services</a></li>
							<li><a href="#about">about us</a></li>
							<li><a href="#contact">contact us</a></li>
							<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        </li>
						</ul>

					</div>

					<div class="search-form">
	                    <form>
	                        <input type="text" id="s" size="40" placeholder="Search..." />
	                    </form>
	                </div>

				</div>
			</nav>
		</div>

	</header>

	<!--slider-->
	<div id="slider" class="flexslider">

        <ul class="slides">
            <li>
            	<img src="images/slider/bg3.jpg">

				<div class="caption">
					<h2><span>cheap rates</span></h2>
					
					                 
	            </div>

            </li>
            <li>
            	<img src="images/slider/bg1.jpg">

				<div class="caption">
				    <h2><span>bring it</span></h2>
					
					                
	            </div>

            </li>
            <li>
            	<img src="images/slider/bg2.jpg">

				<div class="caption">
					<h2><span>quality service</span></h2>
					
					               
	            </div>

            </li>
            
        </ul>

    </div>

    <!--about-->
  

    	 <div id="about"><!--about wrapper left-->
    <section id="doctor-team" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">Our vehicles!</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/range.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>RANGE ROVER</h3>
			          <p>2017 model</p>
			          
			        </div>
			      </div>
			    </div>
			    <div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/mercd.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>MERCEDES</h3>
			          <p>C-class</p>
			          
			        </div>
			      </div>
			    </div>
			    <div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/prado.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>TOYOTA</h3>
			          <p>prado 4wd</p>
			          
			        </div>
			      </div>
			    </div>
			    <div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/6.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>BMW</h3>
			         <p>6-series</p>
			        </div>
			      </div>
			      
			      <p><button class="btn">Gallery</button></P>
			      
			    </div>
			</div>
		</div>
	</section>
	</div>


	<section id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">Contact us</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
			      <h3>Contact Info</h3>
			      <div class="space"></div>
			      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>3rd Street<br>
			        Eldoret, Kenya 1222-30100</p>
			      <div class="space"></div>
			      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@pioneer.com</p>
			      <div class="space"></div>
			      <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+254 708447571</p>
			    </div>
				<div class="col-md-8 col-sm-8 marb20">
					<div class="contact-info">
							<h3 class="cnt-ttl">Having Any Query! </h3>
							<div class="space"></div>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
							<form action="" method="post" role="form" class="contactForm">
<input type="hidden" name="new" value="1" />
							    <div class="form-group">
                                    <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                
								<div class="form-action">
									<button type="submit" name="submit" value="submit" class="btn btn-form">Send Message</button>
								</div>
							</form>
                        <p style="color:#FF0000;"><?php echo $status; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ contact-->
	<!--footer-->
	<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>about</span> us</h3>
							<p>We provide vehicles for hire at affordable rates, we have vehicles from luxury ones to those of low prices, on our part we got what you need at pioneer car rentals </p>
							<p>We also provide you with opportunity to bring your vehicle around for a specific period of time at your own convenience, with that you get paid monthly .</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>latest</span> news</h3>
							<ul>
								<p>Get good rates</p>
								<p>Checkout our gallery</p>
								<p>Bring your vehicle</p>
								<p>Cars are in perfect conditions</p>
							</ul>
						</div>
					</div>

                  
				        
					         <div class="col-md-4">
						        <div class="footer-heading">
						         <h3><span>follow</span> us</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>

						</div>
					</div>

					


				</div>
			</div>
		</div>

		<!--bottom footer-->
		<div id="bottom-footer" class="hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-left">
							&copy; Copyright. All rights reserved
                            <div class="credits">
                                
                                Designed by <a href="https://bootstrapmade.com/">Dennis Kipruto</a>
                            </div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="footer-right">
                            <ul class="list-unstyled list-inline pull-right">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Service</a></li>
                                <li><a href="#portfolo">Portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        

	
	<!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/script.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>

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
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>


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
							<li><a href="index.html">home</a></li>
							<li><a href="login.php">log in</a></li>
							<li><a href="registration.php">sign up</a></li>
							<li><a href="about.php">about us</a></li>
							<li><a href="contact.php">contact us</a></li>
							
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
	</body>

<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'config.php';
						$sel = "SELECT * FROM cars";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['brand'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['model'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	
			
</html>
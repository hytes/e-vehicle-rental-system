<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Pionner Car Rentals</title>
    
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="css/simple-sidebar.css" rel="stylesheet"> 
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
              <h3>Pionner Car Rentals</h3>
            </div>
          </div>

        <div class="col-md-3">
            <div class="top-right">
        
              <p>Location:<span>Kenyatta Street,Eldoret </span></p>
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
              <li><a href="index.php">home</a></li>
              <li><a href="gallery.php">gallery</a></li>
              <li><a href="reservations.php">reservations</a></li>
              <li><a href="add.php">submit vehicle </a></li>
               <li><a href="logout.php">log out </a></li>
              <li><a href="#contact">contact us</a></li>
              
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

  

<body>
<?php include("auth.php"); ?>
<section>
<div class="container">

<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
</div>
</section>
</body>
</html>

  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Pioneer Car Rentals</title>
   
    
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
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="add.php">submit vehicle </a></li>
              <li><a href="reservations.php">reservations</a></li>
              <li><a href="add.php">add </a></li>
               <li><a href="logout.php">log out </a></li>
              
              <li><a href="contact.php">contact us</a></li>
              
            </ul>

          </div>

          

        </div>
      </nav>
    </div>

  </header>
<body>

  

   <center><h3>Your Reservation Period </h3><center>

  <section class="listings">
    <div class="wrapper">
      <ul class="properties_list">
      <?php
            include 'config.php';
            $sel = "SELECT pickup,returnin FROM client JOIN cars ON client.car_id=cars.car_id";
            $rs = $conn->query($sel);
            while($rws = $rs->fetch_assoc()){
      ?>
        <li>
         
        
            
            <h2>Pick Up Date : <span class="property_size"><?php echo $rws['pickup'];?></span></h2>
            <h2>Return Date: <span class="property_size"><?php echo $rws['returnin'];?></span></h2>
          </div>
        </li>
          


       
      <?php
        }
      ?>
      </ul>
    </div>
  </section>  <!--  end listing section  -->

  
</body>
</html>
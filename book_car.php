<?php include("auth.php"); ?>
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
 
</head>
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</head>
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
              <li><a href="add.php">submit vehicle </a></li>
               <li><a href="reservations.php">reservations</a></li>
              <li><a href="log out">log out</a></li>
              <li><a href="contact.php">contact us</a></li>
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
     
  <section class="listings">
    <div class="wrapper">
      <ul class="properties_list">
      <?php
            include 'includes/config.php';
            $sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
      ?>
        <li>
          <a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
            <img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
          </a>
          <span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
          <div class="property_details">
            <h1>
              <a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_name'];?></a>
            </h1>
            <h2>Car Brand: <span class="property_size"><?php echo $rws['car_type'];?></span></h2>
          </div>
        </li>
        <h3>Proceed to Hire <?php echo $rws['car_name'];?>. </h3>
       
        <form method="post">

<div class="container">
<form action="" method="post"  > 
   <div class="form-group"> 
      <label for="pickup" class="col-sm-2 control-label">Pick Up Date</label> 
      <div class="col-sm-5"> 
         <input type="date" class="form-control" name="pickup"  
            placeholder="Enter Username"> 
      </div> 
   </div> 
   <div class="form-group"> 
      <label for="return" class="col-sm-2 control-label">Return Date</label> 
      <div class="col-sm-5"> 
         <input type="date" class="form-control" name="returnin" 
            placeholder="Enter Password"> 
      </div>  
      </div> 
      
   
   <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-5"> 
         <button type="submit" class="btn btn-default" name="save" value="Login">Submit</button> 
      </div> 
   </div> 
</form>
          
        <?php
            if(isset($_POST['save'])){
              include 'includes/config.php';
              $pickup = $_POST['pickup'];
             
              $returnin = $_POST['returnin'];
            
              
              $qry = "INSERT INTO client (pickup,returnin,car_id)
              VALUES('$pickup','$returnin','$_GET[id]')";
              $result = $conn->query($qry);
              if($result == TRUE){
                echo "<script type = \"text/javascript\">
                      alert(\"Successfully Reserved\");
                      window.location = (\"reservations.php\")
                      </script>";
              } else{
                echo "<script type = \"text/javascript\">
                      alert(\"Reservation Failed. Try Again\");
                      window.location = (\"book_car.php\")
                      </script>";
              }
            }
            
            ?>
      </ul>
    </div>
  </section>  <!--  end listing section  -->

  
</body>
</html>
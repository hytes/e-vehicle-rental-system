<?php
  
   include 'config.php';
    require('db.php');
include("auth.php");
?>

<
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Pioneer Car Rentals</title>
    
    
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="field-level-sample-registration-form-validation.js"></script>
  
  
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
              <li><a href="addview.php">Submitted vehicles</a></li>
              <li><a href="#portfolio">about us</a></li>
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
<body>

          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
            
            
     <div class="form-group"> 
      <label for="firstname" class="col-sm-2 control-label">Brand</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="car_name"  placeholder="Enter Brand" required /> 
      </div> 
   </div> 
   <div class="form-group"> 
      <label for="lastname" class="col-sm-2 control-label">Model</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="car_type"  placeholder="Enter Model" required /> 
      </div>  
      </div> 
      <div class="form-group"> 
      <label for="lastname" class="col-sm-2 control-label">Registration</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="registration"  placeholder="Enter Registration" required /> 
      </div> 
   </div> 
  
   <div class="form-group"> 
      <label for="lastname" class="col-sm-2 control-label">Drop Off Date</label> 
      <div class="col-sm-5"> 
         <input type="date" class="form-control" name="dropoff"  placeholder="Enter Registration" required /> 
      </div> 
   </div> <div class="form-group"> 
      <label for="lastname" class="col-sm-2 control-label">Pick Up Date</label> 
      <div class="col-sm-5"> 
         <input type="date" class="form-control" name="pickup"  placeholder="Enter Registration" required /> 
      </div> 
   </div> 
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-5"> 
      <label class="sr-only" for="inputfile">File input</label> 
      <input type="file" name="image" required /> 
   </div>
   </div>  
   
   <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-5"> 
         <button type="submit" class="btn btn-default" name="send">Submit</button> 
      </div> 
   </div> 
</form> 
          <?php
              if(isset($_POST['send'])){
                
                $target_path = "addedcars/";
                $target_path = $target_path . basename ($_FILES['image']['name']);
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
                
                $image = basename($_FILES['image']['name']);
                $car_name = $_POST['car_name'];
                $car_type = $_POST['car_type'];
               
                $registration= $_POST['registration'];
                $dropoff = $_POST['dropoff'];
                $pickup = $_POST['pickup'];
                
                $qr = "INSERT INTO usercar (image,car_name,car_type,registration,dropoff,pickup) 
                          VALUES ('$image','$car_name ','$car_type','$registration','$dropoff','$pickup')";
                $res = $conn->query($qr);
                if($res === TRUE){
                  echo "<script type = \"text/javascript\">
                      alert(\"Vehicle Succesfully Added\");
                      window.location = (\"addview.php\")
                      </script>";
                  }
                }
                else 'Failed';
              }
            ?>
        </div>

      </div>
      
      
  
</body>
</html>
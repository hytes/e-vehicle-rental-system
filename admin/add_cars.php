<?php
  
   include 'config.php';
    require('db.php');
include("auth.php");
?>

<
<!DOCTYPE html> 

<title>admin page</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap --> <link href="css/bootstrap.min.css" rel="stylesheet"> 
 <link href="css/simple-sidebar.css" rel="stylesheet">
 <nav id="myScrollspy" class="navbar navbar-default navbar-static" role="navigation"> 
   <div class="navbar-header"> 
      <button class="navbar-toggle" type="button" data-toggle="collapse"  
         data-target=".bs-js-navbar-scrollspy"> 
         <span class="sr-only">Toggle navigation</span>   
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
      </button> 
      <body style="margin:auto;width:95%;">
      <a class="navbar-brand" href="index.html">ADMIN</a> 
   </div> 
   <div class="collapse navbar-collapse bs-js-navbar-scrollspy"> 
      <ul class="nav navbar-nav"> 
         <li><a href="viewusers.php">USER</a></li>
         <li><a href="viewcars.php">CARS</a></li>
         <li><a href="viewreserved.php">RESERVED CARS</a></li>
         <li><a href="viewaddedcars.php">ADDED CARS</a></li>  
         
   
      </ul> 
   </div> 
</nav> 


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="addcars.php">Add Vehicles</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>

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
      <label for="lastname" class="col-sm-2 control-label">Cost</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="hire_cost"  placeholder="Enter Cost" required /> 
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
         <button type="submit" class="btn btn-default" name="send">Sign in</button> 
      </div> 
   </div> 
</form> 
          <?php
              if(isset($_POST['send'])){
                
                $target_path = "../cars/";
                $target_path = $target_path . basename ($_FILES['image']['name']);
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
                
                $image = basename($_FILES['image']['name']);
                $car_name = $_POST['car_name'];
                $car_type = $_POST['car_type'];
                $hire_cost = $_POST['hire_cost'];
                $registration= $_POST['registration'];
                
                $qr = "INSERT INTO cars (image,car_name,car_type,hire_cost,registration) 
                          VALUES ('$image','$car_name ','$car_type','$hire_cost','$registration')";
                $res = $conn->query($qr);
                if($res === TRUE){
                  echo "<script type = \"text/javascript\">
                      alert(\"Vehicle Succesfully Added\");
                      window.location = (\"add_cars.php\")
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
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
              <li><a href="login.php">log in</a></li>
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
<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = stripslashes($firstname);
        $firstname = mysql_real_escape_string($firstname);
        $lastname = stripslashes($lastname);
        $lastname = mysql_real_escape_string($lastname);
        $username = stripslashes($username);
        $username = mysql_real_escape_string($username);
        $email = stripslashes($email);
        $email = mysql_real_escape_string($email);
        $password = stripslashes($password);
        $password = mysql_real_escape_string($password);
        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (firstname,lastname,username, password, email, trn_date) VALUES ('$firstname','$lastname','$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='container'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>





<section id="contact" class="section green">
<div class="container">
<form name="registration" action="" method="post" class="form-horizontal" role="form" >

<div class="form-group"> 
      <label for="firstname" class="col-sm-2 control-label">Firstname</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="firstname"  
            placeholder="Enter Firstname" required /> 
      </div> 
   </div> 
   <div class="form-group"> 
      <label for="lastname" class="col-sm-2 control-label">Lastname</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="lastname"  
            placeholder="Enter Lastname" required /> 
      </div> 
   </div> 
   <div class="form-group"> 
      <label for="username" class="col-sm-2 control-label">Username</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="username"  
            placeholder="Enter Username" required /> 
      </div> 
   </div> 
   <div class="form-group"> 
      <label for="emailname" class="col-sm-2 control-label">Email</label> 
      <div class="col-sm-5"> 
         <input type="email" class="form-control" name="email"  
            placeholder="Enter Email" required ValidateEmail() /> 
      </div> 
   </div> <div class="form-group"> 
      <label for="password" class="col-sm-2 control-label">Password</label> 
      <div class="col-sm-5"> 
         <input type="password" class="form-control" name="password"  
            placeholder="Enter Password" required /> 
      </div> 
   </div> 
   <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-5"> 
         <button type="submit" class="btn btn-default" name="submit" value="Register">Sign Up</button> 
      </div> 
   </div> 

</form>
</div>
<?php } ?>
</div>
</section>
</body>
</html>




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
              <li><a href="#home">home</a></li>
              <li><a href="gallery.php">gallery</a></li>
              <li><a href="registration.php">sign up</a></li>
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


<?php
  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    $username = stripslashes($username);
    $username = mysql_real_escape_string($username);
    $password = stripslashes($password);
    $password = mysql_real_escape_string($password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
    $result = mysql_query($query) or die(mysql_error());
    $rows = mysql_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>




<section id="contact" class="section green">
<div class="container">
<form action="" method="post" name="login" class="form-horizontal" role="form" > 
   <div class="form-group"> 
      <label for="username" class="col-sm-2 control-label">Username</label> 
      <div class="col-sm-5"> 
         <input type="text" class="form-control" name="username"  
            placeholder="Enter Username"> 
      </div> 
   </div> 
   <div class="form-group"> 
      <label for="lastname" class="col-sm-2 control-label">Password</label> 
      <div class="col-sm-5"> 
         <input type="password" class="form-control" name="password" 
            placeholder="Enter Password"> 
      </div>  
      </div> 
      
   
   <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-5"> 
         <button type="submit" class="btn btn-default" name="submit" value="Login">Sign in</button> 
      </div> 
   </div> 
</form> 
<div class="col-sm-offset-2 col-sm-5"> 
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</div>
<section>
</body>
</html>

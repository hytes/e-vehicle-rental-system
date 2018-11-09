  
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
               <li><a href="gallery.php">Gallery</a></li>
               <li><a href="add.php">submit vehicle </a></li>
              <li><a href="registration.php">Log Out</a></li>
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
<body>

  

   

  <section class="listings">
    <div class="wrapper">
     <h2> Available vehicles </h2>               
<table class="table table-striped">   
 <caption></caption>
<thead>


<th><strong>Brand</strong></th>
<th><strong>Model</strong></th>
<th><strong>Registration</strong></th>
<th><strong>Dropoff Date</strong></th>
<th><strong>Pick up Date</strong></th>
<th><strong>Image</strong></th>
<th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<input type="submit" onclick="window.print()" value="Print Here" />
                            <?php
                                include 'config.php';
                                $select = "SELECT * FROM usercar";
                                $result = $conn->query($select);
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                
                                <td><?php echo $row['car_type'] ?></td>
                                <td><?php echo $row['car_name'] ?></td>
                                <td><?php echo $row['registration'] ?></td>
                                <td><?php echo $row['dropoff'] ?></td>
                                <td><?php echo $row['pickup'] ?></td>
                                <td><?php echo $row['image'] ?></td>
                                <td><a href="delete_add.php?id=<?php echo $row["car_id"]; ?>">Delete</a></td></tr>
                                

                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        
                        
                    
                    
              
        
 </div>
</section>  
    </div>
  </section>  <!--  end listing section  -->

  
</body>
</html>
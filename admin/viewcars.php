
<?php 

include("config.php");
include("auth.php");
?>
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
      <li><a href="/car_rental/index.html">HOME</a></li>
         <li><a href="viewusers.php">USER</a></li>
         <li><a href="viewcars.php">CARS</a></li>
         <li><a href="viewreserved.php">RESERVED CARS</a></li>
         <li><a href="viewaddedcars.php">ADDED CARS</a></li>  
         <li><a href="messages.php">MESSAGES</a></li>
   
      </ul> 
   </div> 
</nav> 


    <div id="wrapper">

        <!-- Sidebar -->
     
</head>

    <script type="text/javascript">
        function sureToApprove(id){
            if(confirm("Are you sure you want to delete this car?")){
                window.location.href ='delete_car.php?id='+id;
            }
        }
    </script>
</head>
<body>
<!-- Header -->

 <h2> Available vehicles </h2>               
<table class="table table-striped">   
 <caption></caption>
<thead>
<body style="margin:auto;width:50%;">

<th><strong>Brand</strong></th>
<th><strong>Model</strong></th>
<th><strong>Registration</strong></th>
<th><strong>Hire cost</strong></th>
<th><strong>Image</strong></th>
<th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<input type="submit" onclick="window.print()" value="Print Here" />
                            <?php
                                include 'config.php';
                                $select = "SELECT * FROM cars";
                                $result = $conn->query($select);
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                
                                <td><?php echo $row['car_type'] ?></td>
                                <td><?php echo $row['car_name'] ?></td>
                                <td><?php echo $row['registration'] ?></td>
                                <td><?php echo $row['hire_cost'] ?></td>
                                <td><?php echo $row['image'] ?></td>
                                
                                <td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a>

                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        
                        
                    
                    
                </div>
                <!-- End Box -->

            </div>
            <!-- End Content -->
        
    
</body>
</html>
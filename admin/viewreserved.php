
<?php 
require('db.php');

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
         <li><a href="add_cars.php">ADD VEHICLES</a></li> 
         <li><a href="messages.php">Messeges</a></li>
      </ul> 
   </div> 
</nav> 


    <div id="wrapper">

       
</head>

<h2>Vehicles Added by Users</h2>

<table class="table table-striped">   
 <caption></caption>
<thead>
<input type="submit" onclick="window.print()" value="Print Here" />
<body style="margin:auto;width:75%;">
<tr><th><strong>No</strong></th>
<th><strong>User</strong></th>
<th><strong>Brand</strong></th>
<th><strong>Model</strong></th>
<th><strong>Registration</strong></th>
<th><strong>Pick Up Date</strong></th>
<th><strong>Return Date</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th></tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="Select * from reserved ORDER BY id desc;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr><td><?php echo $count; ?></td>
<td><?php echo $row["submittedby"]; ?></td>
<td><?php echo $row["brand"]; ?></td>
<td><?php echo $row["model"]; ?></td>
<td><?php echo $row["registration"]; ?></td>
<td><?php echo $row["pickup"]; ?></td>
<td><?php echo $row["return"]; ?></td>
<td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td><a href="delete_added_cars.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>

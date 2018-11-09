
<?php 
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM usercar WHERE car_id='$id'"; 


$result = mysql_query($query) or die ( mysql_error());
header("Location: addview.php"); 
 ?>

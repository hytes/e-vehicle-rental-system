
<?php 
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM client WHERE id=$id"; 


$result = mysql_query($query) or die ( mysql_error());
header("Location: reservations.php"); 
 ?>

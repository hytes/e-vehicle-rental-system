
<?php 
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM messages WHERE id=$id"; 

$result = mysql_query($query) or die ( mysql_error());
header("Location:messages.php"); 
 ?>

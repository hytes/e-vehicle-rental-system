
<?php 
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM reservation WHERE id=$id"; 
//$sel_query="Select * from new_record,book where new_record.submittedby=book.submittedby ;";

$result = mysql_query($query) or die ( mysql_error());
header("Location: view.php"); 
 ?>

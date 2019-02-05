<?php
require("connection2.php");

$sql="DELETE FROM attendance WHERE id=$_GET[id]";

if(mysqli_query($con,$sql))
{
	header("location:output.php?msg=Record No. $_GET[id] has been deleted Successfully ");
}
?>
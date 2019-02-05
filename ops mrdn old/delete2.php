<?php
require("connection2.php");

$sql="DELETE FROM result WHERE id=$_GET[id]";

if(mysql_query($sql))
{
	header("location:displayresult.php?msg=Record No. $_GET[id] has been deleted Successfully ");
}
?>
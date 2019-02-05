<?php
require("connection2.php");

/*$sql="CREATE TABLE student (id int, sname char(20), marks int)";

if(mysqli_query($con,$sql))
{
	
	
	echo "Table Created Successfully";
	}
	else
	{
		die("Cannot Create Tanle");
	}*/




$name=mysqli_real_escape_string($con,$_POST['name']);	
$roll=mysqli_real_escape_string($con,$_POST['roll']);
$class=mysqli_real_escape_string($con,$_POST['class']);	
$date=mysqli_real_escape_string($con,$_POST['date']);
$status=mysqli_real_escape_string($con,$_POST['status']);

$sql="INSERT INTO attendance VALUES ('','$name','$roll','$class','$date','$status')";
if(mysqli_query($con,$sql))
{
	echo "1 Record Added Successfully";
	header("location:form2.php?msg=Record Added Successfully");
}
else
{

echo  mysqli_error($con,$sql);
	}
?>
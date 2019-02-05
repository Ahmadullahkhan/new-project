<?php
require_once('connection.php');
/*$sql="CREATE TABLE student (id int, sname char(20), marks int)";

if(mysqli_query($con,$sql))
{
	
	
	echo "Table Created Successfully";
	}
	else
	{
		die("Cannot Create Tanle");
	}*/




$name=mysql_real_escape_string($_POST['name']);	
$lname=mysql_real_escape_string($_POST['lname']);
$userid=mysql_real_escape_string($_POST['userid']);	
$pass=mysql_real_escape_string($_POST['pass']);
$cpass=mysql_real_escape_string($_POST['cpass']);
$gender=mysql_real_escape_string($_POST['gender']);
$dob=mysql_real_escape_string($_POST['dob']);
$city=mysql_real_escape_string($_POST['city']);
$country=mysql_real_escape_string($_POST['country']);
$contact=mysql_real_escape_string($_POST['contact']);
$email=mysql_real_escape_string($_POST['email']);
$sql="INSERT INTO user VALUES ('','$name','$lname','$userid','$pass','$cpass','$gender','$dob','$city','$country','$contact','$email')";
if(mysql_query($sql))
{
	echo "Successfully Register";
	header("location:assignment.php?msg Record Added");
}
else
{

echo  mysql_error($sql);
	}
?>
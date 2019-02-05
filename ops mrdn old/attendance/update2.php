

<?php
require("connection2.php");
$id = mysql_real_escape_string($_GET['id']);

$tatus="";

if($_SERVER['REQUEST_METHOD']=='GET')
{

$id = mysql_real_escape_string($_GET['id']);

$sql="SELECT * FROM attendance WHERE id='$id'";

$res = mysqli_query($con,$sql) or die("can not execute query".mysql_error());

while($row=mysqli_fetch_array($res))
{

$name = $row['name'];
$roll  = $row['roll'];
$class= $row['class'];
$date = $row['date'];
$status = $row['status'];
;



						} 

}

///////////////////////////////////////////////////////////////////////////////////////////


if($_SERVER['REQUEST_METHOD']=='POST')
{

$name= mysql_real_escape_string($_POST['name']);
$roll = mysql_real_escape_string($_POST['roll']);
$class = mysql_real_escape_string($_POST['class']);
$date = mysql_real_escape_string($_POST['date']);
$status = mysql_real_escape_string($_POST['status']);


if(empty($name)&& empty($roll) && empty($class)&& empty($date)&& empty($status))
{
	$tatus = "Please Fill All The Required Fields !";
	
	}
else
{

$sql= "UPDATE attendance SET name ='$name',roll='$roll',class='$class',date='$date',status='$status' WHERE id ='$id'";
//echo($sql);
mysqli_query($con,$sql) or die ("CAn not Execute Ur Query".mysqli_error());
$tatus="Record Updated Successfully";			}

}
?>
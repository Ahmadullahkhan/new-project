<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Expid = $_POST['Expid'];
$organizaton=$_POST['organizaton'];
	$st_date=$_POST['st_date'];
	$end_date=$_POST['end_date'];
	$st_salary=$_POST['st_salary'];
	$end_salary=$_POST['end_salary'];
	$job_title=$_POST['job_title'];
	$duty=$_POST['duty'];

// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "UPDATE  `job`.`jobseeker_exp` SET  `organizaton` =  '$organizaton',
`st_date` =  '$st_date',
`end_date` =  '$end_date',
`st_salary` =  '$st_salary',
`end_salary` =  '$end_salary',
`job_title` =  '$job_title',`duty` =  '$duty' WHERE  `jobseeker_exp`.`Expid` =$Expid";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'exper.php\';</script>';
?>

</body>
</html>
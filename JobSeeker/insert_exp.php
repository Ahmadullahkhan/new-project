<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();

}
$organizaton=$_POST['organizaton'];
	$st_date=$_POST['st_date'];
	$end_date=$_POST['end_date'];
	$st_salary=$_POST['st_salary'];
	$end_salary=$_POST['end_salary'];
	$job_title=$_POST['job_title'];
	$duty=$_POST['duty'];
	$ID=$_SESSION['ID'];
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("job", $con);
	// Specify the query to Insert Record
	$sql = "INSERT INTO `job`.`jobseeker_exp` (`Expid`, `JobSeekId`, `organizaton`, `st_date`, `end_date`, `st_salary`, `end_salary`, `job_title`, `duty`) VALUES (NULL, '$ID', '$organizaton', '$st_date', '$end_date', '$st_salary', '$end_salary', '$job_title', '$duty')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert(" Succesfully Added");window.location=\'exper.php\';</script>';

?>
</body>
</html>

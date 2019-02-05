<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$train_id = $_POST['train_id'];
$title=$_POST['title'];
	$inst=$_POST['inst'];
	$st_date=$_POST['st_date'];
	$end_date=$_POST['end_date'];
	

// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "UPDATE  `job`.`training` SET  `title` =  '$title',`inst` =  '$inst',
`st_date` =  '$st_date',
`end_date` =  '$end_date' WHERE  `training`.`train_id` =$train_id";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'train.php\';</script>';
?>

</body>
</html>
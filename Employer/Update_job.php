
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$JobId = $_POST['JobId'];
$JobTitle = $_POST['JobTitle'];
$Vacancy=$_POST['Vacancy'];
$MinQualification=$_POST['MinQualification'];
$txtDesc = $_POST['txtDesc'];


// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "UPDATE  `job`.`job_master` SET  
`JobTitle` =  '$JobTitle',
`Vacancy` =  '$Vacancy',
`MinQualification` =  '$MinQualification',
`Description` =  '$txtDesc ' WHERE  `job_master`.`JobId` ='".$JobId."'";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>

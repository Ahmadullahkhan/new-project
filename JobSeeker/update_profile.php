<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['JobSeekId'];
$txtName=$_POST['JobSeekerName'];
$txtContact=$_POST['Address'];
$txtAddress = $_POST['City'];
$txtEmail=$_POST['Email'];
$txtMobile = $_POST['Mobile'];
$txtArea=$_POST['Qualification'];
$txtgender=$_POST['Gender'];
$txtdob=$_POST['BirthDate'];
$txtUser=$_POST['UserName'];
$txtPassword=$_POST['Password'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update jobseeker_reg  set JobSeekerName='".$txtName."',Address='".$txtContact."',City='".$txtAddress."',Email='".$txtEmail."',Mobile='".$txtMobile."',Qualification='".$txtArea."',Gender='".$txtgender."',BirthDate='".$txtdob."',UserName='".$txtUser."',Password='".$txtPassword."' where JobSeekId=".$txtId."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>

</body>
</html>
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
$lang=$_POST['lang'];
	$oral=$_POST['oral'];
	$write=$_POST['write'];
		$ID=$_SESSION['ID'];
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("job", $con);
	// Specify the query to Insert Record
	$sql = "INSERT INTO `job`.`language` (`lang_id`, `JobSeekId`, `lang`, `oral`, `write`) VALUES (NULL, '$ID', '$lang', '$oral', '$write')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert(" Succesfully Added");window.location=\'insert_language.php\';</script>';

?>
</body>
</html>

<?php
session_start();
require_once('connection.php');
$status="";
if($_SERVER['REQUEST_METHOD']=='POST')
{

$username=$_POST['username'];
$passcode=$_POST['passcode'];

$qry="SELECT * FROM login WHERE username ='$username' and pascode ='$passcode'";
//echo $qry;
$res = mysql_query($qry) or die("cannot execute query".mysql_error());

$count=mysql_num_rows($res);
//echo $count;
if($count>0){
while($row = mysql_fetch_array($res))
{

$id=$row['id'];
$username=$row['username'];
$_SESSION['id']=$id;
$_SESSION['username']=$username;
	}

header("location:ControlSite.php");
	}
else
{
$status="Invaild user name & password.Please Login With Correct UserName & Password";

	}

}

?>


<?php
@session_start();

if(!isset($_SESSION['id']))
{
header("location:AdminLogin.php");
}

if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}

?>







<?php
require_once("connection.php");

$id = $_GET['id'];
//echo($id);
$sql="DELETE FROM subscriber WHERE id=$id";

mysql_query($sql) or die("Can not Delete Record".mysql_error());

//echo"Record Deleted Successfully";
header("Location:DisplaySubscriber.php");
?>

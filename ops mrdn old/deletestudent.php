<?php
@session_start();

if(!isset($_SESSION['id']))
{
header("location:Adminlogin.php");
}

if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}

?>

<?php 
require_once("connection.php");
if(isset($_GET['id']))
{

$id = mysql_real_escape_string($_GET['id']);

$sql = "SELECT picture FROM position WHERE id='$id'";
$res = mysql_query($sql) or die("Could Not Reterive Image");

if($res)
{

$res = mysql_fetch_array($res);

$ok = $res['picture'];


$delete = unlink($ok);

if(isset($delete))
{
$sql1="DELETE FROM position WHERE id='$id'";
mysql_query($sql1) or die("Could Not Reterive Image");

header("Location:studentdisply.php");
exit();	
		
		}
		
		else{
		
				echo"Couldnot Delete student Please Try Later !";
				die(mysql_error());
				
				
				}
		
		}


}
else
{


		echo"Essential Parameter for URL is Missing ";
		
		}






?>
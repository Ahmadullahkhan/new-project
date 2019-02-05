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

$id = $_GET['id'];

$sql ="DELETE FROM metatag WHERE id = '$id'";

mysql_query($sql) or die("Can not Delete Record".mysql_error());

header("Location:DisplaySeo.php");

}

else
{

echo " Please Supply Parameter for Deletion";
	
		}
		
		
		?>
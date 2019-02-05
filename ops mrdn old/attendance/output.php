

<table width="1000" bgcolor="#FF6600"><tr bgcolor="#FF6600"><td bgcolor="">
<img src="pic/nb.jpg" width="200" height="200" />
</td><td align="center"><h1><font color="#FFFFFF"><marquee direction="down">@ E-School Management System @</marquee></font></h1></td></tr></table>
<table width="1000"><tr bgcolor="#0000FF"><td align="center"><font color="#FFFFFF" size="+2">ATTENDANCE RECORD</font></td></tr></table>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome to our site</title>
</head>

<body>



<p><a href="form2.php">ADD attendance</a></p>
<a href="controlsite.php">Controlesite</a>

<?php  require("connection2.php"); 

$sql="SELECT * FROM attendance ORDER BY id DESC";
$quer=mysqli_query($con,$sql);
echo "<table border='1' width='50%' align='center'>";

  if(isset($_GET['msg']))
{
echo "<tr><th colspan='14'> $_GET[msg]</th></tr>";
}

echo "<tr style='color:#FFF; background-color:#000'><th>ID</th><th> Name</th><th> Roll</th><th>Class</th><th>Date</th><th>Status</th><th>Delete</th><th>update</th></tr>";
while($row=mysqli_fetch_array($quer))
{
	echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[roll]</td><td>$row[class]</td><td>$row[date]</td><td>$row[status]</td><td><a href='delete2.php?id=$row[id]'>Delete</a></td><td><a href='update.php?id=$row[id]'>Update</a></td></tr>";
}

echo "</table>";
?>

</body>
</html>
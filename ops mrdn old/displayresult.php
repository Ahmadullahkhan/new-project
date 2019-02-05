
<table align="center" width="1000"><tr><td><img src="or.jpg"  width="1400" height="81"/>
<br />
<br />
<table align="center" width="1000">
<tr>
<td><img src="indexx.jpg" width="1400" height="197" /></td>
</tr></table>
<table width="1400" align="center"><tr><td><img src="nb.jpg" width="217" height="118" /></td>
  <td  bgcolor="#000099" width="1200" align="center"><font size="+4" color="#FFFFFF"><b>Result Managemnet</b></font></td>
</tr></table>
<br /><br />
 <table align="center" width="621" height="100">
   <tr><td width="370"><?php
require_once("connection.php");

$sql="SELECT * FROM result ORDER BY id DESC";
$quer=mysql_query($sql);
echo "<table border='1' width='1100' align='center'>";

  if(isset($_GET['msg']))
{
echo "<tr><th colspan='15'> $_GET[msg]</th></tr>";
}

echo "<tr style='color:#FFF; background-color:#000'><th>ID</th><th> Name</th><th> Father name</th><th>R-No</th><th>Class</th><th>Year</th><th>Obtain-marks</th><th>Total-marks</th><th>Per%</th><th>Grade</th><th>Division</th><th>Remarks</th><th>Delete</th><th>Edit</th><th>New</th><th>Back</th></tr>";
while($row=mysql_fetch_array($quer))
{
	echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[fname]</td><td>$row[roll]</td><td>$row[class]</td><td>$row[year]</td><td>$row[om]</td><td>$row[tm]</td><td>$row[per]</td><td>$row[gr]</td><td>$row[div]</td><td>$row[rem]</td><td><a href='delete2.php?id=$row[id]'>Delete</a></td><td><a href='updateresult.php?id=$row[id]'>Edit</a></td><td><a href='addresult.php'>New</a></td> <td><a href='Controlsite.php'>Back</a></td></tr>";
}

echo "</table>";
?></td>
   </tr></table> 
    
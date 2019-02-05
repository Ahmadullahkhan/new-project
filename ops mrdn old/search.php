<br /><table align="center"><tr>
  <td height="115"><img src="mbb.jpg" width="325" height="121" />
  <td width="600" bgcolor="#0066FF" align="center"><em><strong><font color="#FFFFFF" size="+3">Online Result </font></strong></em></td></td></tr></table>
  <?php
require("connection.php");

$q="SELECT * FROM result WHERE roll like '%$_POST[roll]%' AND class like '%$_POST[class]%' ";
							
$r=mysql_query($q) or die (mysql_error());

$row=mysql_fetch_array($r);
//echo"<pre>"; print_r($row); die;
$id=$row['id'];
$name=$row['name'];
$fname=$row['fname'];
$roll=$row['roll'];
$class=$row['class'];
$year=$row['year'];
$om=$row['om'];
$tm=$row['tm'];
$per=$row['per'];
$gr=$row['gr'];
$div=$row['div'];
$rem=$row['rem'];
echo "<table border='0' align='center' width='400' BGCOLOR='white'>
<tr bgcolor=''><td COLSPAN='2' ALIGN='CENTER' bgcolor='black'><FONT SIZE='+2' color='white'>HERE IS YOUR RESULT</font></td></tr>

<tr><td align='center'>Name </td><td align='center'> $name</td> <br>
<tr><td align='center'>Father Name</td><td align='center'> $fname</td></tr><br>
<tr><td align='center'>Roll no</td><td align='center'> $roll</td></tr><br>
<tr><td align='center'>Class </td><td align='center'>$class</td></tr><br>
<tr><td align='center'>Result Year</td><td align='center'>$year</td></tr><br>
<tr><td align='center'>Obtain Marks</td><td align='center'> $om</td></tr><br>
<tr><td align='center'>Total Marks</td><td align='center'>$tm </td></tr><br>
<tr><td align='center'>Per%</td><td align='center'>$per</td></tr><br>
<tr><td align='center'>Grade</td><td align='center'>$gr</td></tr><br>
<tr><td align='center'>Division </td><td align='center'> $div</td></tr> <br>
<tr><td align='center'>Remarks</td><td align='center'> $rem</td></tr></table> <br>


";


 	 	 	

?>
<table align="center"><tr><td bgcolor="#FFFFFF"><a href="front2.php">Back</td></tr></table>

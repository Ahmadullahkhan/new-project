<?php
require("connection2.php");
$q="SELECT * FROM result WHERE roll like '%$_POST[roll]%' ";

$r=@mysqli_query($q) or die (mysql_error());

$row=@mysqli_fetch_array($r);
$id=$row['id'];
$name=$row['name'];
$fname=$row['fname'];
$roll=$row['roll'];
$class=$row['class'];
$year=$row['year'];
$om=$row['om'];
$per=$row['per'];
$gr=$row['gr'];
$div=$row['div'];
$rem=$row['rem'];


echo "
id= $id <br>
Name is = $name <br>
Fname is = $fname<br>
roll   = $roll<br>
class = $class<br>
year = $year<br>
obtain marks = $om<br>
total marks = $tm <br>
per = $per<br>
grade = $gr<br>
division = $div <br>
Remarks = $rem <br>


";


 	 	 	 	 	 	 	


?>
<?php


require("connection2.php");
$sql= "select * from attendance where id=$_GET[id]";
$result=@mysql_query($sql) or die (mysql_error());
$row=mysql_fetch_array($result);
$id=$row['id'];
$name=$row['name'];
$roll=$row['roll'];
$class=$row['class'];
$date=$row['date'];
$status=$row['status'];
//echo "$ id is : $id <br>name is : $name<br>address is: $address"; 
$form = "<center><form method='POST' action='update2.php' name='myform'>
<input type='hidden' name='id' value='$id'>
<h1>RECORD UpDATION</h1>
<table border=3 cellpadding=3>
<tr><th>NAME </th><td><input type='text' name='name' value='$name'></td></tr>
<tr><th>Roll </th><td><input type='text' name='roll' value='$roll'></td></tr>
<tr><th>Class</th><td><input type='text' name='class' value='$class'></td></tr>
<tr><th>Date </th><td><input type='text' name='date' value='$date'></td></tr>
<tr><th>status</th><td><input type='text' name='status' value='$status'></td></tr>
<tr><td colspan=2><center><input type='submit' value='update record'></center></td></tr></center>
</form>
";
 echo "$form";
?>
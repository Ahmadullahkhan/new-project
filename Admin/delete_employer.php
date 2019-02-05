<?php 
$ID=$_GET['EmpId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "delete from Employer_Reg where EmployerId ='".$ID."'  ";
mysql_query ($sql,$con);
mysql_close ($con);
// Execute query$result = mysql_query($sql,$con);
// Loop through each records 
echo '<script type="text/javascript">alert("Account Deleted Succesfully");window.location=\'ManageEmployer.php\';</script>';
?>
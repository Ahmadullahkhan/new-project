<?php
$con=mysql_connect("localhost","root","") or die;

echo"cannot connected";
mysql_select_db("ops", $con) or die;

?>
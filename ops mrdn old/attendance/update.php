<?php

require("connection2.php");
$sql="update attendance set name='$_POST[name]', roll='$_POST[roll]' , class='$_POST[class]', date='$_POST[date]', status='$_POST[status]' WHERE id=$_POST[id]";

$result=@mysql_query($sql) or die(mysql_error());

if ($result)
{
echo "$_POST[id]";

exit;

}


?>
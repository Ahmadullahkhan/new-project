<?php
$id = "";
$con = mysql_connect("localhost","root","");
$sel = mysql_select_db("job",$con);
$Id=$_GET['id'];
//$id = $_GET['id'];
$qry = mysql_query("delete  from application_master where ApplicationId =  '".$Id."'");
echo '<script type="text/javascript">alert("Walkin Deleted Succesfully");window.location=\'searchjob.php\';</script>';

//header.loaction:"searchjob.php";
//headerlocation("searchjob.php");
//$res = mysql_fetch_array($qry);
//print_r($res);die;

?>
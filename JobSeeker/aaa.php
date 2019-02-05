<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    
    
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>
 

<!--<div align="center"><form  method="post" action="aa.php">
                  <table width="80%" border="1" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><strong>Job Title </strong></td>
                      <td><label>
                      <input type="text" name="JobTitle" />
                       
                      </label></td>
                      <td><label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Company Name </strong></td>
                      <td><label>
                       <input type="text" name="CompanyName" />
                          
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    
                      <td><input type="submit"  value="Search" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></form></div>
				  <div align="center">-->
				  <div align="left">
				   <?php
				  
				   error_reporting(0);
				   $con = mysql_connect ("localhost","root");
				   mysql_select_db("job", $con);
				   $JobId=$_POST['JobId'];
	


$q="SELECT * FROM job_master WHERE JobTitle like '%$_POST[JobTitle]%' AND CompanyName like '%$_POST[CompanyName]%' ";
							
$r=mysql_query($q) or die (mysql_error());

$row=mysql_fetch_array($r);
if(empty($row)){echo '<script type="text/javascript">alert("Record Not Found !");window.location=\'advanc.php\';</script>';}else{
//echo"<pre>"; print_r($row); die;
$JobId=$row['JobId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
echo"<table width='80%' border='1' cellpadding='0' cellspacing='0' align='center' >
                          
                          <tr>
                          <td><strong>CompanyName</strong></td>
                          <td><strong>$CompanyName</strong></td>
                          </tr>
                          <tr>
                          <td><strong>JobTitle</strong></td>
                          <td><strong>$JobTitle</strong></td>
                          </tr>
                          <tr>
                          <td><strong>Vacancy</strong></td>
                          <td><strong>$Vacancy</strong></td>
                          </tr>
                          <tr>
                          <td><strong>MinQualification</strong></td>
                           <td cols='30' rows='20'><strong>$MinQualification</strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td rowspan='1' colspan='30'><strong>$Description</td><td></td>
                        </tr>
						                           </table>" ;
						  } ?></div>
						 <div align="center"> <tr><td><a href="Apply.php?JobId=<?php echo $row['JobId'];?>"><strong>Apply For Job</strong></a></td></tr></div>
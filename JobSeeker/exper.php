<?php
if(!isset($_SESSION))
{
session_start();
}
?>
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
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {font-weight: bold}
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
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Experience</a></span></h2>
               

              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Create Experience profile</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form" method="post" action="insert_exp.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Organization:</strong></td>
                          <td><label>
                            <input type="text" name="organizaton" id="txtOther"required="required" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Start Date:</strong></td>
                          <td><label>
                            <input type="text" name="st_date" id="txtOther"required="required" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>End Date:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="end_date" id="txtBoard" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Start Salary</strong></td>
                          <td><label>
                            <input type="text" name="st_salary" id="txtOther"required="required" />
                          </label></td>
                        </tr>
						 <tr>
                          <td><strong>End Salary:</strong></td>
                          <td><label>
                            <input type="text" name="end_salary" id="txtOther"required="required" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Job Title</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="job_title" id="txtPer" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
						 <tr>
                          <td><strong>Description:</strong></td>
                          <td><span id="sprytextfield3">
                            <label>
                            <textarea name="duty" id="txtPer" cols="25" rows="3" required="required"></textarea>
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label><a href="Education.php"><input type="button" name="submit" value="<<Back"></a>
                            <input type="submit" name="button" id="button" value="Submit" /><a href="train.php"><input type="button" name="submit" value="Skip>>"></a>
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Professional Experience</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Organization</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Start Date</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>End Date</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Started Salary</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>End Salary</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Job Title</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Duty</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Edit</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Delete</strong></div></th>



                      </tr>
                      <?php
					  $ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from jobseeker_exp where JobSeekId='$ID'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Expid'];
$organizaton=$row['organizaton'];
$st_date=$row['st_date'];
$end_date=$row['end_date'];
$st_salary=$row['st_salary'];
$end_salary=$row['end_salary'];
$job_title=$row['job_title'];
$duty=$row['duty'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $organizaton;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $st_date;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $end_date;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $st_salary;?></strong></div></td>
						  <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $end_salary;?></strong></div></td>
						  <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $job_title;?></strong></div></td>
						  <td class="style3" ><div align="left" class="style9 style5"><strong><?php echo $duty;?></strong></div></td>
						  <td class="style3" align="center"><div align="center" class="style9 style5"><strong><a href="edit_exp.php?JobSeekId=<?php echo $row['JobSeekId']; ?>"><strong><img src="../design/13.jpg" width="17" height="21" /></strong></a></strong></div></td>
						 <td class="style3"><div align="center" class="style9 style5"><strong><a href="deletexp.php?Expid=<?php echo $Id;?>"><img src="../design/critical.gif" width="15" height="21" /></a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      <tr>
                        <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
//-->
</script>
</body>
</html>

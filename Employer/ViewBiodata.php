<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
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
.style2 {font-weight: bold}
.style3 {font-weight: bold}
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Personal Information</strong></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobSeekId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $row['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Resume:</strong></td> 
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong><img src="../design/do.png" width="40" /></strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Qualification</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Obatin Marks</strong></div></th>
						<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Total marks</strong></div></th>
						<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Pre%</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_GET['JobSeekId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$obt=$row['obt'];
$tot=$row['tot'];
$Per=$row['Percentage'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
						<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $obt;?></strong></div></td>
						<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $tot;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
						
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table><table>
				         <tr>
                    <td bgcolor="#A0B9F3" width="1000"><strong> Professional Experience</strong></td>        
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Organization</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>From</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>To</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Started Salary</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>End Salary</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Job Title</strong></div></th>
						  <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Duty</strong></div></th>
						 



                      </tr>
                      <?php
					  $ID=$_GET['JobSeekId'];
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
						  <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $duty;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table> <table><tr>
                    <td bgcolor="#A0B9F3" width="1000"><strong>Training/Workshop</strong></td>
                  </tr>
				 <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Course Name</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Institute</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Start date</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>End Date</strong></div></th>
						 



                      </tr>
                      <?php
					  
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from training where JobSeekId='".$ID."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['train_id'];
$title=$row['title'];
$inst=$row['inst'];
$st_date=$row['st_date'];
$end_date=$row['end_date'];


?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $title;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $inst;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $st_date;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $end_date;?></strong></div></td>
						  
						
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table><table>
				<tr>
                    <td bgcolor="#A0B9F3" width="1000"><strong>Language Skill</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Language</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Oral Level</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Written Level</strong></div></th>
						
                        



                      </tr>
                      <?php
					 
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from language where JobSeekId='".$ID."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['lang_id'];
$lang=$row['lang'];
$oral=$row['oral'];
$write=$row['write'];


?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $lang;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $oral;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $write;?></strong></div></td>
                         
						  
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
              </table>
				
                <?php
				$Status=$_GET['Status'];
				if($Status=="Apply")
				{
				?>
                <form id="form1" method="post" action="CallLatter.php?JobId=<?php echo $_GET['JobId'] ;?>&JobSeekId=<?php echo $_GET['JobSeekId'] ;?>&AppId=<?php echo $_GET['AppId'] ;?>" enctype="multipart/form-data">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Call Latter Description:</strong></td>
<td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">A value is required.</span></span></td>
                      <td>&nbsp;</td>
                    </tr>
					 <tr>
                      <td><strong>Please attach your call latter</strong></td>
<td><span id="sprytextarea1">
                        <label>
                         <input type="file" name="txtFile" id="txtFile" />
                        </label>
                     
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
					
					
					
					
					
                   
					
					
					
                  </table>
              </form>
              <?php
			  }
			  ?>
                <p align="center"><a href="Application.php"><strong>Back</strong></a></p>

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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>



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
.style1 {color: #FF0000}
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
?>  <div class="slider"><?php include_once("slide.html");?></div>   
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
                <h2><span><a href="#">Search Job</a></span></h2>
               

                <form id="form1" method="post" action="advance.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                    
                      <td><input type="submit" name="button" id="button" value="Search" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
				 <?php
require_once('Connections/job.php');

$q="SELECT * FROM job_master WHERE JobTitle like '%$_POST[JobTitle]%' AND CompanyName like '%$_POST[CompanyName]%' ";
							
$r=mysql_query($q) or die (mysql_error());

$row=mysql_fetch_array($r);
//echo"<pre>"; print_r($row); die;
$JobId=$row['JobId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
              echo "<table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                          <td><strong>JobId</strong></td>
                          <td><strong>$JobId</td>
                          </tr>
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
                           <td><strong>$MinQualification</strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td rowspan="1" colspan="30"><strong>$Description</td>
                        </tr>
                           <tr>
                             
                             <td colspan="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Apply For this Job you must have to Login First</strong><br />
                               <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">New Jobseeker? <a href="JobSeekerReg.php">Register Here</a> </span></td>
                           </tr>
                        </table>";?>
                       
                      </table>
                     </td>
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

</body>
</html>

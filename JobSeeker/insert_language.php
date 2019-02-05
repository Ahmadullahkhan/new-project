

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
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" /><script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {font-weight: bold}
.style3 {font-weight: bold}
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
                <h2><span><a href="#">Languages</a></span></h2>
               

              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Language Skill </strong></td>
                  </tr>
                  <tr>
                    <td><form id="form" method="post" action="language.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Select Language:</strong></td>
                          <td>
                          <select name="lang" id="cmbQual">
                          <option value="English">English</option>
                          <option value="Chinees">Chinees</option>
                          <option value="Urdu">Urdu</option>
                          <option value="Arabic">Arabic</option>
                          <option value="Hindi">Hindi</option>
                          <option value="punjabi">punjabi</option>
                          <option value="Balochi">Balochi</option>
                          <option value="Sindhi">Sindhi</option>
                          <option value="Pashto">Pashto</option>
                          </select>                          </td>
                        </tr>
                        <tr>
                          <td><strong>Select Oral Level </strong></td>
                          <td>
                          <select name="oral" id="cmbQual">
                          <option value="Bigginer">Bigginer</option>
                          <option value="intermidiate">intermidiate</option>
                          <option value="Advanced">Advance</option>
                          
                          </select>                          </td>
                        </tr>
                         <tr>
                          <td><strong>Select Written Level </strong></td>
                          <td>
                          <select name="write" id="cmbQual">
                          <option value="Bigginer">Bigginer</option>
                          <option value="intermidiate">intermidiate</option>
                          <option value="Advanced">Advance</option>
                          
                          </select>                          </td>
                        </tr>
                        
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
						     <a href="train.php"><input type="button" name="submit" value="<<Back"></a>
                            <input type="submit" name="button" id="button" value="Submit" />
							<a href="SearchJob.php"><input type="button" name="submit" value="Skip>>"></a>
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Language Skill</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Language</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Oral Level</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Written Level</strong></div></th>
						<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Delete</strong></div></th>
                        



                      </tr>
                      <?php
					  $ID=$_SESSION['ID'];
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
                         
						  <td class="style3"><div align="center" class="style9 style5"><strong><a href="delete_lang.php?lang_id=<?php echo $Id;?>"><img src="../design/critical.gif" width="15" height="21" /></a></strong></div></td>
						
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
//-->
</script>
</body>
</html>

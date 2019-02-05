<?php
@session_start();

if(!isset($_SESSION['id']))
{
header("location:Adminlogin.php");
}

if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}

?>





<?php
require_once("connection.php");
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=='GET')
{
$id=$_GET['id'];

$sql ="SELECT * FROM metatag WHERE id='$id'";

$res=mysql_query($sql) or die("can not execute query".mysql_error());

while($row=mysql_fetch_array($res))
{

//$id=$row['id'];

$pagename = $row['pagename'];

$keywords  = $row['keywords'];

$description  = $row['description'];
	
	} 


	}



///////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////



if($_SERVER['REQUEST_METHOD']=='POST')
{
$id=$_GET['id'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$pagename = $_POST['pagename'];


if(!empty($keywords) && !empty($description) && !empty($pagename))
{

$sql="UPDATE metatag SET pagename='$pagename',keywords='$keywords',description='$description' WHERE id ='$id'";

mysql_query($sql) or die ("CAn not Execute your Query".mysql_error());

$show ="Records Updated Successfully";



	}
	
else
{
$ok ="Some Problem Occured While Updating Records !";

			}
}

?>
<HTML>
<HEAD>
<TITLE>oriental public school mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--

.style1 {
	color: #cc6600;
	font-weight: bold;
}
-->
</style>
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div align="center">
  <!-- ImageReady Slices (ifteharslice.psd) -->
  <TABLE WIDTH=817 BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR>
      <TD COLSPAN=7>
        <IMG SRC="images/index_01.png" WIDTH=817 HEIGHT=9 ALT=""></TD>
	  </TR>
    <TR>
      <TD ROWSPAN=7 background="images/index_02.png">
        <IMG SRC="images/index_02.png" WIDTH=10 HEIGHT=959 ALT=""></TD>
	    <TD COLSPAN=5>
		    <IMG SRC="images/index_03.png" WIDTH=798 HEIGHT=94 ALT=""></TD>
	    <TD ROWSPAN=7 background="images/index_04.png">
		    <IMG SRC="images/index_04.png" WIDTH=9 HEIGHT=959 ALT=""></TD>
    </TR>
    <TR>
      <TD ROWSPAN=2>
        <IMG SRC="images/index_05.png" WIDTH=7 HEIGHT=220 ALT=""></TD>
	    <TD COLSPAN=3>
		    <IMG SRC="images/index_06.png" WIDTH=783 HEIGHT=211 ALT=""></TD>
	    <TD ROWSPAN=2>
		    <IMG SRC="images/index_07.png" WIDTH=8 HEIGHT=220 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=3>
        <IMG SRC="images/index_08.png" WIDTH=783 HEIGHT=9 ALT=""></TD>
	  </TR>
    <TR>
      <TD COLSPAN=5>
	   
	  <div id="top">
	   <span class="navLeft"></span>
  <ul>
 <li><a href="index.php" class="selected">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="MISSION.php">Mission</a></li>
  <li><a href="principleMsg.php">Principle Message</a></li>
  <li><a href="feesrt.php">Fee Structure</a></li>
  <li><a href="FACLITY.PHP">Facilities</a></li>
  <li><a href="ORGANIZATION.PHP">Organization Chart</a></li>
  <li><a href="Sitemap.html">Sitemap</a></li>
  <li class="noBdr"><a href="contactus.php">Contact Us</a></li>
  </ul>
  <span class="navRight"></span>	  </div>
	  
	  
	  
	  
	  
	  
	  
	  </TD>
    </TR>
    <TR>
      <TD COLSPAN=2 valign="top">
<table width="100%" border="0">
<tr>
   <td ><div id="vertmenu">
     <ul>
       <li>><a href="ControlSite.php">Control Panel </a></li>
       <li>><a href="AddNews.php">Add News </a></li>
       <li><a href="DisplayNews.php">Display News </a></li>
       <li><a href="DisplayNews.php">Update News </a></li>
       <li><a href="DisplayNews.php">Delete News</a></li>
       <li><a href="studentAdd.php">Add Student </a></li>
       <li><a href="studentdisply.php">Display Student </a></li>
       <li><a href="studentdisply.php">Update Student </a></li>
       <li><a href="studentdisply.php">Delete Student </a></li>
       <li><a href="Feeadd.php">Add Fee Structure</a></li>
       <li><a href="feedisply.php">Display Fee Structure</a></li>
       <li><a href="feedisply.php">Update  Fee Structure</a></li>
       <li><a href="DisplaySubscriber.php">Display Subscribers List</a></li>
       <li><a href="DisplaySubscriber.php">Delete Subscribers </a></li>
       <li><a href="mail.php">Send Email To Subscribers </a></li>
       <li><a href="PollngResult.php">Display Poll Results </a></li>
       <li><a href="PasswordChange.php">Change Password </a></li>
       <li><a href="Logout.php">Logout</a></li>
     </ul>
   </div></td>
		  </tr>
   
        <tr>
          <td class="newtitle">Free medical camp for students in the school </td>
        </tr>
        <tr>
          <td><img src="images/treat_03.gif" width="190" height="198"></td>
        </tr>
        <tr>
          <td class="newtitle">Free eye camp for students after every three months to check thier sight </td>
        </tr>
        <tr>
          <td><img src="images/Untitled-1_03.gif" width="190" height="177"></td>
        </tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top"><table width="96%" height="22" align="center">
          <tr>
            <td><form name="form1" method="post" action="">
              <table width="98%" align="center" cellpadding="1" cellspacing="2">
                <tr>
                  <td colspan="2" class="style1">Search Engine Optimization </td>
                </tr>
                <tr>
                  <td height="23" valign="top">&nbsp;</td>
                  <td height="23" valign="top" class="postext"><div align="center"><?php
				  
				  if(isset($show))
				  {
				  
				   echo $show;
				   			} 
							
							  if(isset($ok))
							  {
				  				echo $ok;
				   								}
							
			
							?></div></td>
                </tr>
                <tr>
                  <td height="23" valign="top"><p class="txt2">&nbsp;</p></td>
                  <td height="23" valign="top" class="postext">Provide 15 to 20 userful keywords not more than the mention one </td>
                </tr>
                <tr>
                  <td width="26%" height="23" valign="top" class="txt2">Keywords</td>
                  <td width="74%" valign="top"><textarea name="keywords" cols="40" id="keywords"><?php echo $keywords; ?></textarea></td>
                </tr>
                <tr>
                  <td height="23" valign="top" class="txt">&nbsp;</td>
                  <td height="23" valign="top" class="postext">Description can as long as u like but normally it is 5 to 6 lines or less than 5 lines. </td>
                </tr>
                <tr>
                  <td height="23" valign="top" class="txt">Description</td>
                  <td height="23" valign="top"><textarea name="description" cols="40" rows="10" id="description"><?php echo $description; ?></textarea></td>
                </tr>
                <tr>
                  <td height="23" valign="top" class="txt2">Select Page Name </td>
                  <td height="23" valign="top"><select name="pagename" id="pagename">
                    <option value="Home" selected>Home</option>
                    <option value="About Us">About Us</option>
                    <option value="Mission">Mission</option>
                    <option value="Principle Message">Principle Message</option>
                    <option value="Fee Structure">Fee Structure</option>
                    <option value="Facilities">Facilities</option>
                    <option value="Contact Us">Contact Us</option>
                  </select>                  </td>
                </tr>
                <tr>
                  <td height="23" valign="top">&nbsp;</td>
                  <td height="23" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td height="23" valign="top">&nbsp;</td>
                  <td height="23" valign="top"><input type="submit" name="Submit" value="Submit"></td>
                </tr>
              </table>
                        </form>
            </td>
          </tr>
        </table></TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
        <div align="center"><br>
          <br>
        
        <div align="center"><IMG SRC="images/index_13.png" WIDTH=798 HEIGHT=3 ALT=""></div></TD>
    </TR>
    <TR>
      <TD COLSPAN=5 class="footer">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved Copy Rights Protected @ OPS Mardan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Home</a> |<a href="#"> About Us</a> | <a href="#">Contacts</a> | <a href="#">Web Master</a> | <a href="#">Sitemap </a>
	  
	  
	  
	  
	  </TD>
    </TR>
    <TR>
      <TD COLSPAN=7>
        <IMG SRC="images/index_15.png" WIDTH=817 HEIGHT=12 ALT=""></TD>
	  </TR>
    <TR>
      <TD>
        <IMG SRC="images/spacer.gif" WIDTH=10 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=7 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=192 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=2 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=589 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=8 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=9 HEIGHT=1 ALT=""></TD>
    </TR>
  </TABLE>
  <!-- End ImageReady Slices -->
</div>
</BODY>
</HTML>
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

if($_SERVER['REQUEST_METHOD']=='POST')
{

$keywords = $_POST['keywords'];
$description = $_POST['description'];
$pagename = $_POST['pagename'];


if(!empty($keywords) && !empty($description) && !empty($pagename))
{

$sql= "INSERT INTO metatag (id,pagename,keywords,description) VALUES('','$pagename','$keywords','$description')";

mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());

$show="Records Inserted Successfully";
	}
else
{
$ok="Please Fill All The Required Fields !";

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
.style2 {color: #FFFFFF}
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
        <TD COLSPAN=2 valign="top"><table width="96%" align="center" bgcolor="#E0E0E0">
          <tr>
            <td width="20%"  valign="top" class="txt style2"><div align="center">Page Name </div></td>
            <td width="30%"  valign="top" class="txt2 style2"><div align="center">Keywords</div></td>
            <td width="37%"  valign="top" class="txt2 style2"><div align="center">Description</div></td>
            <td  valign="top" class="txt2" width="13%"><div align="center" class="style2">Action </div></td>
          </tr>
          <?php
require_once("connection.php");

$qry = "SELECT * FROM metatag";

$res = mysql_query($qry) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);

while($row = mysql_fetch_array($res))
{
	
$id=$row['id'];



$pagename = $row['pagename'];

$keywords  = $row['keywords'];

$description  = $row['description'];
?>
          <tr>
            <td bgcolor="#FFFFFF"  valign="top" class="txt">
              <div align="center">
                <?php  echo($pagename);?>
              </div></td>
            <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
              <?php  echo($keywords);?>
            </div></td>
            <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
              <?php  echo($description);?>
            </div></td>
            <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
              <?php

echo "<a href='UpdateSeo.php?id=$id'>Update</a> | <a href='DeleteSeo.php?id=$id'>Delete</a>";?>
            </div></td>
          </tr>
          <?php
	}
?>
        </table></TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
        <br>
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
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

$status="";

if($_SERVER['REQUEST_METHOD']=='POST')
{

$title = $_POST['title'];
$details = $_POST['details'];
$status = $_POST['status'];
if(empty($title)&& empty($details) && empty($status))
{

	$status = "Please Fill All The Required Fields Marked With * !";
	
	}
else
{

$sql= "INSERT INTO news VALUES('','$title','$details','$status',NOW())";

//echo($sql);

mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());

$status="News Inserted Successfully";
			
			}

}


?>












<HTML>
<HEAD>
<TITLE>oriental oublic school mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
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
   <td >
		
		
		
		 <div id="vertmenu"> 

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
		  </div>
		
		
		
		
		</td>
   				</tr>
   
        <tr>
          <td>&nbsp;</td>
        </tr>
   
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></TD>
	    <TD COLSPAN=2 valign="top">
		
		



<form id="form1" name="form1" method="post" action="">
  <table width="84%" align="center" cellpadding="2">
    <tr>
      <td colspan="2"><div align="center" class="newtitle"><strong><?php echo $status;?></strong></div></td>
    </tr>
    <tr>
      <td class="txt">News Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="title" type="text" id="title" size="35" /></td>
    </tr>
    <tr>
      <td width="25%" valign="top" class="txt">News Details &nbsp;* </td>
      <td width="75%"><textarea name="details" cols="35" rows="10" wrap="virtual" id="detail" onBlur="MM_validateForm('title','','R','status','','R','detail','','R');return document.MM_returnValue"></textarea></td>
    </tr>
    <tr>
      <td valign="top" class="txt">News Status&nbsp;&nbsp; * </td>
      <td><input name="status" type="text" id="status" /></td>
    </tr>
    <tr>
      <td><input name="Submit" type="submit" class="but" value="Save News" /></td>
      <td><input name="Submit2" type="reset" class="but" value="Clear Fields" /></td>
    </tr>
    <tr> </tr>
  </table>
</form>
		
		
		
		
		
        </TD>
	  </TR>
    <TR>
      <TD COLSPAN=5>
        <IMG SRC="images/index_13.png" WIDTH=798 HEIGHT=3 ALT=""></TD>
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
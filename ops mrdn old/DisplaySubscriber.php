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


<HTML>
<HEAD>
<TITLE>oriental public school mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div align="center">
  <!-- ImageReady Slices (ifteharslice.psd) -->
  <TABLE WIDTH=817 height="996" BORDER=0 CELLPADDING=0 CELLSPACING=0>
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
	    <TD height="211" COLSPAN=3>
		    <IMG SRC="images/index_06.png" WIDTH=783 HEIGHT=211 ALT=""></TD>
	    <TD ROWSPAN=2>
		    <IMG SRC="images/index_07.png" WIDTH=8 HEIGHT=220 ALT=""></TD>
    </TR>
    <TR>
      <TD height="9" COLSPAN=3>
        <IMG SRC="images/index_08.png" WIDTH=783 HEIGHT=9 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
	  
	  <div id="top">
	   <span class="navLeft"></span>
  <ul>
  <li><a href="#" class="selected">Home</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Mission</a></li>
  <li><a href="#">Principle Message</a></li>
  <li><a href="#">Fee Structure</a></li>
  <li><a href="#">Facilities</a></li>
  <li><a href="#">Organization Chart</a></li>
 <li ><a href="#">Contact Us</a></li>
 <li class="noBdr"><a href="#">Sitemap</a></li>
  </ul>
  <span class="navRight"></span>	  </div>
	  
	  
	  
	  
	  
	  
	  </TD>
    </TR>
    <TR>
      <TD height="600" COLSPAN=2 valign="top">
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
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top">
		<p class="txt2"><strong>Displaying Subscriber List</strong> : <br>
<br>

if the Subscriber Status is 1 then it means that he has received the last email and if it is 0 then it means that he has not sent Email or he does not Received it.
</p>
		
		
		<table width="97%" align="center" bgcolor="#E0E0E0">
  <tr>
    <td width="22%"  valign="top" class="txt">Subscriber Name </td>
    <td width="25%"  valign="top" class="txt">Subscriber Email </td>
    <td width="21%"  valign="top" class="txt">Subscriber Status </td>
    <td width="20%"  valign="top" class="txt">Registered At </td>
    <td width="12%"  valign="top" class="txt">Action </td>
  </tr>
  <?php
require_once("connection.php");

$qry = "SELECT * FROM subscriber";

$res = mysql_query($qry) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);

while($row = mysql_fetch_array($res))
{
	
$id=$row['id'];
//echo($id);
$name = $row['name'];

$email = $row['email'];

$status = $row['status'];

$Dated = $row['Dated'];
?>
  <tr>
    <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
      <?php  echo($name);?>
    </div></td>
    <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
      <?php  echo($email);?>
    </div>
      <div align="center"></div></td>
    <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
      <?php  echo($status);?>
    </div>
      <div align="center"></div></td>
    <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center">
      <?php  echo($Dated);?>
    </div></td>
    <td bgcolor="#FFFFFF"  valign="top" class="txt"><div align="center"><a href='DeleteSubscriber.php?id=<?php echo $id;?>'>Delete </a></div></td>
  </tr>
  <?php
	}
?>
</table>
		
		
		
		
		</TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
             
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
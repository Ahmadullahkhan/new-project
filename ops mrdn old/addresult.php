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

$name = $_POST['name'];
$fname= $_POST['fname'];
$roll= $_POST['roll'];
$class = $_POST['class'];
$year = $_POST['year'];
$om= $_POST['om'];
$tm = $_POST['tm'];
$per = $_POST['per'];
$gr = $_POST['gr'];
$div= $_POST['div'];
$rem= $_POST['rem'];
if(empty($name))
{

	$status = "Please Fill In The  Name !";
	
	}
else
{

$sql="INSERT INTO result VALUES ('','$name','$fname','$roll','$class','$year','$om','$tm','$per','$gr','$div','$rem')";

//echo($sql);

mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());

$status="Result Added Successfully";
			
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
      <td class="txt">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="name" type="text" id="title" size="35" /></td>
    </tr>
     <tr>
      <td class="txt">Father Name &nbsp;&nbsp;&nbsp;* </td>
      <td><input name="fname" type="text" id="title" size="35" /></td>
    </tr>
     <tr>
      <td class="txt">Roll No &nbsp;&nbsp;&nbsp;* </td>
      <td><input name="roll" type="text" id="title" size="35" /></td>
    </tr>
     <tr>
      <td class="txt">Class&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><select name="class" id="class"><option value="8th" selected="selected">8th</option><option value="9th">9th</option><option value="10th">10th</option></select></td>
    </tr>
     <tr>
      <td class="txt">Result Year &nbsp;&nbsp;&nbsp;* </td>
      <td><select name="year" id="year">
        <option value="2012" selected="selected">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
      </select></td>
     </tr>
     <tr>
      <td class="txt">Obtain Marks &nbsp;&nbsp;&nbsp;* </td>
      <td><input name="om" type="text" id="title" size="35" /></td>
    </tr>
     <tr>
      <td class="txt">Total Marks &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="tm" type="text" id="title" size="35" /></td>
    </tr>
    
     <tr>
      <td class="txt">Per%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="per" type="text" id="title" size="35" /></td>
    </tr>
    
     <tr>
      <td class="txt">Grade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="gr" type="text" id="title" size="35" /></td>
    </tr>
  
     <tr>
      <td class="txt">Division&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="div" type="text" id="phy" size="35" /></td>
    </tr>
	  <td class="txt">Remarks&nbsp;&nbsp;&nbsp;&nbsp;* </td>
      <td><input name="rem" type="text" id="phy" size="35" /></td>
    </tr>
      <tr>
      <TD>&nbsp;</TD>
      <td class="txt">&nbsp;</td>
      </tr>
    
    <tr>
      <td><input name="Submit" type="submit" class="but" value="Save Result" /></td>
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
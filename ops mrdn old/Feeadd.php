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

$PMF = mysql_real_escape_string($_POST['PMF']);
$MMF = mysql_real_escape_string($_POST['MMF']);
$SMF = mysql_real_escape_string($_POST['SMF']);
$ADMNP = mysql_real_escape_string($_POST['ADMNP']);
$SDMNM = mysql_real_escape_string($_POST['SDMNM']);
$ADMNS = mysql_real_escape_string($_POST['ADMNS']);
$REFUND = mysql_real_escape_string($_POST['REFUND']);
$SPORT = mysql_real_escape_string($_POST['SPORT']);
$LAB = mysql_real_escape_string($_POST['LAB']);

if(empty($PMF)&& empty($MMF) && empty($SMF)&& empty($ADMNP)&& empty($SDMNM)&& empty($ADMNS)&& empty($REFUND)&& empty($SPORT)&& empty($LAB))
{

	$status = "Please Fill All The Required Fields !";
	
	}
else
{

$sql= "INSERT INTO fee VALUES('','$PMF','$MMF','$SMF','$ADMNP','$SDMNM','$ADMNS','$REFUND','$SPORT','$LAB')";

//echo($sql);

mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());

$status="Fee Inserted Successfully";
			
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
.style2 {	font-family: "Trebuchet MS";
	font-weight: bold;
	font-size: 12px;
	color: #FFFFFF;
}
.style3 {	font-family: "Trebuchet MS";
	font-weight: bold;
	font-size: 12px;
	color: #000000;
}
-->
</style>
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
        <TD COLSPAN=2 valign="top"><table width="79%" height="49" align="center">
          <tr>
            <td><form id="form1" name="form1" method="post" action="">
                <table width="100%">
                  <tr>
                    <td colspan="2" class="txt2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="txt2">&nbsp;</td>
                    <td class="newtitle"><?php echo $status; ?>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="34%" class="txt2">Primery Monthly Fee </td>
                    <td width="66%" class="txt2"><input name="PMF" type="text" id="PMF" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Middle Monthly Fee </td>
                    <td class="txt2"><input name="MMF" type="text" id="MMF" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Secondary Monthly Fee </td>
                    <td class="txt2"><input name="SMF" type="text" id="SMF" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Admision Primery </td>
                    <td class="txt2"><input name="ADMNP" type="text" id="ADMNP" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Admision Middle </td>
                    <td class="txt2"><input name="SDMNM" type="text" id="SDMNM" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Admision secondry </td>
                    <td class="txt2"><input name="ADMNS" type="text" id="ADMNS" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Refundable</td>
                    <td class="txt2"><input name="REFUND" type="text" id="REFUND" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Sports</td>
                    <td class="txt2"><input name="SPORT" type="text" id="SPORT" size="40" /></td>
                  </tr>
                  <tr>
                    <td class="txt2">Laboratory</td>
                    <td class="txt2"><input name="LAB" type="text" id="LAB" size="40" /></td>
                  </tr>
                  <tr>
                    <td><label>
                      <input name="Submit" type="submit" class="but" value="Save Fee Structure" />
                    </label></td>
                    <td><input name="Submit2" type="reset" class="but" value="Reset Fields" /></td>
                  </tr>
                </table>
            </form></td>
          </tr>
        </table></TD>
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

<?php
session_start();
require_once('connection.php');
$status="";
if($_SERVER['REQUEST_METHOD']=='POST')
{

$username=$_POST['username'];
$passcode=$_POST['passcode'];

$qry="SELECT * FROM login WHERE username ='$username' and pascode ='$passcode'";
//echo $qry;
$res = mysql_query($qry) or die("cannot execute query".mysql_error());

$count=mysql_num_rows($res);
//echo $count;
if($count>0){
while($row = mysql_fetch_array($res))
{

$id=$row['id'];
$username=$row['username'];
$_SESSION['id']=$id;
$_SESSION['username']=$username;
	}

header("location:ControlSite.php");
	}
else
{
$status="Invaild user name & password.Please Login With Correct UserName & Password";

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
   <td >
		 <div id="vertmenu"> 

   <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Mission</a></li>
  <li><a href="#">Principle Message </a></li>
  <li><a href="#">Ressults</a></li>
  
  <li> <a href="#">Fee Structure </a></li>
  
  <li><a href="#">Facilities</a></li>
  
  <li><a href="#">Organization Chart </a></li>
 
    <li><a href="#">Image Gallery</a></li>
   
   <li><a href="#">FAQs</a></li>
    <li><a href="#">Downloads </a></li>
  
  
  <li><a href="#">Contact Us</a></li>
  <li><a href="assignment.php">Assignment</a></li> 
  
  
  <li><a href="#">Web Master</a></li>
 </ul>
		  </div>		</td>
		  </tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top"><table width="84%" height="231" align="center" class="txt2">
          <tr>
            <td height="225"><form id="form1" name="form1" method="post" action="">
                <table width="100%" height="225" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="23" colspan="3" valign="top" class="txt2"><p>Please  Provide Username &amp;  Password </p></td>
                  </tr>
                  <tr>
                    <td height="24" colspan="3" class="txt2"><div align="center"><?php echo($status);?></div></td>
                  </tr>
                  <tr>
                    <td width="51%" height="30" class="txt2">Enter user name </td>
                    <td colspan="2" class="txt2"><label>
                      <input name="username" type="text" id="username" size="30" />
                    </label></td>
                  </tr>
                  <tr>
                    <td height="34" class="txt2">enter password </td>
                    <td colspan="2" class="txt2"><input name="passcode" type="password" id="passcode" size="30" /></td>
                  </tr>
                  <tr>
                    <td height="114" class="txt2"><img src="ASAS.jpg" width="153" height="108">&nbsp;</td>
                    <td width="15%" class="txt2"><input type="submit" name="Submit" value="Login" /></td>
                    <td width="34%" class="txt2"><a href="#">Forgotton Password </a></td>
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
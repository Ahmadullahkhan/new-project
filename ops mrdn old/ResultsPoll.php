

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
       <li><a href="Logout.php">Logou</a></li>
     </ul>
   </div></td>
		  </tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top">
		<?php

require_once("connection.php");
			
if($_SERVER['REQUEST_METHOD']=='POST')
{



			if(empty($_POST['poll']))
{

$status="<table width=\"296\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#E0EEBF\">
                                        <tr> 
                                          <td height=\"40\"> <div align=\"center\"><strong><font color=\"#006600\" size=\"2\" face=\"Trebuchet MS\">&nbsp;&nbsp;&nbsp; 
                                              Please Select a Option for Polling ! </font></strong></div></td>
                                        </tr>
                                      </table>";
									  
									  
echo($status);
						}
						
						
				
						
						
if($_POST['poll']==1) 
{
$sql="UPDATE Poll SET option1 = option1 + 1, total = total + 1";
mysql_query($sql) or die ("Your Poll Can Not Be Saved Try Again".mysql_error());

}
if($_POST['poll']==2) 
{
$sql="UPDATE Poll SET option2 = option2 + 1, total = total + 1";
mysql_query($sql) or die ("Your Poll Can Not Be Saved Try Again".mysql_error());
}
if($_POST['poll']==3)
{
$sql="UPDATE poll SET option3 = option3 + 1, total = total + 1";
mysql_query($sql) or die ("Your Poll Can Not Be Saved Try Again".mysql_error());

}
if($_POST['poll']==4) 
{
$sql="UPDATE poll SET option4 = option4 + 1, total = total + 1";
mysql_query($sql) or die ("Your Poll Can Not Be Saved Try Again".mysql_error());

}


$status="<h2  class='txt2' align='center'>Thanks for Your Polling. </h1>";

	echo($status);					
						
				}	
				
				
				
				
				
				
				$sql="SELECT option1/total *100,option2/total *100,option3/total *100,option4/total *100, total FROM Poll";
//echo($sql);
$sql_query = mysql_query($sql) or die("Record Can  Not Be Showed".mysql_error());

$row= mysql_fetch_assoc($sql_query);

				
				
				
									
?>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<table width="445" border="0" align="center" cellpadding="2" cellspacing="2" class="txt2">
          <tr>
            <td colspan="3">Poll Results Oriental Public School
              <div align="right"></div></td>
          </tr>
          <tr>
            <td valign="top"><label>Excellent</label></td>
            <td width="69"><?php echo ceil($row['option1/total *100']); ?>%</td>
            <td width="195" valign="top"><img src="images/img.jpg" width="<?php echo $row['option1/total *100'];?>" height="11" /></td>
          </tr>
          <tr>
            <td>Good</td>
            <td><?php echo $row['option2/total *100']; ?>%</td>
            <td valign="top"><img src="images/img.jpg" width="<?php echo $row['option2/total *100']; ?>" height="11" /></td>
          </tr>
          <tr>
            <td>Average</td>
            <td><?php echo $row['option3/total *100']; ?>%</td>
            <td valign="top"><img src="images/img.jpg" width="<?php echo $row['option3/total *100']; ?>" height="11" /></td>
          </tr>
          <tr>
            <td height="23">Bad</td>
            <td height="23"><?php echo $row['option4/total *100']; ?>%</td>
            <td height="23" valign="top"><img src="images/img.jpg" width="<?php echo $row['option4/total *100']; ?>" height="11" /></td>
          </tr>
          <tr>
            <td><strong>Total Votes </strong></td>
            <td valign="top"><?php echo $row['total']; ?></td>
            <td valign="top"><img src="images/img.jpg" width="<?php echo $row['total']; ?>" height="11" /></td>
          </tr>
          <tr>
            <td width="161">&nbsp;</td>
            <td colspan="2"><label><a href="ChangePassword.php"></a></label></td>
          </tr>
          <tr>
            <td align="left" class="P1">&nbsp;</td>
            <td colspan="2" valign="top" bordercolor="#3E8EFF"></td>
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
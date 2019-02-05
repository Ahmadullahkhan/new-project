<?php 

require_once("connection.php");				

$sql="SELECT * FROM metatag WHERE pagename='Principal Message'";				

$res = mysql_query($sql) or die("Could not Reterive Data".mysql_error());

$row = mysql_fetch_array($res);						
?>
<HTML>
<HEAD>
<TITLE> Orintal Public School Mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="<?php echo $row['keywords']; ?>">
<meta name="description" content="<?php echo $row['description'];?>">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #DC5600;
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
 <li><a href="index.php">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="MISSION.php">Mission</a></li>
  <li><a href="principleMsg.php" class="selected">Principle Message</a></li>
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
  <li><a href="index.php">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="MISSION.php">Mission</a></li>
  <li><a href="principleMsg.php">Principle Message </a></li>
  <li><a href="position.php">Position holders</a></li>
  
  <li> <a href="feesrt.php">Fee Structure </a></li>
  
  <li><a href="FACLITY.PHP">Facilities</a></li>
  
  <li><a href="ORGANIZATION.PHP">Organization Chart </a></li>
 
    <li><a href="#">Image Gallery</a></li>
   
    <li><a href="#">Downloads </a></li>
  
  
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="assignment.php">Assignment</a></li> 
  
  
  <li><a href="webdevolper.php">Web Master</a></li>
 </ul>
		  
		  </div>
		</td>
		  </tr>
   
        <tr>
          <td><img src="images/book_03.png" width="196" height="415"></td>
        </tr>
   
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></TD>
	    <TD COLSPAN=2 valign="top"><table width="100%">
          <tr>
            <td><p class="style1">PRINCIPLE MESSAGE </p>
            
			</td>
          </tr>
          <tr>
            <td height="721">        
             <P class="txt2">It is advised that we all must work hard in our own circle for the betterment
Of the poor Masses of the country and dedicate our soul and all available 
Sources for the prosperity of our beloved Country, for which student can 
Play a significant role.</P>
<p class="txt2"> The oriental public school mardan will satisfy those 
Who seek a scheme of study in which Theory and practical application 
Combine to provide students with problem solving science and arts skill of 
Enduring value. </p>

<P class="txt2">It will also be attractive to those who identify the 
Advantages of obtaining their qualification from one of the leading science 
And arts school. Those who aspire to join an established institution can 
Confidently go for oriental public school mardan, a chain of group of school, 
Having its braches in all major Cities of Pakistan. in recognition of these 
Qualities together with an attractive fee structure that keeps a demand of 
Science and arts qualification from oriental public school mardan.</P>

<P class="txt2">A very 
Moderate fee structure has been introduced for current session, so that 
Middle class May also receive education within their limited resources to 
Play their due role in the build up of our nation.WE BELIEVE ON TEAM WORK.</P> 
  <img src="images/nne_03.png" width="479" height="300"> </td>
          </tr>
        </table></TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
        <IMG SRC="images/index_13.png" WIDTH=798 HEIGHT=3 ALT=""></TD>
	  </TR>
    <TR>
      <TD height="13" COLSPAN=5 class="footer">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved Copy Rights Protected @ OPS Mardan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Home</a> |<a href="#"> About Us</a> | <a href="#">Contacts</a> | <a href="#">Web Master</a> | <a href="#">Sitemap </a>	  </TD>
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
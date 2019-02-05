<?php 

require_once("connection.php");				

$sql="SELECT * FROM metatag WHERE pagename='Contact Us'";				

$res = mysql_query($sql) or die("Could not Reterive Data".mysql_error());

$row = mysql_fetch_array($res);						
?>
<HTML>
<HEAD>
<TITLE>Welcome to Orintal Public School Mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="<?php echo $row['keywords']; ?>">
<meta name="description" content="<?php echo $row['description'];?>">
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
  <TABLE WIDTH=817 height="988" BORDER=0 CELLPADDING=0 CELLSPACING=0>
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
	    <TD height="211" COLSPAN=3><img src="images/index_06.png" width=783 height=211 alt=""></TD>
	    <TD ROWSPAN=2>
		    <IMG SRC="images/index_07.png" WIDTH=8 HEIGHT=220 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=3>
        <IMG SRC="images/index_08.png" WIDTH=783 HEIGHT=9 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=5 height="24px">
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
  <span class="navRight"></span>	  </div>  </TD>
    </TR>
    <TR>
      <TD height="600" COLSPAN=2 valign="top">
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
  <li><a href="Sitemap.html">Sitemap </a></li> 
  
  
<li><a href="webdevolper.php">Web Master</a></li>
 </ul>
		  </div>		</td>
		  </tr>
      </table>	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top"><table width="100%" cellspacing="4">
          <tr>
            <td colspan="2" class="style1">CONTACT US </td>
          </tr>
          <tr>
            <td width="27%" class="postext"><div align="center"><strong>Postal address </strong></div></td>
            <td width="73%" class="txt2">Post office muqaam mandi bypass road near pesco office oriental public mardan. </td>
          </tr>
          <tr>
            <td class="postext"><div align="center"><strong>telephone numbers </strong></div></td>
            <td class="txt2">0937-867630,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0937-872597</td>
          </tr>
          <tr>
            <td class="postext"><div align="center"><strong>mobile numbers </strong></div></td>
            <td class="txt2">0334-8451141,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0333-5548616</td>
          </tr>
          <tr>
            <td class="postext"><div align="center"><strong>email address </strong></div></td>
            <td class="txt2">ops_mardan@yahoo.com</td>
          </tr>
          <tr>
            <td colspan="2" class="postext"><form name="form1" method="post" action="">
              <table width="100%">
                <tr>
                  <td colspan="2" class="newtitle"><div align="center"><strong>If you have any comments or questions then let us know.we will respnd you as soon as possible </strong></div></td>
                  </tr>
                <tr>
                  <td width="34%" class=txt2><div align="center">Name</div></td>
                  <td width="66%"><label>
                    <input name="textfield" type="text" size="30">
                  </label></td>
                </tr>
                <tr>
                  <td class=><div align="center">
                    <div align="center"><span class="txt2">email adress </span></div></td>
                  <td><label>
                    <input name="textfield2" type="text" size="30">
                  </label></td>
                </tr>
                <tr>
                  <td class="txt2"><div align="center" >Comments</div></td>
                  <td><label>
                    <textarea name="textarea" cols="30" rows="10"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2" class="txt2"><label>
                    
                      <div align="center"></div>
                  </label></td>
                  </tr>
                <tr>
                  <td class="txt2">&nbsp;</td>
                  <td class="txt2"><input type="submit" name="Submit" value="Submit"></td>
                </tr>
              </table>
                        </form>            </td>
          </tr>
        </table></TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
             
        <div align="center"><IMG SRC="images/index_13.png" WIDTH=798 HEIGHT=3 ALT=""></div></TD>
    </TR>
    <TR>
      <TD COLSPAN=5 class="footer">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved Copy Rights Protected @ OPS Mardan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Home</a> |<a href="#"> About Us</a> | <a href="#">Contacts</a> | <a href="#">Web Master</a> | <a href="#">Sitemap </a>	  </TD>
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
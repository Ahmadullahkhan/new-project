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
	font-size: 14px;
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
 <li><a href="index.php">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="MISSION.php" class="selected">Mission</a></li>
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
<table width="98%" border="0">
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
<tr>
  <td ><img src="images/word_03.png" width="191" height="247"></td>
</tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top"><br><br><table width="98%" border="1">
          <tr>
            <td colspan="9" class="style1" bgcolor="black"><h2 align="center">New Date Sheet List 2014 </h2></td>
          </tr>
          <tr>
            <td colspan="9" class="style1"  bgcolor="black"><h3 align="center">class 10th </h3></td>
          </tr>
          <tr  bgcolor="#000000">
            <th width="%" height="36">Urdu</th>
            <th width="11%">salmyat</th>
            <th width="12%">Maths</th>
            <th width="12%">Science</th>
            <th width="12%">Pak-Study</th>
            <th width="12%">English</th>
            <th width="12%">Biology</th>
            <th width="12%">Chemistry</th>
            <th width="13%">Physics</th>
          </tr>
       
              <?php	
		
require_once("connection.php");

$qry="SELECT * FROM datesheet WHERE class='10th'";
//echo($qry);

$res = mysql_query($qry) or die("Can Not Reterive Data".mysql_error());

while($row=mysql_fetch_array($res))
{

//$id = $row['id'];
$class = $row['class'];
$ud = $row['urdu'];
$is = $row['islam'];
$mt = $row['maths'];
$sc = $row['sc'];
$title = $row['gk'];

$detail = $row['eng'];
$bo = $row['bio'];
$ch = $row['chm'];
$ph = $row['phy'];
//$status = $row['status'];

//$Updated = $row['Updated'];

$dt = substr($detail,0,80);


echo("<tr bgcolor='blue'><td>$ud</td>
<td> $is</td><td> $mt</td><td> $sc</td><td> $title</td><td> $detail</td><td> $bo</td><td> $ch</td><td> $ph</td>

 
 </tr>");


}	 
?>
<tr>
            <td colspan="9" class="style1"bgcolor="black"><h3 align="center">class 9th</h3> </td>
          </tr>
          <tr  bgcolor="#000000">
            <th width="4%" height="32">Urdu</th>
            <th width="11%">Isalmyat</th>
            <th width="12%">Maths</th>
            <th width="12%">Science</th>
            <th width="12%">Pak-Study</th>
            <th width="12%">English</th>
            <th width="12%">Biology</th>
            <th width="12%">Chemistry</th>
            <th width="13%">Physics</th>
          </tr>
       
              <?php	
		
require_once("connection.php");

$qry="SELECT * FROM datesheet WHERE class='9th'";
//echo($qry);

$res = mysql_query($qry) or die("Can Not Reterive Data".mysql_error());

while($row=mysql_fetch_array($res))
{

//$id = $row['id'];
$class = $row['class'];
$ud = $row['urdu'];
$is = $row['islam'];
$mt = $row['maths'];
$sc = $row['sc'];
$title = $row['gk'];

$detail = $row['eng'];
$bo = $row['bio'];
$ch = $row['chm'];
$ph = $row['phy'];
//$status = $row['status'];

//$Updated = $row['Updated'];

$dt = substr($detail,0,80);


echo("<tr bgcolor='blue'><td>$ud</td>
<td> $is</td><td> $mt</td><td> $sc</td><td> $title</td><td> $detail</td><td> $bo</td><td> $ch</td><td> $ph</td>

 
 </tr>");


}	 
?>
<tr>
            <td colspan="9" class="style1"bgcolor="black"><h3 align="center">class 8th</h3> </td>
          </tr>
          <tr bgcolor="#000000">
            <th width="4%" height="32">Urdu</th>
            <th width="11%">Isalmyat</th>
            <th width="12%">Maths</th>
            <th width="12%">Science</th>
            <th width="12%">Pak-Study</th>
            <th width="12%">English</th>
            <th width="12%">Biology</th>
            <th width="12%">Chemistry</th>
            <th width="13%">Physics</th>
          </tr>
       
              <?php	
		
require_once("connection.php");

$qry="SELECT * FROM datesheet WHERE class='8th'";
//echo($qry);

$res = mysql_query($qry) or die("Can Not Reterive Data".mysql_error());

while($row=mysql_fetch_array($res))
{

//$id = $row['id'];
$class = $row['class'];
$ud = $row['urdu'];
$is = $row['islam'];
$mt = $row['maths'];
$sc = $row['sc'];
$title = $row['gk'];

$detail = $row['eng'];
$bo = $row['bio'];
$ch = $row['chm'];
$ph = $row['phy'];
//$status = $row['status'];

//$Updated = $row['Updated'];

$dt = substr($detail,0,80);


echo("<tr bgcolor='blue'><td>$ud</td>
<td> $is</td><td> $mt</td><td> $sc</td><td> $title</td><td> $detail</td><td> $bo</td><td> $ch</td><td> $ph</td>

 
 </tr>");


}	 
?>
         
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
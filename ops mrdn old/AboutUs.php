<?php 

require_once("connection.php");				

$sql="SELECT * FROM metatag WHERE pagename='About Us'";				

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
.style1 {color: #cc6600}
.style2 {color: #FFFFFF}
.style3 {
	color: #000000;
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
 <li><a href="index.php" >Home</a></li>
  <li><a href="AboutUs.php" class="selected">About Us</a></li>
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
  <li><a href="index.php">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="MISSION.php">Mission</a></li>
  <li><a href="principleMsg.php">Principle Message </a></li>
  <li><a href="position.php">Position holders</a></li>
  
  <li> <a href="feesrt.php">Fee Structure </a></li>
  
  <li><a href="FACLITY.PHP">Facilities</a></li>
  
  <li><a href="ORGANIZATION.PHP">Organization Chart </a></li>
 
    <li><a href="front2.php">Search Result</a></li>
   
    <li><a href="holiday.php">Holiday List </a></li>
  
  
    <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="assignment.php">Assignment</a></li> 
  
  
  <li><a href="webdevolper.php">Web Master</a></li>
 </ul>
		  </div>		</td>
		  </tr>
   
        <tr>
          <td><img src="images/carestd_03.png" width="196" height="417"></td>
        </tr>
        <tr>
          <td class="newtitle">we care the furture of our students.</td>
        </tr>
        
        <tr>
          <td class="newtitle"><img src="images/care2_03.png" width="195" height="356"></td>
        </tr>
        <tr>
          <td class="newtitle">we provide oppertunity and also support our students to grow more in the field of education and that is our aim. </td>
        </tr>
        <tr>
          <td class="newtitle"><img src="images/deco_03.png" width="174" height="131"></td>
        </tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></TD>
	    <TD COLSPAN=2 valign="top"><table width="100%">
          <tr>
            <td><h4 class="style1">About US</h4></td>
          </tr>
          <tr>
            <td height="1374"><p class="txt2 pp">Oriental Public School (OPS) is an  English Medium residential education institution officially recognized and  registered by the Board of Intermediate and Secondary Education Mardan.</p>
			<p class="txt2 pp"> Established  in 1994 with the aim of providing to the new generation a high standard  education, and all round training in building a well balanced, good character  and a confident personality, the institution has initially started as &ldquo;School&rdquo;,  imparting education from primary upto secondary school. But as for many years  the parents and students have been insisting for intermediate science college  in Mardan which could appropriately prepare students for their meritorious  admissions in professional colleges. So consequent upon the increasing demands  from the public, OPS is will be upgraded to intermediate science college in 2009.  Now with the grace of Almighty Allah OPS academic span ranges from nursery to  intermediate college.</p>
  <p class="txt2"> OPS College  Mardan operates in three different sections. Junior Section (Boys/Girls)  ranging from class nursery to Class V; Girls Section Ranging from class VI to  F.Sc. Level and Senior Section (Boys), ranging from Class VI to F.Sc level.</p>
            <p class="txt2">Working in ideally located situation,  the system of education and training at Oriental Public School Mardan is well  planned. It is based on Islamic tenets, Pakistan ideology and methodologies  oriented to produce sound, enlightened and responsible citizens.</p>
<p>&nbsp;<span class="txt2">OPS strive to enhance the capabilities &amp;  abilities of students to harness the modern scientific, technical and  socioeconomic advancements. The healthy and disciplined, but free-to-inquire,  atmosphere generated by joint efforts of forward looking management, dedicated  teaching staff and respectful pupils is very congenial for the nourishment of  creative, intellectual and moral qualities of its students. For the same  reasons, today the efforts of OPS management and teaching staff seems to be  crowned with success, when one finds a blooming OPSian embellished with  distinctive virtues of honour, responsibilities, discipline, faith, courtesy  and motivation to excel in life through genuine and fair means. Given these  attributes make Oriental Public School, a leading and shining educational  institution and a seat of best quality learning in the green land of Mardan.</span><br>
</p>
<table width="75%"  align="center" cellpadding="5" bgcolor="#CCCCCC">
  <tr>
    <td colspan="2" bgcolor="#6699CC" align="center"><span class="txt2 style2">Building  Information</span></td>
    </tr>
  <tr>
    <td width="62%" bgcolor="#FFFFFF" class="txt2">No. of Class Rooms </td>
    <td width="38%" align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">32-</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Offices</td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">05</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Science Laboratory </td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">01</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Library</td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">01</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Computer Lab&nbsp; </td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">01</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Tuck Shop</td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">01</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Play Grounds&nbsp;&nbsp; </td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">02</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="txt2">Hostel Building </td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">01 (10 rooms)</div></td>
  </tr>
</table>



<br>
<br>
<table width="75%" align="center" bgcolor="#CCCCCC" >
  <tr>
    <td colspan="3" bgcolor="#6699CC"><p align="center" class="style2">Total  Strength</p></td>
    </tr>
  <tr>
    <td width="32%" bgcolor="#CCCCCC" class="txt2"><span class="style3">Class </span></td>
    <td width="35%" bgcolor="#CCCCCC" class="txt2"><span class="style3">Boys</span></td>
    <td width="33%" bgcolor="#CCCCCC" class="txt2"><span class="style3">Girls</span></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">Nursery </div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">27</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">26</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><p align="center">prep</p></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">34</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">37</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">1nd</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">41</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">37</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">2rd</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">30</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">30</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">3th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">35</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">31</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">4th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">57</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">32</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">5th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">70</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">30</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">6th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">73</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">23</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">7th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">64</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">26</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">8th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">97</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">23</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">9h</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">63</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">28</div></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">10th</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">48</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">19</div></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">Total</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">639</div></td>
    <td valign="top" bgcolor="#FFFFFF" class="txt2"><div align="center">342</div></td>
  </tr>
</table>
</td>
          </tr>
        </table>		</TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
        <IMG SRC="images/index_13.png" WIDTH=798 HEIGHT=3 ALT=""></TD>
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
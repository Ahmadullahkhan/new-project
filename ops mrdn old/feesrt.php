<?php 

require_once("connection.php");				

$sql="SELECT * FROM metatag WHERE pagename='Fee Structure'";				

$res = mysql_query($sql) or die("Could not Reterive Data".mysql_error());

$row = mysql_fetch_array($res);						
?>
<HTML>
<HEAD>
<TITLE>oriental public school mardanan</TITLE>
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
.style3 {color: #cc6600; font-weight: bold; font-size: 14px; }
.style6 {
	font-size: 10px;
	font-weight: bold;
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
.unifm {
	background-image: url(images/BUTTON_03.jpg);
	background-repeat: no-repeat;
	background-position: center center;
}
.unifmgirl {
	background-image: url(images/GIRL4_03.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
.style8 {
	font-size: 18px;
	font-weight: bold;
}
.style9 {font-size: 14px; color: #cc6600;}
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
  <li><a href="principleMsg.php">Principle Message</a></li>
  <li><a href="feesrt.php" class="selected">Fee Structure</a></li>
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
		  </div>		</td>
   				</tr>
   
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="newtitle"><div align="center"><strong>Uniform for boys </strong></div></td>
        </tr>
        <tr>
          <td height="316"><img src="images/Untitled-4_03.gif" width="198" height="310"></td>
        </tr>
        <tr>
          <td height="20" class="newtitle"><div align="center"><strong>Uniform for girls </strong></div></td>
        </tr>
        <tr>
          <td height="347"><img src="images/Untitled-1_03 (2).gif" width="198" height="350"></td>
        </tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></TD>
	    <TD COLSPAN=2 valign="top"><table width="100%">
          <tr>
            <td class="style1">Fee Structure Session 2010 _2011 </td>
          </tr>
          <tr>
            <td height="1152"><table width="576" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td height="10" colspan="3" bgcolor="#3A6FA5"><div align="center" class="style7">CLASSES</div></td>
                <td width="136" height="15" class="txt2"><div align="center"><span class="style6">MONTHLY FEE</span></div>
				
				
				<?php 

require_once("connection.php");

$qry = "SELECT * FROM fee";

$res = mysql_query($qry) or die ("CAn not Execute Ur Query".mysql_error());

$row = mysql_fetch_row($res);


?>				</td>
              </tr>
              <tr>
                <td width="167"><ul>
                    <li class="txt2">
                      <div align="center">&nbsp;Nursery to Class 5th &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </li>
                </ul></td>
                <td width="110"><div align="center"><span class="txt2">(Primary)&nbsp;&nbsp;&nbsp;</span></div></td>
                <td width="153"><div align="center"><span class="txt2"> &nbsp; (Tuition    Fee)</span></div></td>
                <td width="136"><p align="center"  class="txt2"><strong>Rs. <strong><?php echo $row['1']; ?></strong>/-</strong></p></td>
              </tr>
              <tr>
                <td><ul>
                    <li class="txt2">
                      <div align="center">6th to 8th    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </li>
                </ul></td>
                <td><div align="center"><span class="txt2">&nbsp;&nbsp;&nbsp;&nbsp; (Middle) &nbsp;&nbsp;&nbsp;</span></div></td>
                <td><div align="center"><span class="txt2">&nbsp;&nbsp;&nbsp; (Tuition    Fee)</span></div></td>
                <td width="136"><p align="center" class="txt2"><strong>Rs. <strong><?php echo $row['2']; ?></strong>/-</strong></p></td>
              </tr>
              <tr>
                <td><ul>
                    <li class="txt2"> 9th&nbsp; -&nbsp; 10th&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul></td>
                <td valign="top"><div align="center"><span class="txt2">&nbsp;&nbsp;&nbsp; (Secondary)&nbsp;</span></div></td>
                <td><div align="center"><span class="txt2"> (Tuition Fee)</span></div></td>
                <td width="136"><p align="center" class="txt2"><strong>Rs. <strong><?php echo $row['3']; ?></strong>/-</strong></p></td>
              </tr>
              <tr>
                <td rowspan="3"><ul class="txt2">
                    <li><strong>ADMISSION FEE</strong>&nbsp;&nbsp; (<strong>Once</strong>)</li>
                </ul></td>
                <td colspan="2"><p align="center" class="txt2">Primary </p></td>
                <td width="136"><h6 align="center" class="txt2">Rs. <strong><strong><?php echo $row['4']; ?></strong></strong>/-</h6></td>
              </tr>
              <tr>
                <td colspan="2"><p align="center" class="txt2">Middle</p></td>
                <td width="136"><h6 align="center" class="txt2">Rs. <strong><strong><?php echo $row['5']; ?></strong></strong>/-</h6></td>
              </tr>
              <tr>
                <td colspan="2"><p align="center" class="txt2">Secondary</p></td>
                <td width="136"><h6 align="center" class="txt2">Rs. <strong><strong><?php echo $row['6']; ?></strong></strong>/-</h6></td>
              </tr>
              <tr>
                <td colspan="3"><ul>
                    <li><span class="txt2"><strong>SECURITY&nbsp;&nbsp; </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>(Refundable)</strong></span> </li>
                </ul></td>
                <td width="136" valign="top"><h6 align="center" class="txt2">Rs&nbsp;&nbsp;<strong><strong><?php echo $row['7']; ?></strong></strong>/-</h6></td>
              </tr>
              <tr>
                <td colspan="3"><ul>
                    <li class="txt2">Annual funds (Sports    &amp; Recreation, Exams, Etc) (Yearly)</li>
                </ul></td>
                <td width="136" valign="top"><p align="center" class="txt2"><strong>Rs.<strong><?php echo $row['8']; ?></strong>/-</strong></p></td>
              </tr>
              <tr>
                <td colspan="3"><ul class="txt2">
                    <li>Lab. Fund for class, 9th    &amp; 10th &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Yearly)</li>
                </ul></td>
                <td width="136" valign="top"><p align="center" class="txt2"><strong>Rs.<strong><?php echo $row['9']; ?></strong>/-</strong></p></td>
              </tr>
              <tr>
                <td colspan="4" valign="middle"><span class="style3"><br>
                    </span><span class="style9"><span class="style8">School Uniform </span></span><span class="style3"><br>
                  </span></td>
              </tr>
              <tr>
                <td height="51" colspan="4" class="unifm">&nbsp;</td>
              </tr>
              <tr>
                <td height="269" colspan="4">
                  <div align="center">
                    <table border="1" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="311"class="txt2"><div align="center">SUMMER</div></td>
                        <td width="311" valign="top"class="txt2"><div align="center">
                          <div align="center">WINTER</div></td>
                      </tr>
                      <tr>
                        <td width="311"class="txt2"> <div align="center">White Shirt (Half sleeves)</div></td>
                        <td width="311"class="txt2"> <div align="center">White Shirt (Full Sleeves)</div></td>
                      </tr>
                      <tr>
                        <td width="311" class="txt2"> <div align="center">Light Grey Trousers</div></td>
                        <td width="311" class="txt2"> <div align="center">Light Grey Trousers</div></td>
                      </tr>
                      <tr>
                        <td width="311" class="txt2"><div align="center" >Socks (Grey)</div></td>
                        <td width="311"><div align="center" class="txt2">
                          <div align="center">Socks (Grey)</div>
                        </div></td>
                      </tr>
                      <tr>
                        <td width="311"class="txt2"><p align="center" >Black Shoes</p></td>
                        <td width="311"><div align="center" class="txt2">
                          <div align="center">Black Shoes</div>
                        </div></td>
                      </tr>
                      <tr>
                        <td width="311"><p align="center">&nbsp;</p></td>
                        <td width="311"><div align="center" class="txt2">
                          <div align="center">Pullover (Grey) V-Neck    (Long sleeves)</div>
                        </div></td>
                      </tr>
                      <tr>
                        <td width="311"><p align="center">&nbsp;</p></td>
                        <td width="311" class="txt2"><div align="center">Grey Coat (Optional)</div></td>
                      </tr>
                      <tr>
                        <td height="52" colspan="2" class="uniformgl2"></td>
                        </tr>
                      <tr>
                        <td colspan="2"><table border="1" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="311" class="txt2"><p align="center">S U M M E R</p></td>
                            <td width="311" class="txt2"><p align="center">W I N T E R</p></td>
                          </tr>
                          <tr>
                            <td width="311" class="txt2"><div align="center">Silver Grey Full Sleeve    Qamees</div></td>
                            <td width="311" class="txt2"><div align="center">Silver Grey Full Sleeve    Qamees </div></td>
                          </tr>
                          <tr>
                            <td width="311" class="txt2"><div align="center">White Shalwar (White    scarf)</div></td>
                            <td width="311" class="txt2"><div align="center">White Shalwar (White    Scarf)</div></td>
                          </tr>
                          <tr>
                            <td width="311" class="txt2"><div align="center">White Scarf</div></td>
                            <td width="311" class="txt2"><div align="center">Black Shoes</div></td>
                          </tr>
                          <tr>
                            <td width="311" class="txt2"><div align="center">Black Shoes</div></td>
                            <td width="311" class="txt2"><div align="center">Socks (White)</div></td>
                          </tr>
                          <tr>
                            <td width="311" class="txt2"><div align="center">Socks (White)</div></td>
                            <td width="311" class="txt2"><div align="center">Dark Blue Pullover (Long    Sleeves)</div></td>
                          </tr>
                          <tr>
                            <td width="311" class="txt2"><p align="center">&nbsp;</p></td>
                            <td width="311" class="txt2"><div align="center">Blue Coat (Optional)</div></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="txt2"><div align="center"><span class="style3">Note
                              </span>
                            </div>
                              <li>Fee must be paid before the 5th of each month.</li>
                                <li>Fee  once paid is not refundable.</li>
                              </ol>
                              <span class="style3">Fee  Concessions </span><br>
                                School  administration has given the following monthly fee concessions to the students.                              1).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher&rsquo;s Son / Daughter&nbsp;&nbsp;&nbsp;&nbsp;:10%<br>
                                2).&nbsp;&nbsp;&nbsp;&nbsp; 2nd Brother / Sister&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :10%<br>
                                3).&nbsp;&nbsp;&nbsp;&nbsp; 3rd Brother / Sister&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :25%<br>
                                4).&nbsp;&nbsp;&nbsp;&nbsp; 4th and onward Brother / Sister  :50%<br>
                                5).&nbsp;&nbsp;&nbsp;&nbsp; Position Holder  1st/2nd/3rd (<strong>Nur </strong><strong>&egrave;</strong><strong> 10th</strong>)&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 25%<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Term Wise (4  months)
  Students whose  parents are&nbsp;&nbsp;&nbsp; (<strong>Orphan</strong>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 100%<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; died after his / her admission </td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  </div></td>
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
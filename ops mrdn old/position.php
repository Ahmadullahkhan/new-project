<HTML>
<HEAD>
<TITLE>oriental public school mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {
	font-size: 10px;
	color: #000000;
	font-weight: bold;
}
.style6 {
	font-size: 14px;
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
		
		<table width="85%" align="center" bgcolor="#CCCCCC">
          <tr>
            <td colspan="7" bgcolor="#FFFFFF" class="newtitle"><div align="center" class="style6">Class 5th </div></td>
          </tr>
          <tr>
            <td width="15%" height="21" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Picture </span></div></td>
            <td width="17%" bgcolor="#FFFFFF"><div align="center"><span class="style4">student Name </span></div></td>
            <td width="16%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Position </span></div></td>
            <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Obtain Marks </span></div></td>
            <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Total Marks </span></div></td>
            <td width="24%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Year of Result </span></div></td>
          </tr>
          <?php  
		  require_once("connection.php");

		  $sql = "SELECT * FROM position WHERE status='1' AND class ='5th' ORDER BY position ASC";
		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				//$id=$row['id'];

				$picture  = $row['picture'];
				
				$name  = $row['name'];
				
				
				
				$mobtain = $row['mobtain'];
				
				$tmarks  = $row['tmarks'];
				$position = $row['position'];
				$year  = $row['year'];

		  
		  
		  
		  					?>
		 <tr class="txt2">
            <td bgcolor="#FFFFFF"><img src="<?php echo $picture; ?>" width="78" height="82"></td>
            <td bgcolor="#FFFFFF"><?php echo $name; ?></td>
            <td bgcolor="#FFFFFF"><?php echo$position;  ?></td>
            <td bgcolor="#FFFFFF"><?php echo $mobtain; ?></td>
            <td bgcolor="#FFFFFF"><?php echo $tmarks; ?></td>
            <td bgcolor="#FFFFFF"><?php echo $year;?></td>
          </tr>
          <?php
		   }
		   
		   ?>
		   
        </table>
		
		
		
		
		
	    <br>
	    <table width="85%" align="center" bgcolor="#CCCCCC">
          <tr>
            <td colspan="7" bgcolor="#FFFFFF" class="newtitle"><div align="center" class="style6">Class 6th </div></td>
          </tr>
          <tr>
            <td width="15%" height="21" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Picture </span></div></td>
            <td width="17%" bgcolor="#FFFFFF"><div align="center"><span class="style4">student Name </span></div></td>
            <td width="16%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Position </span></div></td>
            <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Obtain Marks </span></div></td>
            <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Total Marks </span></div></td>
            <td width="24%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Year of Result </span></div></td>
          </tr>
          <?php  
		  require_once("connection.php");

		  $sql = "SELECT * FROM position WHERE status='1' AND class ='6th' ORDER BY position ASC";
		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				//$id=$row['id'];

				$picture1  = $row['picture'];
				
				$name1  = $row['name'];
				
				
				
				$mobtain1 = $row['mobtain'];
				
				$tmarks1  = $row['tmarks'];
				$position1 = $row['position'];
				$year1  = $row['year'];

		  
		  
		  
		  					?>
          <tr class="txt2">
            <td bgcolor="#FFFFFF"><img src="<?php echo $picture1; ?>" width="78" height="82"></td>
            <td bgcolor="#FFFFFF"><?php echo $name1; ?></td>
            <td bgcolor="#FFFFFF"><?php echo$position1;  ?></td>
            <td bgcolor="#FFFFFF"><?php echo $mobtain1; ?></td>
            <td bgcolor="#FFFFFF"><?php echo $tmarks1; ?></td>
            <td bgcolor="#FFFFFF"><?php echo $year1;?></td>
          </tr>
          <?php
		   }
		   
		   ?>
        </table>
      <br>
      <table width="85%" align="center" bgcolor="#CCCCCC">
        <tr>
          <td colspan="7" bgcolor="#FFFFFF" class="newtitle"><div align="center" class="style6">Class 7th </div></td>
        </tr>
        <tr>
          <td width="15%" height="21" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Picture </span></div></td>
          <td width="17%" bgcolor="#FFFFFF"><div align="center"><span class="style4">student Name </span></div></td>
          <td width="16%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Position </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Obtain Marks </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Total Marks </span></div></td>
          <td width="24%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Year of Result </span></div></td>
        </tr>
        <?php  
		  require_once("connection.php");

		  $sql = "SELECT * FROM position WHERE status='1' AND class ='7th' ORDER BY position ASC";


		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				//$id=$row['id'];

				$picture2  = $row['picture'];
				
				$name2  = $row['name'];
				
				
				
				$mobtain2 = $row['mobtain'];
				
				$tmarks2  = $row['tmarks'];
				$position2 = $row['position'];
				$year2  = $row['year'];

		  
		  
		  
		  					?>
        <tr class="txt2">
          <td bgcolor="#FFFFFF"><img src="<?php echo $picture2; ?>" width="78" height="82"></td>
          <td bgcolor="#FFFFFF"><?php echo $name2; ?></td>
          <td bgcolor="#FFFFFF"><?php echo$position2;  ?></td>
          <td bgcolor="#FFFFFF"><?php echo $mobtain2; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $tmarks2; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $year2;?></td>
        </tr>
        <?php
		   }
		   
		   ?>
      </table>
      <br>
      <table width="85%" align="center" bgcolor="#CCCCCC">
        <tr>
          <td colspan="7" bgcolor="#FFFFFF" class="newtitle"><div align="center" class="style6">Class 8th </div></td>
        </tr>
        <tr>
          <td width="15%" height="21" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Picture </span></div></td>
          <td width="17%" bgcolor="#FFFFFF"><div align="center"><span class="style4">student Name </span></div></td>
          <td width="16%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Position </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Obtain Marks </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Total Marks </span></div></td>
          <td width="24%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Year of Result </span></div></td>
        </tr>
        <?php  
		  require_once("connection.php");

		  $sql = "SELECT * FROM position WHERE status='1' AND class ='8th' ORDER BY position ASC";
		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				//$id=$row['id'];

				$picture3  = $row['picture'];
				
				$name3  = $row['name'];
				
				
				
				$mobtain3 = $row['mobtain'];
				
				$tmarks3  = $row['tmarks'];
				$position3 = $row['position'];
				$year3  = $row['year'];

		  
		  
		  
		  					?>
        <tr class="txt2">
          <td bgcolor="#FFFFFF"><img src="<?php echo $picture3; ?>" width="78" height="82"></td>
          <td bgcolor="#FFFFFF"><?php echo $name3; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $position3;  ?></td>
          <td bgcolor="#FFFFFF"><?php echo $mobtain3; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $tmarks3; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $year3;?></td>
        </tr>
        <?php
		   }
		   
		   ?>
      </table>
      <br>
      <table width="85%" align="center" bgcolor="#CCCCCC">
        <tr>
          <td colspan="7" bgcolor="#FFFFFF" class="newtitle"><div align="center" class="style6">Class 9th </div></td>
        </tr>
        <tr>
          <td width="15%" height="21" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Picture </span></div></td>
          <td width="17%" bgcolor="#FFFFFF"><div align="center"><span class="style4">student Name </span></div></td>
          <td width="16%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Position </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Obtain Marks </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Total Marks </span></div></td>
          <td width="24%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Year of Result </span></div></td>
        </tr>
        <?php  
		  require_once("connection.php");

		  $sql = "SELECT * FROM position WHERE status='1' AND class ='9th' ORDER BY position ASC";
		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				//$id=$row['id'];

				$picture4  = $row['picture'];
				
				$name4  = $row['name'];
				
				
				
				$mobtain4 = $row['mobtain'];
				
				$tmarks4  = $row['tmarks'];
				$position4 = $row['position'];
				$year4  = $row['year'];

		  
		  
		  
		  					?>
        <tr class="txt2">
          <td bgcolor="#FFFFFF"><img src="<?php echo $picture4; ?>" width="78" height="82"></td>
          <td bgcolor="#FFFFFF"><?php echo $name4; ?></td>
          <td bgcolor="#FFFFFF"><?php echo$position4;  ?></td>
          <td bgcolor="#FFFFFF"><?php echo $mobtain4; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $tmarks4; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $year4;?></td>
        </tr>
        <?php
		   }
		   
		   ?>
      </table>
      <br>
      <table width="85%" align="center" bgcolor="#CCCCCC">
        <tr>
          <td colspan="7" bgcolor="#FFFFFF" class="newtitle"><div align="center" class="style6">Class 10th </div></td>
        </tr>
        <tr>
          <td width="15%" height="21" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Picture </span></div></td>
          <td width="17%" bgcolor="#FFFFFF"><div align="center"><span class="style4">student Name </span></div></td>
          <td width="16%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Student Position </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Obtain Marks </span></div></td>
          <td width="14%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Total Marks </span></div></td>
          <td width="24%" bgcolor="#FFFFFF"><div align="center"><span class="style4">Year of Result </span></div></td>
        </tr>
        <?php  
		  require_once("connection.php");

		  $sql = "SELECT * FROM position WHERE status='1' AND class ='10th' ORDER BY position ASC";
		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				//$id=$row['id'];

				$picture5  = $row['picture'];
				
				$name5  = $row['name'];
				
				
				
				$mobtain5 = $row['mobtain'];
				
				$tmarks5  = $row['tmarks'];
				$position5 = $row['position'];
				$year5  = $row['year'];

		  
		  
		  
		  					?>
        <tr class="txt2">
          <td bgcolor="#FFFFFF"><img src="<?php echo $picture5; ?>" width="78" height="82"></td>
          <td bgcolor="#FFFFFF"><?php echo $name5; ?></td>
          <td bgcolor="#FFFFFF"><?php echo$position5;  ?></td>
          <td bgcolor="#FFFFFF"><?php echo $mobtain5; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $tmarks5; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $year5;?></td>
        </tr>
        <?php
		   }
		   
		   ?>
      </table></TD>
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
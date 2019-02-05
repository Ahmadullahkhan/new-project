<?php 

require_once("connection.php");				

$sql="SELECT * FROM metatag WHERE pagename='Facilities'";				

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
.style2 {font-size: 12px}
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
	    <TD COLSPAN=5><img src="images/index_03.png" width="798" height="94"></TD>
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
  <li><a href="feesrt.php">Fee Structure</a></li>
  <li><a href="FACLITY.PHP" class="selected">Facilities</a></li>
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
 
    <li><a href="datesheet.php">Datesheet</a></li>
   
    <li><a href="#">Downloads </a></li>
  
  
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="assignment.php">Assignment</a></li> 
  
  
  <li><a href="webdevolper.php">Web Master</a></li>
 </ul>
		  </div>		</td>
		  </tr>
   
        <tr>
          <td class="newtitle"><div align="center"><strong>Annual Day pictures </strong></div></td>
        </tr>
        <tr>
          <td><img src="images/annual-day_03.gif" width="189" height="187"></td>
        </tr>
        <tr>
          <td class="newtitle">students acting like beggar on annual day </td>
        </tr>
        <tr>
          <td><img src="images/Untitled-3_03 (2).gif" width="190" height="192"></td>
        </tr>
        <tr>
          <td class="newtitle">students are practicing before annual day </td>
        </tr>
        <tr>
          <td><img src="images/stdnt_03.gif" width="190" height="192"></td>
        </tr>
        <tr>
          <td class="newtitle">students showing the life of druggie persons </td>
        </tr>
        <tr>
          <td><img src="images/stdnt-day_03.gif" width="192" height="192"></td>
        </tr>
        <tr>
          <td class="newtitle">students are praying during student day </td>
        </tr>
        <tr>
          <td><img src="images/f.match_03.gif" width="192" height="190"></td>
        </tr>
        <tr>
          <td class="newtitle">students playing a football match on sports day </td>
        </tr>
        <tr>
          <td><img src="images/c.match_03.gif" width="192" height="192"></td>
        </tr>
        <tr>
          <td class="newtitle">A cricket match of students on sports day </td>
        </tr>
        <tr>
          <td><img src="images/gust_03.gif" width="192" height="192"></td>
        </tr>
        <tr>
          <td class="newtitle style2">chief guest comming for annual day while small childern throwing leafs of flower on him </td>
        </tr>
        <tr>
          <td><img src="images/science_03.png" width="194" height="292"></td>
        </tr>
        <tr>
          <td class="newtitle">practical session in science room </td>
        </tr>
      </table>
	  
      </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
      <TD COLSPAN=2 valign="top"><table width="100%">
          <tr>
            <td class="style1"><strong>FACILITIES</strong> </td>
          </tr>
          <tr>
            <td height="1251" valign="top"><p class="txt2"><strong class="style1">COMPUTER LAB</strong>  <br/>
              The OPS College  Management has clear vision about this future need and has established a  computer lab, equipped with latest model Pc&rsquo;s. In addition to specific  theoretical course work in the relevant software technologies, the students get  hand on-experience on these computers, under the able guidance and instruction  of veteran Computer trainers</p>
			
		    <p class="txt2"><strong class="style1">HIKE</strong> <br/>
		      
			 In OPS the hikes are daylong activities, which are carried out towards the serene sports, located in N.W.F.P. These hikes are held according to the prescribed Scheduled. Besides given a chance of taking physical exercise in clean unpolluted air, OPS hike is also very rejuvenating in nature as it brings a refreshing pause in the routine academic activities and prepare the students for upcoming though curricula schedule	</p>
			 
			 
			 	<p class="txt2"><strong class="style1">ANNUAL EXHIBITION</strong> <br/> 
	OPS Annual Exhibition is undertaken with an objective to provide platform for the exposure & promotion of scientific, cultural, artistic and aesthetic talents of students. This sort of activity greatly helps in further widening the creative and intellectual horizons of OPSians</p>

			 <p class="txt2"><strong class="style1">ANNUAL DAY</strong> <br/> 
	OPS celebrate Annual Day at the end of each academic year. To spark a healthy competition among the students, the best students selected purely on their meritorious performance in 	various curricular and co-curricular activities, are rewarded with shields, certificates and 	other awards in an impressive and graceful ceremony.
	“Annual Day function” is arranged, conducted, and supervised by “Annual Day Committee”.</p>
	<p class="txt2"><strong class="style1">ANNUAL DAY CRITERIA FOR PRIZE WINNER</strong>	</p>
	<table width="96%" align="center" bgcolor="#CCCCCC">
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>1).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;Tilaawat:</strong></td>
        <td width="56%" bgcolor="#FFFFFF" class="txt2">Vocal, Correct pronunciations, Regular</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>2).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>&nbsp;&nbsp;Most Regular Student:</strong></td>
        <td width="56%" bgcolor="#FFFFFF" class="txt2">Regularity throughout the Academic session</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>3).</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;Best Monitor:&nbsp;&nbsp; </strong></td>
        <td bgcolor="#FFFFFF" class="txt2">Responsible, Co-operative, vigilant,  well-disciplined Having the ability to tackle all situations</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>4).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;Best Commanders:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></td>
        <td width="56%" bgcolor="#FFFFFF" class="txt2">Having the ability to tackle all situations  Alert, Responsible,  well behaved, properly commanding the assembly.</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>5).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Neat &amp; Tidy Student:&nbsp;&nbsp;&nbsp; </strong></td>
        <td width="56%" bgcolor="#FFFFFF" class="txt2">Proper Uniform, Shoes, Proper Nail cut, Proper  Hair cut,  Punctual throughout the Academic session/year</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>6).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Summer Home work:&nbsp;&nbsp;&nbsp; </strong></td>
        <td bgcolor="#FFFFFF" class="txt2">Naat and tidy complete in all respects.  Punctuality</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>7).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong> &nbsp;&nbsp;&nbsp;&nbsp;Best  Student of the Class</strong></td>
        <td width="56%" bgcolor="#FFFFFF" class="txt2"><div align="left">Regular, Distinguished in academics,  Co-curricular and Extra  Curricular activities well disciplined.</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>8).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong> &nbsp;&nbsp;Sport  Winners</strong></td>
        <td bgcolor="#FFFFFF" class="txt2"><div align="left">Winner of various games and sports in internal  and external  competitions, well disciplined</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>9).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong> &nbsp;&nbsp;Good  deed-honest student</strong></td>
        <td bgcolor="#FFFFFF" class="txt2"><div align="left">Performing any noble act that is clear  reflection of selfless  human service</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>10).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;Over  all good performer</strong></td>
        <td bgcolor="#FFFFFF" class="txt2"><div align="left">Securing first position in all the Monthly  Test/Term Exams  of the academic session</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>11).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong> Best  stage performer</strong></td>
        <td bgcolor="#FFFFFF" class="txt2"><div align="left">Displaying good performance in Recreation or  other duly recommended by the House  Master </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF" class="txt2"><strong>12).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Best  Speaker of the Year</strong></td>
        <td bgcolor="#FFFFFF" class="txt2"><div align="left">Getting first position in the final Speech  Competition</div></td>
      </tr>
      <tr>
        <td height="69" bgcolor="#FFFFFF" class="txt2"><strong>13).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong> All  Rounder</strong></td>
        <td bgcolor="#FFFFFF" class="txt2"><div align="left">Brilliant in academics, Participation in  co-curricular activities,  Punctual, Obedient, Kind, Vigilant, Neat and Tidy,  Responsible, Co-Operative</div></td>
      </tr>
    </table>
	<table width="100%">
      <tr>
        <td class="style1"><strong>SCIENCE LABORATORIES </strong></td>
      </tr>
      <tr>
        <td><p class="txt2">Well equipped Science laboratory with respective apparatus, glassware and chemicals. The experiments are demonstrated and practically conducted to the students to further substantiate and facilitate the theoretical knowledge gained during class hours. Since the apparatus in these labs is very sensitive fragile and the chemicals may be hazardous, therefore, students are advised: </p></td>
      </tr>
      <tr>
        <td class="footer"><strong>NOT TO : </strong></td>
      </tr>
      <tr>
        <td><ol class="txt2" type="i">
            <li>Enter any laboratory unless  the lecturer/demonstrator is present inside</li>
          <li> Leave any laboratory without  permission of the lecturer/demonstrator, even if the practical is over.</li>
          <li>Leave the used apparatus in  the untidy and dirty condition</li>
          <li>Indulge in any play or  physical exuberance causing breakage of apparatus or glassware</li>
          Fiddle
          <li>with chemicals and  apparatus, which is not a part of the practical</li>
        </ol></td>
      </tr>
      <tr>
        <td class="style1"><strong>HOUSE SYSTEM </strong></td>
      </tr>
      <tr>
        <td height="186"><p class="txt2">The primary aim  of the housing system is to enhance the co-curricular activities of the  students. With this in view, OPS   College Mardan (From  Nursery to 2nd Year) is functioning through Five houses. Each house is working  under the supervision of a House Master. The names of these houses are  alphabetically given as under:</p>
            <ol class="newtitle" type="i">
              <li>ABDALI HOUSE</li>
              <li>AL-KHALID HOUSE</li>
              <li>GHAURI HOUSE</li>
              <li>GHAZNAVI HOUSE</li>
              <li>TIPU HOUSE</li>
            </ol></td>
      </tr>
      <tr>
        <td height="19" class="style1"><strong>INTERNAL SPORTS </strong></td>
      </tr>
      <tr>
        <td height="25"><p class="txt2">Each House  Incharge Prepares the following teams of his house. The players for each team  are selected purely on merit and keeping in view the skill, interest and  aptitude and aptitude etc, Of the students.
          Games</p></td>
      </tr>
      <tr>
        <td height="18"><ol class="newtitle" type="i">
            <li>Badminton</li>
          <li>Cricket</li>
          <li>Hockey</li>
          <li>Voly Ball</li>
          <li>Foot Ball</li>
          <li>Athletics</li>
        </ol></td>
      </tr>
      <tr>
        <td height="19" class="style1"><strong>EXTERNAL SPORTS </strong></td>
      </tr>
      <tr>
        <td height="49"><ol class="txt2" type="i">
            <li>Games Incharge is responsible in preparing OPS teams to participate in the sports 	events/tournament held on inter college/district/divisional/provincial level etc.</li>
          <li>To keep the players fit and alert for a particular event, he is responsible to arrange &ldquo;Coaching 	camps&rdquo; in the campus and makes every endeavor to eliminate the lapses found in the players 	and to further boost their playing capabilities, morale and skills in the particular game </li>
        </ol></td>
      </tr>
      <tr>
        <td height="19" class="style1"><strong>TOURS / EXCURSIONS </strong></td>
      </tr>
      <tr>
        <td height="22"><p class="txt2"> Apart from routine way of imparting scientific and other relevant knowledge in lecture room, OPS management also makes every endeavor to provide practical knowledge to its students. This applied form of knowledge is scattered across the country in the form of historical, archeological, geographical, industrial and technological, sites as well as in the form of educational and research institutes. Guided tours of students are arranged annually to different cities where students are provided an opportunity to see the knowledge in action</P></td>
      </tr>
      <tr>
        <td height="19" class="style1"><strong>TRANSPORT</strong></td>
      </tr>
      <tr>
        <td height="92"><p class="txt2"> At present OPS does not have a fleet of vehicles  fulfilling the transport requirements of day scholars.parents/Guardians should,  therefore, make their own satisfactory arrangements for transporting escorting  their children to and from the college. The OPS management does not hold any  responsibility for the security of its students after they leave the college  premises</P></td>
      </tr>
    </table>
	</td>
          </tr>
          <tr>
            
          </tr>
		  
        </table>
      </TD>
    </TR>
    <TR>
      <TD COLSPAN=5>
        <div align="center"><br>
          <br>
        
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
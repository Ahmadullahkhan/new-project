<?php 

require_once("connection.php");				

$sql="SELECT * FROM metatag WHERE pagename='Home'";				

$res = mysql_query($sql) or die("Could not Reterive Data".mysql_error());

$row = mysql_fetch_array($res);						
?>
<HTML>
<HEAD>
<TITLE>oriental public school mardan Mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="<?php echo $row['keywords']; ?>">
<meta name="description" content="<?php echo $row['description'];?>">


<link href="style.css"rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {
	color: #FF0000;
	font-size: 10px;
}
-->
</style>
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div align="center">
  <!-- ImageReady Slices (ifteharslice.psd) -->
  <TABLE WIDTH= 900 BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR>
      <TD COLSPAN=11>
        <IMG SRC="images/index_01.png" WIDTH=817 HEIGHT=9 ALT=""></TD>
	    <TD width="10">
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=9 ALT=""></TD>
    </TR>
    <TR>
      <TD width="10" ROWSPAN=17 background="images/index_02.png">
        <IMG SRC="images/index_02.png" WIDTH=10 HEIGHT=959 ALT=""></TD>
	    <TD COLSPAN=9>&nbsp;</TD>
	    <TD width="9" ROWSPAN=17 background="images/index_04.png">
		    <IMG SRC="images/index_04.png" WIDTH=9 HEIGHT=959 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=94 ALT=""></TD>
    </TR>
    <TR>
      <TD width="7" ROWSPAN=2>
        <IMG SRC="images/index_05.png" WIDTH=7 HEIGHT=220 ALT=""></TD>
	    <TD COLSPAN=7><img src="photo1.jpg" width=884 height=300 alt=""></TD>
	    <TD width="8" ROWSPAN=2>
		    <IMG SRC="images/index_07.png" WIDTH=8 HEIGHT=220 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=211 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=7>
        <IMG SRC="images/index_08.png" WIDTH=783 HEIGHT=9 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=9 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=9 valign="top" height="24px"> 
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
  <li><a href="adminlogin.php">Login</a></li>
   <li class="noBdr"><a href="contactus.php">Contact Us</a></li>
  </ul>
  <span class="navRight"></span>	  </div>	  </TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=24 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=2 ROWSPAN=3 valign="top">
	  
	  
	  <table width="100%" border="0">
        <tr>
          <td height="6" background="images/spacerWelcome.gif"></td>
        </tr>
        <tr>
          <td><img src="images/headings/news.gif" width="124" height="23" border="0"></td>
        </tr>
        <tr>
          <td>
		  <marquee direction="up"   scrolldelay=30 scrollamount=2 onMouseOver=this.stop() onMouseOut=this.start()>

		  <table width="100%" border="0">
          
		  
          <?php	
		
require_once("connection.php");

$qry="SELECT * FROM news WHERE status='fresh'";
//echo($qry);

$res = mysql_query($qry) or die("Can Not Reterive Data".mysql_error());

while($row=mysql_fetch_array($res))
{

$id = $row['id'];

$title = $row['title'];

$detail = $row['detail'];

//$status = $row['status'];

//$Updated = $row['Updated'];

$dt = substr($detail,0,80);


echo("<tr><td><div align='center' class='newtitle'>$title</div>
<span class='newsdetail'>$dt</span><br>
<span class='footer'>
 <a href='NewsDetails.php?id=$id'>Read More</a></span>
 </td>
 
 </tr>");


}	 
?>
		  </table>
		 </marquee>		  </td>
	    </tr>
	  </table>    </TD>
	    <TD width="3" ROWSPAN=3 valign="top" style="background-image:url(images/index_11.png);background-repeat:repeat-y;"></TD>
	    
		
		<TD COLSPAN=6 valign="top"><table width="96%" border="0">
          <tr>
            <td height="6" colspan="2" background="images/spacerWelcome.gif"></td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><img src="images/headings/wel.gif" width="191" height="21"></td>
          </tr>
          <tr>
            <td width="5%">&nbsp;</td>
            <td width="95%"><p class="txt">Oriental Public School (OPS) is an  English Medium residential education institution officially recognized and  registered by the Board of Intermediate and Secondary Education Mardan.<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="AboutUs.php"><img src="images/ReadMore_24.gif" alt="Read more" width="46" height="14" border="0"></a></p></td>
          </tr>
        </table></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=102 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=6 valign="top" style="background-image:url(images/index_13.png); background-repeat:no-repeat;">       </TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=5 ALT=""></TD>
    </TR>
    <TR>
      <TD width="223" ROWSPAN=3 valign="top"><table width="83%" border="0">
        <tr>
          <td width="4%" background="images/spacerWelcome.gif"></td>
          <td width="96%" background="images/spacerWelcome.gif"></td>
        </tr>
        <tr>
          <td colspan="2"><img src="images/headings/ifteharslice copy.gif" width="114" height="17"></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="18"></td>
        </tr>
      </table>      
        <table width="83%" border="0">
          <tr>
            <td>&nbsp;</td>
            <td height="301"> <span class="txt">Well aware of the fact that the young  generation of every nation is the hope of her future which can play a pivotal  role in shaping the destiny of nation. The goal oriented mission of OPS is  exclusively meant for making sincere efforts with requisite determination to  prepare this generation with sound educational base so that they can  significantly contribute in national development and prosperity.<br>
            </span>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MISSION.php"><img src="images/ReadMore_24.gif" alt="Read more" width="46" height="14" border="0"></a></td>
          </tr>
          </table></TD>
	    <TD width="4" ROWSPAN=3 valign="top" style="background-image:url(images/index_17.png); background-repeat:repeat-y; vertical-align:top;"></TD>
	    <TD width="192" ROWSPAN=3 valign="top"><table width="100%" border="0">
          <tr>
            <td width="6%" background="images/spacerWelcome.gif"></td>
            <td width="94%" background="images/spacerWelcome.gif"></td>
          </tr>
          <tr>
            <td colspan="2"><img src="images/headings/dir.gif" width="126" height="21"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="18">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="322"><span class="txt2">
			<img src="images/index_03.jpg" width="78" height="82" hspace="2" align="left">
			It gives me pleasure to be a director of Oriental public school mardan.
According to me professional education and not any ordinary qualification in general education should be the focal point of every student.
Oriental public school is known as a sign of providing quality education to their Students<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="diret.php"><img src="images/ReadMore_24.gif" alt="Read more" width="46" height="14" border="0"></a></span></td>
          </tr>
        </table>		</TD>
	    <TD width="5" ROWSPAN=3 valign="top" style="background-image:url(images/index_17.png); background-repeat:repeat-y; vertical-align:top;"></TD>
	    <TD COLSPAN=2 ROWSPAN=3 valign="top"><table width="100%" border="0">
          <tr>
            <td background="images/spacerWelcome.gif"></td>
            <td background="images/spacerWelcome.gif"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="images/headings/pricple.gif" width="124" height="22"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
		<span class="txt2">
			<img src="images/index_06.jpg" width="78" height="82" align="left">
			It is advised that we all must work hard in our own circle for the betterment
Of the poor Masses of the country and dedicate our soul and all available
Sources for the prosperity of our beloved Country, for which student can
Play a significant role.
Play a significant role.Play a significant role.</span>		<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="principleMsg.php"><img src="images/ReadMore_24.gif" alt="Read more" width="46" height="14" border="0"></a></td>
          </tr>
        </table></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=108 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=3>
        <IMG SRC="images/index_19.png" WIDTH=201 HEIGHT=6 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=6 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=2 ROWSPAN=3 valign="top"><table width="100%">
        <tr>
          <td><form name="form2" method="post" action="ResultsPoll.php">
              <table width="100%" border="0">
                <tr>
                  <td colspan="2" background="images/spacerWelcome.gif"></td>
                </tr>
                <tr>
                  <td colspan="2"><img src="images/headings/poll.gif" width="91" height="22"></td>
                </tr>
                <tr>
                  <td colspan="2" class="poll">What Do You Think About Our Performace </td>
                </tr>
                <tr>
                  <td width="19%"><input name="poll" type="radio" value="1"></td>
                  <td width="81%" class="poll">Excellent</td>
                </tr>
                <tr>
                  <td><input name="poll" type="radio" value="2"></td>
                  <td class="poll">Average</td>
                </tr>
                <tr>
                  <td><input name="poll" type="radio" value="3"></td>
                  <td class="poll">Bad</td>
                </tr>
                <tr>
                  <td><input name="poll" type="radio" value="4"></td>
                  <td class="poll">Donot Know </td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                    <input name="Submit" type="submit" class="but" value="Submit Your Option">
                  </div></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table>
	  
	  
	  
	      
        <table width="100%">
        <tr>
          <td><form name="form3" method="post" action="">
              <table width="100%">
                <tr>
                  <td><img src="images/NewsLetter.gif" width="164" height="21"></td>
                </tr>
                <tr>
                  <td class="newtitle">
				  <?php 
							
							// if name and email varible are set 
							
							if(isset($_POST['name']) && isset($_POST['email']))
							{
							
							// using post super global receive its value
							require_once("connection.php");
										$name =  mysql_real_escape_string($_POST['name']);
										$email =   mysql_real_escape_string($_POST['email']);
										
										$errors = array(); 
	/*
				User Name Validation nd check it n database
														*/
				if(!empty($name))
				{
							
							if(!ctype_alnum($name)){
								$errors[] = 'Name can only contain numbers and letters!.';
									}
							
							if(strlen($name) <= 3 || strlen($name) > 40){
								$errors[] = 'The Name must be betwen 3 & 40 characters!.';
									}
							
													$sql = "SELECT name FROM subscriber WHERE name ='$name'";
																$res = mysql_query($sql) or die(mysql_error());
														
																	if(mysql_num_rows($res) > 0){
																		$errors[] = "The Name you supplied is already in use!";
																														}
				}
				else
						if(empty($name)){
							$errors[] = 'The Name must not be empty.';
												}
			
										
										
				/*Start of Email Validation*/
        
			if(!empty($email))
				{
									
			$checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";
											if(!preg_match($checkemail, $email))
											{
												$errors[] = "Invalid E-mail Address , must be name@example.com!";
															}
																					$sql2 = "SELECT email FROM subscriber WHERE email = '$email'";
																					$res2 = mysql_query($sql2) or die(mysql_error());
																					if(mysql_num_rows($res2) > 0){
																						$errors[] = "The e-mail address you supplied is already in use of another user!";
																						}
																												
				}
				else
							if(empty($email))
								{
								$errors[] = 'The email   must not be empty.';
													}
										
										
	
	
if(!empty($errors)) 
	{
				
				
				foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
				{
					echo  $value . '<br/>'; /* this generates a error list */
				}
				
				
				
				
	}

else
	{	
	
	$sql = sprintf("INSERT INTO subscriber set 
							subscriber.name ='%s', 
							subscriber.email ='%s', 
							 subscriber.status= '0'
						",mysql_real_escape_string($name),
						  mysql_real_escape_string($email)
						  );
	
	
						
mysql_query($sql) or die("Something went wrong while registering. Please try again later.".mysql_error());


			
echo("Your Have Succesfully Subscribed to our Newsletter !");
	
	
	
	
	
							}
							
							}
							?>				  </td>
                </tr>
                
				
				<tr>
                  <td><label>
                    <input name="name" type="text" id="name">
                  </label></td>
                </tr>
                <tr>
                  <td><label>
                    <input name="email" type="text" id="email">
                  </label></td>
                </tr>
                <tr>
                  <td><label>
                    <div align="center">
                      <input name="Submit2" type="submit" class="but" value="Submit">
                      </div>
                  </label></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table></TD>
      <TD height="242" background="images/index_21.png">&nbsp;</TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=96 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=7><img src="images/index_22.png" width=600 height=7 alt=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=7 ALT=""></TD>
    </TR>
    <TR>
      <TD height="81" background="images/index_23.png">
        <IMG SRC="images/index_23.png" WIDTH=3 HEIGHT=81 ALT=""></TD>
	    <TD COLSPAN=3 ROWSPAN=3 valign="top"><table width="100%" border="0">
          <tr>
            <td background="images/spacerWelcome.gif"></td>
          </tr>
          <tr>
            <td><img src="images/headings/voic.gif" width="159" height="23"></td>
          </tr>
          <tr>
            <td ><img src="images/index_11.jpg" width="78" height="82" class="photo"  > 
			<span class="txt">
			
			
			It is advised that we all must work hard in our own circle for the betterment
Of the poor Masses of the country and dedicate our soul and all available
Sources for the prosperity of our beloved Country, for which student can
Play a significant role. The oriental public school mardan<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="vice_principal.php"><img src="images/ReadMore_24.gif" alt="Read more" width="46" height="14" border="0"></a></td>
		  </tr>
        </table></TD>
	    <TD ROWSPAN=3 background="images/index_25.png">&nbsp;</TD>
	    <TD COLSPAN=2 ROWSPAN=3 valign="top"><form name="form1" method="post" action="Email.php">
       
	   <table width="100%" border="0" id="txtfield">
          <tr>
            <td colspan="2" background="images/spacerWelcome.gif"></td>
          </tr>
          <tr>
            <td colspan="2"><img src="images/headings/tell.gif" width="144" height="18"></td>
          </tr>
         
		 <tr>
            <td colspan="2" > <span class="style4">
              
              </span></td>
          </tr>
		  <tr>
            <td colspan="2" >
<input name="email1" type="text"  class="txtbox" value="Enter Friend Email Address" ></td>
          </tr>
          <tr>
            <td colspan="2"><input name="email2" type="text" class="txtbox" value=" Enter Your Email Address"></td>
          </tr>
          <tr>
            <td width="8%" >&nbsp;</td>
            <td width="92%" ><input  name="recomnd" type="submit" class="but" value="Recommend Us" ></td>
          </tr>
        </table>
	    </form></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=81 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=3>
        <IMG SRC="images/index_27.png" WIDTH=201 HEIGHT=9 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=9 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=2 ROWSPAN=3><a href="ADMISSION FORM OPS.doc"><img src="images/index_28.png" width="198" height="186" border="0"></a></TD>
	    <TD background="images/index_29.png">
		    <IMG SRC="images/index_29.png" WIDTH=3 HEIGHT=35 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=35 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=7 valign="top">
        <IMG SRC="images/index_30.png" WIDTH=600 HEIGHT=4 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=4 ALT=""></TD>
    </TR>
    <TR>
      <TD background="images/index_31.png">&nbsp;</TD>
	    <TD COLSPAN=6 valign="top"><table width="100%" border="0">
          <tr>
            <td background="images/spacerWelcome.gif"></td>
          </tr>
          <tr>
            <td><img src="images/headings/ourposi.gif" width="192" height="15"></td>
          </tr>
          <tr>
            <td height="89">

			 <marquee direction="left" scrollamount="4" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
			<table width="100%">
            <tr>
			 <?php 
			 
			 require_once("connection.php");
			 
			 $sql = "SELECT name,picture FROM position ORDER BY id DESC";
			 $res = mysql_query($sql) or die("Couldnot Reterive Position Holder Data");
			 while($row = mysql_fetch_array($res))
			 {
			 
			 	
				$picture = $row['picture'];
				$name = $row['name'];
			 ?>
			 <td width="14%"><a href="position.php"><img src="<?php echo $picture; ?>" width="78" height="82" style="border:none"></a></td>
			 
				<?php 
				}
				
				?>
			  </tr>
            </table>
			</marquee>			</td>
          </tr>
        </table>  </TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=147 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=9 valign="top">
        <IMG SRC="images/index_33.png" WIDTH=798 HEIGHT=3 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=3 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=9 valign="top" class="footer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved Copy Rights Protected @ OPS Mardan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Home</a> |<a href="AboutUs.php"> About Us</a> | <a href="contactus.php">ContactUs</a> | <a href="#">Web Maste</a>r | <a href="Sitemap.html">Sitemap </a></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=18 ALT=""></TD>
    </TR>
    <TR>
      <TD COLSPAN=11>
        <IMG SRC="images/index_35.png" WIDTH=817 HEIGHT=12 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=12 ALT=""></TD>
    </TR>
    <TR>
      <TD>
        <IMG SRC="images/spacer.gif" WIDTH=10 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=7 HEIGHT=1 ALT=""></TD>
	    <TD width="191">
		    <IMG SRC="images/spacer.gif" WIDTH=191 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=223 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=4 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=192 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=5 HEIGHT=1 ALT=""></TD>
	    <TD width="165">
		    <IMG SRC="images/spacer.gif" WIDTH=165 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=8 HEIGHT=1 ALT=""></TD>
	    <TD>
		    <IMG SRC="images/spacer.gif" WIDTH=9 HEIGHT=1 ALT=""></TD>
	    <TD></TD>
    </TR>
  </TABLE>
  <!-- End ImageReady Slices -->
</div>
</BODY>
</HTML>
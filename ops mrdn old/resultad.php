<?php
@session_start();

if(!isset($_SESSION['id']))
{
header("location:Adminlogin.php");
}

if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}

?>


<?php 

require_once("Connection.php");
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
.style2 {	font-family: "Trebuchet MS";
	font-weight: bold;
	font-size: 12px;
	color: #FFFFFF;
}
.style3 {	font-family: "Trebuchet MS";
	font-weight: bold;
	font-size: 12px;
	color: #000000;
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
       <li><a href="Logout.php">Logout</a></li>
     </ul>
   </div></td>
		  </tr>
      </table>
	  
	  </TD>
	    <TD background="images/index_11.png">
		    <p><IMG SRC="images/index_11.png" WIDTH=2 HEIGHT=600 ALT=""></p></TD>
        <TD COLSPAN=2 valign="top"><table width="100%">
          <tr>
            <td><form action="resultad.php" method="post" enctype="" name="form1" id="form1">
              <table width="100%" cellspacing="1" cellpadding="2">
                <tr>
                  <td colspan="2"><h2 class="txt2">Add Student Result Page </h2></td>
                </tr>
                <tr>
                  <td colspan="2" align="center" class="newtitle"><div align="left">
                    <?php 


if($_SERVER['REQUEST_METHOD']=='POST')
{

$name = mysql_real_escape_string($_POST['name']);
$fname = mysql_real_escape_string($_POST['fname']);
$roll = mysql_real_escape_string($_POST['roll']);
$class = mysql_real_escape_string($_POST['class']);
$year= mysql_real_escape_string($_POST['year']);
$om = mysql_real_escape_string($_POST['om']);
$tm = mysql_real_escape_string($_POST['year']);
$per = mysql_real_escape_string($_POST['per']);
$gr = mysql_real_escape_string($_POST['gr']);
$rem = mysql_real_escape_string($_POST['rem']);



	
	/*$errors = array(); 

//////////////////////////////////////////////////////////


				if(!empty($name))
				{
						
							
							if(strlen($name) <= 3 || strlen($name) > 40){
								$errors[] = 'The Student Name must be betwen 3 & 100 characters!.';
									}
							
				}
				else
						if(empty($name)){
							$errors[] = 'The Student Name must not be empty.';
												}
			
										
	
        if(empty($class)){
							$errors[] = 'The Student Class must not be empty.';
												}
												
			  if(empty($obtmarks)){
							$errors[] = 'The Obtained Marks  must not be empty.';
												}
												
													
							if(empty($tmarks)){
							$errors[] = 'The Total Marks  must not be empty.';
												}
	
	
	
							if(empty($status)){
							$errors[] = 'The result status  must not be empty.';
												}
	
	
	
							if(empty($position)){
							$errors[] = 'The position status  must not be empty.';
												}
	
	
	
	
							if(empty($year)){
							$errors[] = 'The year status  must not be empty.';
												}
	
	
			
			/////////////////////////////////////////////////////////////////////////////
			
			if(!empty($errors)) 
	{
					
				foreach($errors as $key => $value) 
				{
					echo  $value . '<br/>'; 
				}	
				
	}

			else
			{
			
			
			
			if(!empty($_FILES["fileupload"]))
		
		{
		
		$uploaddir="students/";
		
		if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $uploaddir.$_FILES["fileupload"]["name"]))
								{


						$path="students/";
		
						$path.=$_FILES["fileupload"]["name"];	
		
						@chmod($path,0777);*/
						
					$qry = "INSERT INTO result VALUES ('','$name','$fname','$roll','$class','$year','$om','$tm','$per''$gr''$rem')";
					
					$res=mysql_query($qry) or die("Can Not Add Ur Record".mysql_error());
									
										if($res){
										$flag="All Records are saved  Successfully  !";
										echo $flag;
													}					
					} // end of Inner If Condition
					

					
								else
									{
							
								$flag="No picture Was Selected";
							echo $flag;
									}		
	

	
}//  not empty file code
							
				
}// end of error else

				}// end of post

?>
                  </div>
                    </font></td>
                </tr>
                <tr>
                  <td width="28%" class="txt2"><div align="center">Student  Name </div></td>
                  <td width="72%" class="txt2"><input name="name" type="text" id="name" size="30"/></td>
                </tr>
                <tr>
                  <td valign="top" class="txt2"><div align="center">Father Name </div></td>
                  <td class="txt2"><input name="fname" type="text" id="class" size="30"/></td>
                </tr>
                <tr>
                  <td class="txt2"><div align="center">Roll no </div></td>
                  <td class="txt2"><input name="obtmarks" type="text" id="obtmarks" size="30" />
                    &nbsp;</td>
                </tr>
                
              
                <tr>
                  <td class="txt2"><div align="center">class</div></td>
                  <td class="txt2"><select name="class" id="position">
                      <option value="8th" selected="selected">8th</option>
                      <option value="9th">9th</option>
                      <option value="10th">10th</option>
                  </select></td>
                </tr>
                <tr>
                  <td class="txt2"><div align="center">Result's Year </div></td>
                  <td class="txt2"><select name="year" id="year">
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                  </select></td>
                </tr>
				<tr>
				   <td valign="top" class="txt2"><div align="center">obtain marks </div></td>
                  <td class="txt2"><input name="om" type="text" id="class" size="30"/></td>
				</tr>
				<tr>
				   <td valign="top" class="txt2"><div align="center">total marks </div></td>
                  <td class="txt2"><input name="tm" type="text" id="class" size="30"/></td>
				</tr>
				<tr>
				   <td valign="top" class="txt2"><div align="center">Percentage%</div></td>
                  <td class="txt2"><input name="per" type="text" id="class" size="30"/></td>
				</tr>
				<tr>
				   <td valign="top" class="txt2"><div align="center">Grade</div></td>
                  <td class="txt2"><input name="gr" type="text" id="class" size="30"/></td>
				</tr>
				<tr>
				   <td valign="top" class="txt2"><div align="center">Remarks</div></td>
                  <td class="txt2"><input name="rem" type="text" id="class" size="30"/></td>
				</tr>
                <tr>
                  <td class="txt2">&nbsp;</td>
                  <td class="txt2"><input name="Submit" type="submit" class="but" value="Add Student Results" />
                    &nbsp;&nbsp;&nbsp;
                    <input name="Submit2" type="reset" class="but" value="Clear Fields" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
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
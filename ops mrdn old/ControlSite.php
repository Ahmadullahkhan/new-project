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
<HTML>
<HEAD>
<TITLE>oriental public school mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div align="center">
  <!-- ImageReady Slices (ifteharslice.psd) -->
  <table width="500"height="400" border=0 cellpadding=0 cellspacing=0>
    
    <tr>
      <td width="39" rowspan=7 background="images/index_02.png"><img src="images/index_02.png" width=10 height=959 alt=""></td>
      <td colspan=5><img src="images/index_03.png" width=798 height=94 alt=""></td>
      <td width="375" rowspan=7 background="images/index_04.png"><img src="images/index_04.png" width=9 height=959 alt=""></td>
    </tr>
    <tr>
      <td width="168" rowspan=2><img src="images/index_05.png" width=7 height=220 alt=""></td>
      <td height="211" colspan=3><img src="images/index_06.png" width=783 height=211 alt=""></td>
     
    </tr>
    <tr>
      <td height="9" colspan=3><img src="images/index_08.png" width=783 height=9 alt=""></td>
    </tr>
    <tr>
      <td colspan=5><div id="top"> <span class="navLeft"></span>
              <ul>
                <li><a href="#" class="selected">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Principle Message</a></li>
                <li><a href="#">Fee Structure</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="#">Organization Chart</a></li>
                <li ><a href="#">Contact Us</a></li>
                <li class="noBdr"><a href="#">Sitemap</a></li>
              </ul>
        <span class="navRight"></span> </div></td>
    </tr>
    <tr>
      <td height="600" colspan=2 valign="top"><table width="100%" border="0">
          <tr>
            <td ><div id="vertmenu">
                <ul>
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
      </table></td>
      <td width="2" background="images/index_11.png"><p><img src="images/index_11.png" width=2 height=600 alt=""></p></td>
      <td colspan=2 valign="top"><table width="542" border="0" align="center" class="txt2" bgcolor="">
          <tr>
            
            <td colspan="3"><div align="left"><B>Welcome to Control Panel</B></div>
           <td align="right"><strong>
           <?php if(isset($_SESSION['username']))
			{
			
			echo "HI---". $_SESSION['username']; 
			}
			
			 ?><TD>&nbsp;&nbsp;</TD><TD><A href="LOGOUT.PHP"><img src="CC.jpg" alt="A" width="30" height="20"></A></TD>
           </strong>
    </tr> </table>
      <br><br>
	
      <table width="730" border="0">
  <tr>
    <td width="160"><img src="nb.jpg" width="152" height="55">&nbsp;</td>
    <td width="160"><a href="addresult.php"><img src="ar.jpg" alt="A" width="152" height="44"></a></td>
    <td width="145"><a href="displayresult.php"><img src="sr.jpg" alt="A" width="152" height="44"></a></td>
    <td width="198"><a href="updateresult.php"></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><img src="MN.jpg" alt="A" width="58" height="83"></td>
    <td><a href="displayresult2.php"><img src="add.jpg" alt="A" width="145" height="50">&nbsp;</td>
    <td><img src="ADDD.jpg" alt="A" width="145" height="50">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="78">&nbsp;</td>
    <td><a href="studentADD.php"><img src="VVVV.jpg" alt="A" width="145" height="51">&nbsp;</td>
    <td><a href="studentdisply.php"><img src="AS.jpg" alt="A" width="145" height="51">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="64">&nbsp;</td>
    <td><a href="addteacher.php"><img src="AT.jpg" alt="A" width="145" height="51">&nbsp;</td>
    <td><a href="displayteacher.php"><img src="DT.jpg" alt="A" width="145" height="51">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="69">&nbsp;</td>
    <td><a href="addassignment.php"><img src="ADA.jpg" alt="A" width="145" height="51">&nbsp;</td>
    <td><a href="displayassignment.php"><img src="SHA.jpg" alt="A" width="145" height="51">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="65">&nbsp;</td>
    <td><a href="adddatesheet.php"><img src="ADDA.jpg" alt="A" width="145" height="51"></a>&nbsp;</td>
    <td><a href="displaydatesheet.php"><img src="DDS.jpg" alt="A" width="145" height="51"></a>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><A href="addholiday.php"><img src="HL.jpg" alt="A" width="145" height="51"></A>&nbsp;</td>
    <td><A href="displayholiday.php"><img src="sh.jpg" alt="A" width="145" height="51"></A>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

   
     
    
    
  <!-- End ImageReady Slices -->
  
</BODY>
</HTML>
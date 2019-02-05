<HTML>
<HEAD>
<TITLE>Welcome to Orintal Public School Mardan</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {
	font-size: 12px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</HEAD>
<BODY>
<table width="70%" align="center">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="80%" class="style2">
	<?php 
		  
		  
		  if($_SERVER['REQUEST_METHOD']=='POST')
		  {
			 require_once("connection.php");

		  $email1 =  mysql_real_escape_string($_POST['email1']);
		  $email2 =  mysql_real_escape_string($_POST['email2']);
		  
		  if($email1="Enter Friend Email Address"){
		  
		   echo "Enter Friend Email Address<br>";
		  
		  }
		  elseif(empty($email1)){
		  
		  echo "Enter Friend Email Address<br>";
	
		  		
				}
			
			
			
		
		  if($email2=" Enter Your Email Address"){
		  echo "Enter Your Email Address<br>";
		  
		  
		  }elseif(empty($email2)){
		  
		  echo "Enter Your Email Address<br>";
		 
		  		
				}
		
			
			
			
			if(!empty($email1))
				{
									
			$checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";
											if(!preg_match($checkemail, $email1))
											{
												echo "Invalid Friend E-mail Address , must be name@example.com!<br>
";
												exit();
															}
															
						}
															
															
															
															
									
			if(!empty($email2))
				{
									
			$checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";
											if(!preg_match($checkemail, $email2))
											{
												echo "Invalid  E-mail Address , must be name@example.com!<br>
";
												exit();
						}												}
															
															
		  
		  $from = "From: support@ops.edu.pk";
		  
		  	 
		  $subject = "Hi Look Up This Web Site of Oriental Public School";
		  
		  $detail="Oriental Public School is one the famous school in Mardan normally it obtains top 3 position in Mardan board and and is normally in top 10 position of Khyber PakhtunKhwa.<br>
<a href='www.ops.edu.pk'>Oriental Public School Mardan</a><br>
<br>
This Email Was Sent To by echo '$email2'";
		  
		  
		  
		  	if(mail($email1,$subject,$detail,$from))
				{
		
				echo "Email has Sent to "." ". $email2." ";
				exit();
										
										}else{
										
										echo"Error Occured While Sending Email";
										exit();
										
										}
		  
		  
		  
		  
		  
		  }
		 
		  ?></td>
  </tr>
</table>

<br>
<br>
<br>
<br>
</BODY>
</HTML>
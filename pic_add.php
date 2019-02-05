<?php
	$cap=$_POST['caption'];
	$file = $_FILES["fileupload"];
	$path = "design/";
	if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $path.$_FILES["fileupload"]["name"]))
	$insert="design/";		
 	$insert.=$_FILES["fileupload"]["name"];	
		
	@chmod($insert,0777);
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("job", $con);
	
	$sql = "insert into photos(caption,location) values('".$cap."','".$insert."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert(" Uploaded  Succesfully");window.location=\'add_gallery.php\';</script>';

?>
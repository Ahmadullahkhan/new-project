 <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<div id="main" class="box">
<?php 
include "Header.php";
?>
<?php 
include "menu.php";
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
     
<form action="../pic_add.php" method="post" enctype="multipart/form-data">
<input  type="text" name="caption" />
<input name="fileupload" type="file" id="fileupload" size="30">
<input type="submit" name="submit" value="Add" />
</form>
<br><br><br><br>
 <table border='0' cellpadding='0'>
 <tr>
 <th width="10%"></th>
 <th width="10%">Image</th>
 <th width="10%">Delete</th>
 </tr>
<?php
$qry = mysql_query("select * from photos");

//print_r($res);die;
while($res = mysql_fetch_array($qry)){
	$id = $res['id'];
	$cap = $res['caption'];
	$loc =  $res['location'];
	?>

 <tr>
<td width='10%'><?php echo $cap; ?></td>
<td width='10%'><?php echo $loc;?></td> 
<td width='10%'><a href="Deletepic.php?id=<?php echo $id;?>"><img src="design/critical.gif" width="20" height="15" /></a></td>
 </tr><?php }?>
 </table>

 
 </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>

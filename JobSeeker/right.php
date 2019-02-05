        <!-- Right column -->
<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>


<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3>Welcome</h3>

                <div id="about-me">
                			           <?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result);
//echo"<pre>";print_r($row);die;
?>
                    <p><img src="../<?php echo $row['logo']; ?>" width="170" height="120" style="border-radius:20px;"/>&nbsp;&nbsp;
                    
                    </p>
              </div> 
                <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3 >&nbsp;</h3>

              <br/>

      <hr class="noscreen" />

                <!-- Archive -->
                <h3>&nbsp;</h3>

                <br/>

            <hr class="noscreen" />

                <!-- Links -->
                <h3>&nbsp;</h3>
<br/>

<hr class="noscreen" />
          </div> <!-- /col-in -->
</div> 
<!-- /col -->

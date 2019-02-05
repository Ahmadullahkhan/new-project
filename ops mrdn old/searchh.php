 <table width="85%" align="center" border="1" cellpadding="0" cellspacing="0" >
          <tr>
            <td colspan="7"  class="newtitle"><div align="center" class="style6 style1">Student Result </div></td>
          </tr>
          <tr>
            <td width="15%" height="21" ><div align="center"><span class="style4">Student Rollnumber </span></div></td>
            <td width="17%" ><div align="center"><span class="style4">student Name </span></div></td>
            <td width="16%" ><div align="center"><span class="style4">Father Name </span></div></td>
			<td width="16%" ><div align="center"><span class="style4">Dept Name </span></div></td>
            <td width="14%" ><div align="center"><span class="style4">Obtain Marks </span></div></td>
            <td width="14%" ><div align="center"><span class="style4">Total Marks </span></div></td>
            <td width="24%" ><div align="center"><span class="style4">G.P.A</span></div></td>
          </tr>
          <?php  
if($_SERVER['REQUEST_METHOD']=='POST')
{
$roll=$_GET['roll'];
$class=$_GET['class'];
if(empty($roll) && empty($class))
{
echo"insert in all field";
}
else
{
		  $sql = "SELECT * FROM attendance where roll='$roll'";
		  
		  $res = mysql_query($sql) or die ("CAn not Execute Ur Query".mysql_error());
//echo($res);
				while($row = mysql_fetch_array($res))
				{
				
				$id=$row['id'];

				$name = $row['name'];
				
				$roll  = $row['roll'];
				
				$class = $row['class'];
				$date = $row['date'];
				
				$status = $row['status'];
		  
		  					?>
		 <tr class="txt2">
            <td ><?php echo $name; ?></td>
            <td ><?php echo $roll; ?></td>
            <td ><?php echo $class;  ?></td>
			 <td ><?php echo $date;  ?></td>
            <td ><?php echo $status; ?></td>
      </tr></table>
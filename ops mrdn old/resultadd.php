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

                    <?php 


if($_SERVER['REQUEST_METHOD']=='POST')
{

$name = mysql_real_escape_string($_POST['name']);
$fname = mysql_real_escape_string($_POST['fname']);
$roll = mysql_real_escape_string($_POST['roll']);
$class = mysql_real_escape_string($_POST['class']);
$year = mysql_real_escape_string($_POST['year']);
$om = mysql_real_escape_string($_POST['om']);
$tm= mysql_real_escape_string($_POST['tm']);
$per= mysql_real_escape_string($_POST['per']);
$gr= mysql_real_escape_string($_POST['gr']);
$rem= mysql_real_escape_string($_POST['rem']);


	
/*	$errors = array(); 

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
					$flage="";	
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
											
	

	
//  not empty file code
							
				
//}// end of error else

				//}// end of post

?>
                  </div>
                    </font></td>
                </tr>
				<table align="center">
				
                <tr>
                  <td width="28%" class="txt2"><div align="center">Student  Name </div></td>
                  <td width="72%" class="txt2"><input name="name" type="text" id="name" size="30"/></td>
                </tr>
                <tr>
                  <td valign="top" class="txt2"><div align="center">Father name </div></td>
                  <td class="txt2"><input name="fname" type="text" id="class" size="30"/></td>
                </tr>
                <tr>
                  <td class="txt2"><div align="center">Roll No </div></td>
                  <td class="txt2"><input name="roll" type="text" id="obtmarks" size="30" />
                    &nbsp;</td>
                </tr>
                <tr>
                  <td class="txt2"><div align="center">Class</div></td>
                  <td class="txt2"><select name="class" id="class">
                      <option value="8th">8th</option>
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
                  <td valign="top" class="txt2"><div align="center">Obtain Marks </div></td>
                  <td class="txt2"><input name="om" type="text" id="class" size="30"/></td>
                </tr>
				<tr>
                  <td valign="top" class="txt2"><div align="center">Total Marks </div></td>
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
                  <td class="txt2"><input name="" type="text" id="class" size="30"/></td>
                </tr>
                
                <tr>
                  <td class="txt2">&nbsp;</td>
                  <td class="txt2"><input name="Submit" type="submit" class="but" value="Add Student Results" />
                    &nbsp;&nbsp;&nbsp;
                    <input name="Submit2" type="reset" class="but" value="Clear Fields" /></form></td></tr>
					</table>
            
                
    
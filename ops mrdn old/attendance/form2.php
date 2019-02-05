<table width="1000" bgcolor="#FF6600"><tr bgcolor="#FF6600"><td bgcolor="">
<img src="images/nb.jpg" width="200" height="200" />
</td><td align="center"><h1><font color="#FFFFFF"><marquee direction="down">@ E-School Management System @</marquee></font></h1></td></tr></table>
<table width="1000"><tr bgcolor="#0000FF">
  <td align="center"><font color="#FFFFFF" size="+2">ADD ATTENDANCE </font></td>
</tr></table>
<table  bgcolor="#999999" align="center" width="400" height="300">
  <tr>
    <td width="138" align="center"><form method="post" action="insert2.php">
      <table align="center">
    </form></td>
  </tr>
  <tr>
    <td><b ><font color="#FFFFFF"> </font> </b> Name : </td>
    <td width="250"><input type="text" name="name" placeholder="Enter your name" />
        <br />
        <br /></td>
  </tr>
 
  <tr><td>
  <b><font color="#FFFFFF"></font> </b>Roll no :</td><td>
  <input type="text" name="roll" placeholder="Roll No" />
  <br />
  <br /></td></tr>
  <tr><td>
  Class:</td><td>
  <select name="class" id="class">
    <option value="8th" selected="selected">8th</option>
    <option value="9th">9th</option>
    <option value="10th">10th</option>
  </select>
  <br />
  <br /></td></tr>
  
  <tr>
    <td>
  <b><font color="#FFFFFF"></font> </b>Date:</td>
    <td>
  <input type="text" name="date"  placeholder="Obtain Marks"/>
  <br />
  <br /></td></tr>
  <tr>
    <td>
  <b><font color="#FFFFFF"></font> </b>Status</td>
    <td>
  <input type="text" name="status"  placeholder="Total Marks"/>
  <br />
  <br /></td></tr>
  
  <tr><td>
  <input name="submit" type="submit" value="Add Record" /></td></tr></table>

<br />
<br />
<a href="output.php">show</a>
<a href="controlsite.php">show</a>
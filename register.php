<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from staff");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	//$sid="STF00".$id;
$qry=mysql_query("insert into staff(id,name,gender,address,pnumber,uname,password)value('$id','$name','$gender','$address','$pnumber','$uname','$password')");
if($qry)
{
?>
<script language="javascript">
	alert("Registered Successfully..");
	window.location.href="register.php";
	</script>
		<?php
}
else
{
?>
<script language="javascript">
	alert("Registered Unsuccessfully..");
	window.location.href="register.php";
	</script>
<?php
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style6 {	color: #0099FF;
	font-weight: bold;
}
.style8 {font-size: 14px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="100%" height="805" border="1">
  <tr>
    <td height="799" valign="top"><table width="100%" border="1">
      <tr>
        <td height="102" bgcolor="#33CC99"><p class="style1"><strong>BOOK  SHOPPING </strong></p>
            <table width="70%" border="0" align="center">
              <tr>
                <td><div align="center"><strong><a href="index.php">Home</a></strong></div></td>
                <td><div align="center"><strong><a href="admin.php">Admin</a></strong></div></td>
                <td><div align="center"><strong><a href="login.php">User Login </a></strong></div></td>
                <td><div align="center"><strong><a href="register.php">Register</a></strong></div></td>
                <td><div align="center"><strong><a href="#">About Us</a></strong></div></td>
              </tr>
          </table></td>
      </tr>
    </table>
    <form id="form1" name="form1" method="post" action="">
        <p>&nbsp;</p>
        <table width="100%" border="0">
          <tr>
            <td colspan="2"><strong>BOOK  SHOPPING APPLICATION:</strong></td>
          </tr>
          <tr>
            <td width="28%" height="323"><img src="download.jpg" alt="g" width="219" height="230" /></td>
            <td width="72%" valign="middle"><table width="50%" border="0">
              <tr>
                <td width="8%">&nbsp;</td>
                <td width="29%">&nbsp;</td>
                <td width="63%">&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2"><div align="center" class="style6">User  Register </div></td>
                </tr>
              <tr>
                <td height="40">&nbsp;</td>
                <td><span class="style8"> Name </span></td>
                <td><label>
                  <input name="name" type="text" id="name" />
                </label></td>
              </tr>
              <tr>
                <td height="40">&nbsp;</td>
                <td><span class="style8">Gender</span></td>
                <td><label>
                  <input name="gender" type="radio" value="Male" />
                  Male
  <input name="gender" type="radio" value="Female" />
                  Female</label></td>
              </tr>
              <tr>
                <td height="40">&nbsp;</td>
                <td><strong>Address</strong></td>
                <td><label>
                  <textarea name="address" id="address"></textarea>
                </label></td>
              </tr>
              <tr>
                <td height="35">&nbsp;</td>
                <td><strong>Phone Number </strong></td>
                <td><label>
                  <input name="pnumber" type="text" id="pnumber" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Email ID </td>
                <td><input name="pnumber2" type="text" id="pnumber2" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><strong>User Name </strong></td>
                <td><label>
                  <input name="uname" type="text" id="uname" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><strong>Password</strong></td>
                <td><input name="password" type="password" id="password" /></td>
              </tr>
              <tr>
                <td height="37">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="36">&nbsp;</td>
                <td>&nbsp;</td>
                <td><input name="btn" type="submit" id="btn" value="Register" />
                    <a href="register.php">
                    <input type="reset" name="Reset" value="Reset" />
                    <label></label>
                  </a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
            </table></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>      
      <p>&nbsp;</p>
    </td>
  </tr>
</table>
</body>
</html>

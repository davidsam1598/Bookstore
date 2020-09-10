<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$qry=mysql_query("select * from admin where uname='admin' && password='admin'");
$num=mysql_num_rows($qry);
if($num==1)
{
header("location:adminhome.php");
}
else
{
echo "<script>alert('Username And Password is invalid');</script>";
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
.style3 {font-size: 18px}
.style4 {font-size: 24px}
.style6 {color: #0099FF;
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
            <td colspan="2"><p align="left"><strong>BOOK  SHOPPING APPLICATION:</strong></p></td>
          </tr>
          <tr>
            <td width="28%" height="323"><img src="download.jpg" alt="g" width="219" height="230" /></td>
            <td width="72%" valign="middle"><div align="justify" class="style3">
              <div align="justify">
                <table width="50%" border="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="12%">&nbsp;</td>
                    <td width="19%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><div align="center" class="style6">Admin Login </div></td>
                  </tr>
                  <tr>
                    <td height="40">&nbsp;</td>
                    <td><span class="style8">User Name </span></td>
                    <td><label>
                      <input name="uname" type="text" id="uname" />
                    </label></td>
                  </tr>
                  <tr>
                    <td height="35">&nbsp;</td>
                    <td><span class="style8">Password</span></td>
                    <td><input name="password" type="password" id="password" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><label>
                      <input name="btn" type="submit" id="btn" value="Login" />
                      <input type="reset" name="Reset" value="Cancel" />
                    </label></td>
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
                </table>
              </div>
            </div></td>
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

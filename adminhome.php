<?php
include("dbconnect.php");
session_start();
extract($_POST);
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
                <td><div align="center"><strong><a href="addbook.php">Add Book </a></strong></div></td>
                <td><div align="center"><strong><a href="viewbook.php">View Book  </a></strong></div></td>
                <td><div align="center"><strong><a href="orderview.php">Order Details </a></strong></div></td>
                <td><div align="center"><strong><a href="index.php">Logout</a></strong></div></td>
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
            <td width="72%" valign="top"><p align="center"><strong>Register User Details </strong></p>
              <table width="100%" border="1">

              <tr>
                <th height="38" scope="col">Sl.No</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number </th>
                <th scope="col">Email</th>
              </tr>
			  <?php
			  $i=1;
			  $qry=mysql_query("select * from register");
			  while($row=mysql_fetch_array($qry))
			  {
			  ?>
              <tr>
                <td height="41"><div align="center"><?php echo $i;?></div></td>
                <td><div align="center"><?php echo $row['name'];?></div></td>
                <td><div align="center"><?php echo $row['gender'];?></div></td>
                <td><div align="center"><?php echo $row['address'];?></div></td>
                <td><div align="center"><?php echo $row['pnumber'];?></div></td>
                <td><div align="center"><?php echo $row['email'];?></div></td>
              </tr>
              <?php
			  $i++;
			  }
			  ?>
			  <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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

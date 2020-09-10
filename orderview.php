<?php	

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
            <td width="72%" valign="top"><p align="center">&nbsp;</p>
              <table width="620" border="1" align="right" cellpadding="5">
                <tr>
                  <th width="137" scope="col">Image</th>
                  <th width="108" scope="col">Buyer</th>
                  <th width="82" scope="col">Book</th>
                  <th width="77" scope="col">Price</th>
                  <th width="66" scope="col">Quantity</th>
                  <th width="62" scope="col">Delivery</th>
                </tr>
                <?php
	while($r1=mysql_fetch_array($q1))
	{
	$q3=mysql_query("select * from book where id=".$r1['bid']."");
	$r3=mysql_fetch_array($q3);
	
	?>
                <tr>
                  <td align="left"><div align="center"><img src="book/<?php echo $r3['pimage']; ?>" alt="4" width="80" height="80" /></div></td>
                  <td align="left"><?php echo $r1['uname']; ?></td>
                  <td align="left"><?php echo $r3['book']; ?></td>
                  <td align="left"><?php echo $r3['price']; ?></td>
                  <td align="left"><?php echo $r3['quantity']; ?></td>
                  <td align="left"><?php
	  if($r1['status']=="1")
	  {
	  echo '<a href="order.php?act=ok&did='.$r3['id'].'">Click to Deliver</a>';
	  }
	  else if($r1['status']=="2")
	  {
	  echo "Delivered";
	  }
	  
	  ?></td>
                </tr>
                <?php
	}
	?>
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

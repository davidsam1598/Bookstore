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
              <table width="713" border="1" align="right">
                <tr>
                  <th width="47" scope="col">Sno</th>
                  <th width="62" scope="col">Category</th>
                  <th width="62" scope="col">Book</th>
                  <th width="78" scope="col">Author</th>
                  <th width="59" scope="col">Price</th>
                  <th width="95" scope="col">Quantity</th>
                  <th width="119" scope="col">Image</th>
                  <th width="139" scope="col">Action</th>
                </tr>
                <?php
	$i=0;
	while($row=mysql_fetch_array($qry))
	{
	$i++;
	?>
                <tr>
                  <td><div align="center"><?php echo $i; ?></div></td>
                  <td><div align="center"><?php echo $row['cat']; ?></div></td>
                  <td><div align="center"><?php echo $row['book']; ?></div></td>
                  <td><div align="center"><?php echo $row['author']; ?></div></td>
                  <td><div align="center"><?php echo $row['price']; ?></div></td>
                  <td><div align="center"><?php echo $row['quantity']; ?></div></td>
                  <td><div align="center"><img src="book/<?php echo $row['pimage']; ?>" alt="1" width="80" height="80" /></div></td>
                  <td><div align="center"><a href="edit_book.php?bid=<?php echo $row['id']; ?>">Edit</a> / <a href="view_book.php?act=del&amp;did=<?php echo $_REQUEST['did']; ?>">Delete</a> </div></td>
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

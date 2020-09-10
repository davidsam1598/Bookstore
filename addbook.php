<?php
include("dbconnect.php");
session_start();
extract($_POST);
$max_qry = mysql_query("select max(id) from book");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from book");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	//$sid="STF00".$id;
	
	$imgpath=$_FILES['file']['name'];
	  $errors= array();
      $fname = $_FILES['file']['name'];
// $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['file']['tmp_name'];
     // $file_type=$_FILES['image']['type'];

  move_uploaded_file($_FILES['file']['tmp_name'],"./".$fname);
$qry=mysql_query("insert into book value('$id','$category','$bname','$author','$price','$quantity','$fname','$description')");
if($qry)
{
?>
<script language="javascript">
	alert("Book Add Successfully..");
	window.location.href="addbook.php";
	</script>
		<?php
}
else
{
?>
<script language="javascript">
	alert("Book Add Unsuccessfully..");
	window.location.href="addbook.php";
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
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <p>&nbsp;</p>
        <table width="100%" border="0">
          <tr>
            <td colspan="2"><p align="left"><strong>BOOK  SHOPPING APPLICATION:</strong></p></td>
          </tr>
          <tr>
            <td width="28%" height="323"><img src="download.jpg" alt="g" width="219" height="230" /></td>
            <td width="72%" valign="top"><p align="center">&nbsp;</p>
              <table width="371" height="254" border="0" align="center" cellpadding="5">
                <tr>
                  <th colspan="2" class="txt" scope="col">Add Books Details </th>
                </tr>
                <tr>
                  <td width="114">Category Name </td>
                  <td width="231"><label>
                  <input name="category" type="text" id="category" />
                  </label></td>
                </tr>
                <tr>
                  <td>Book Name </td>
                  <td><input name="bname" type="text" id="bname" /></td>
                </tr>
                <tr>
                  <td>Author</td>
                  <td><input type="text" name="author" /></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td><input type="text" name="price" /></td>
                </tr>
                <tr>
                  <td>Quantity</td>
                  <td><input name="quantity" type="text" id="quantity" /></td>
                </tr>
                <tr>
                  <td>Image</td>
                  <td><input type="file" name="file" /></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td><textarea name="description" id="description"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="btn" value="Submit" onclick="return validate()" /></td>
                </tr>
                <tr>
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

<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uname=$_SESSION['uname'];
$bid=$_REQUEST['id'];
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from booking");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	//$sid="STF00".$id;
$qry=mysql_query("insert into booking value('$id','$uname','$bid','$quantity')");
if($qry)
{
?>
<script language="javascript">
	alert("Order Successfully..");
	window.location.href="view.php";
	</script>
		<?php
}
else
{
?>
<script language="javascript">
	alert("Book Order Unsuccessfully..");
	window.location.href="search.php";
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
.style3 {font-size: 18px}
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
                <td><div align="center"><strong><a href="home.php">Home</a></strong></div></td>
                <td><div align="center"><strong><a href="search.php">Search</a></strong></div></td>
                <td><div align="center"><strong><a href="view.php">View </a></strong></div></td>
                <td><div align="center"><strong><a href="index.php">Logout</a></strong></div></td>
                <td><div align="center"><strong><a href="#"></a></strong></div></td>
              </tr>
          </table></td>
      </tr>
    </table>
    <form id="form1" name="form1" method="post" action="">
        <p>&nbsp;</p>
		<?php
		$qry=mysql_query("select * from book where id='$bid'");
		$roew=mysql_fetch_array($qry);
		?>
        <table width="100%" border="0">
          <tr>
            <td colspan="2"><p align="left"><strong>BOOK  SHOPPING APPLICATION:</strong></p></td>
          </tr>
          <tr>
            <td width="28%" height="323"><img src="download.jpg" alt="g" width="219" height="230" /></td>
            <td width="72%" valign="middle"><div align="justify" class="style3">
              <div align="justify">
                <table width="70%" border="0" align="center">
                  <tr>
                    <th width="27%" scope="col">&nbsp;</th>
                    <th colspan="2" scope="col">Book Details </th>
                    </tr>
                  <tr>
                    <td rowspan="7"><img src="./<?php echo $roew['fname'];?>" width="150" height="150" /></td>
                    <td width="19%" height="28">Category</td>
                    <td width="54%">:<?php echo $roew['category'];?></td>
                  </tr>
                  <tr>
                    <td>Book Name </td>
                    <td>:<?php echo $roew['name'];?></td>
                  </tr>
                  <tr>
                    <td height="33">Author</td>
                    <td>:<?php echo $roew['author'];?></td>
                  </tr>
                  <tr>
                    <td height="33">Price</td>
                    <td>:<?php echo $roew['price'];?></td>
                  </tr>
                  <tr>
                    <td height="31">Details</td>
                    <td>:<?php echo $roew['description'];?></td>
                  </tr>
                  <tr>
                    <td height="31">Quantity</td>
                    <td><input name="quantity" type="text" id="quantity" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input name="btn" type="submit" id="btn" value="Submit" />
                      <input type="reset" name="Submit2" value="Reset" /></td>
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

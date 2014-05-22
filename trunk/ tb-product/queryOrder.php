<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Order</title>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>

<body>

<?php
$con = mysql_connect("localhost","rbangcom_taobao","St568507123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbangcom_taobao", $con);

$program_char = "gbk"; 
mysql_set_charset($program_char,$con);
$result = mysql_query("SELECT * FROM  `tb_orders` LIMIT 0 , 30");

$i=0;
 echo "<h4>订单：</h4> <table border='1'><tr><td>orderDate</td><td>TbOrderNo</td><td>Buynick</td>
 <td>BuyTbOrderNo</td><td>BuyAccount</td><td>TrackingCmp</td><td>TrackingNumber</td><td>SaleAmount</td><td>BuyAmount</td></tr>";
while($row = mysql_fetch_array($result))
  {
 	$i=$i+1;
 
  echo "<tr> <td>" .$row['orderDate'] . "</td>";
  echo "<td>" .$row['TbOrderNo'] . "</td>";
  echo "<td>" .$row['Buynick'] . "</td>";
  echo "<td>" .$row['BuyTbOrderNo'] . "</td>";
  echo "<td>" .$row['BuyAccount'] . "</td>";
  echo "<td>" .$row['TrackingCmp'] . "</td>";
  echo "<td>" .$row['TrackingNumber'] . "</td>";
  echo "<td>" .$row['SaleAmount'] . "</td>";
  echo "<td>" .$row['BuyAmount'] . "</td>";
  echo "</tr>";
  }
  
 echo "</table>";


mysql_close($con);
?>

</body>
</html>

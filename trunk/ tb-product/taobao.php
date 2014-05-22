<?php
$con = mysql_connect("localhost","rbangcom_taobao","St568507123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbangcom_taobao", $con);

$program_char = "gbk"; 
mysql_set_charset($program_char,$con);
$result = mysql_query("SELECT * FROM  `tb_products` LIMIT 0 , 30");

$i=0;
while($row = mysql_fetch_array($result))
  {
 	$i=$i+1;
  echo "<div id='pro_" . $i ."' style='height:300px;float:left;margin-right:15px;margin-top:25px;'>";
  echo "<div class='imageBox'>";
  echo "<a href='"  .$row['ProductUrl'] . "'>";
  echo "<img src='" . $row['ProductImg'] . "' alt='' with='250' height='250'>";
  echo "</img></a>";
  echo "</div>";
  echo "<div class='desc'>";
  echo "<h3 style='margin:0px;'>" .substr($row['ProductName'],0,30)."</h3>";	
  echo "<p style='margin:0px;'>Price:" .$row['ProductDiscount']." Quantity:".$row['ProductQuantity']."</p>";	
  echo "<p style='margin:0px;'>Delivery:" .$row['ProductDelivery']." Location:".$row['ProductLocation']."</p>";	
  echo "</div>";
  echo "</div>";
  }


mysql_close($con);
?>
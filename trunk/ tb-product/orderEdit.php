<?php
$con = mysql_connect ( "localhost", "rbangcom_taobao", "St568507123" );
if (! $con) 
{
	die ( 'Could not connect: ' . mysql_error () );
}

mysql_select_db ( "rbangcom_taobao", $con );

$program_char = "gbk";

mysql_set_charset ( $program_char, $con );

$sql = "INSERT INTO `tb_orders`( `orderDate`, `TbOrderNo`, `Buynick`, `BuyTbOrderNo`,
 `BuyAccount`, `TrackingNumber`, `TrackingCmp`, `SaleAmount`, `BuyAmount`) VALUES 
('$_POST[orderDate]','$_POST[TbOrderNo]','$_POST[Buynick]','$_POST[BuyTbOrderNo]',
'$_POST[BuyAccount]','$_POST[TrackingNumber]','$_POST[TrackingCmp]','$_POST[SaleAmount]','$_POST[BuyAmount]')";

if (! mysql_query ( $sql, $con )) {
	die ( 'Error: ' . mysql_error () );
}
echo "1 record added";
echo "<a href='http://www.3rbang.com/tb/order.php' >¼ÌÐøÌí¼Ó</a>";
mysql_close ( $con )?>
<?php
$con = mysql_connect ( "localhost", "rbangcom_taobao", "St568507123" );
if (! $con) 
{
	die ( 'Could not connect: ' . mysql_error () );
}

mysql_select_db ( "rbangcom_taobao", $con );

$program_char = "gbk";

mysql_set_charset ( $program_char, $con );

$sql = "INSERT INTO `tb_products`(`ProductCode`, `ProductName`, `ProductQuantity`, `ProductCost`, 
`ProductRetail`, `ProductDiscount`, `ProductDescription`, `ProductUrl`, `ProductImg`, `ProductCreateTime`, 
`ProductDelivery`, `ProductLocation`, `ProductStatus`) VALUES ('$_POST[ProductCode]','$_POST[ProductName]',$_POST[ProductQuantity],
$_POST[ProductCost],$_POST[ProductRetail],$_POST[ProductDiscount],'$_POST[ProductDescription]','$_POST[ProductUrl]',
'$_POST[ProductImg]',NOW(),'$_POST[ProductDelivery]','$_POST[ProductLocation]',1)";

if (! mysql_query ( $sql, $con )) {
	die ( 'Error: ' . mysql_error () );
}
echo "1 record added";

mysql_close ( $con )?>
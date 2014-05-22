<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>订单录入</title>
</head>

<body>

<form action=orderEdit.php method="post">
orderDate: <input type="text" name="orderDate" />
TbOrderNo: <input type="text" name="TbOrderNo" /></br>
Buynick: <input type="text" name="Buynick" />
BuyTbOrderNo: <input type="text" name="BuyTbOrderNo" />
BuyAccount: <select  name="BuyAccount" >
  <option value ="shutian201311">shutian201311</option>
  <option value ="taotao110911">taotao110911</option>
  <option value ="ganyin201311">ganyin201311</option>
  <option value="silver201311">silver201311</option>
  <option value="shkdjhj">shkdjhj</option>
</select></br>
TrackingCmp: <select  name="TrackingCmp" >
  <option value ="中通">中通</option>
  <option value ="申通">申通</option>
  <option value="韵达">韵达</option>
  <option value="圆通">圆通</option>
</select>
TrackingNumber: <input type="text" name="TrackingNumber" />
SaleAmount: <input type="text" name="SaleAmount" />		
BuyAmount: <input type="text" name="BuyAmount" /></br>
<input type="submit" width="200px" height="200px" />
</form>

</body>
</html>

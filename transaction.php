 <!DOCTYPE html>
<html>
<head>
<title>This is Home page</title>
</head>
<body>
<?php	
 if(isset($_POST["VENDORNAME"])){
	 echo $_POST["VENDORNAME"];
 }
if(isset($_POST["PRODUCTNAME"])){
	 echo $_POST["PRODUCTNAME"];
 }
 if(isset($_POST["QUANTITY"])){
	echo $_POST["QUANTITY"];
 }
 if(isset($_POST["RECEIVINGDATE"])){
	echo $_POST["RECEIVINGDATE"];
 } 
 ?>
<form method="post" action="hometransaction.php">
<table>
<tr>
	<td>VENDORNAME</td>
	<td><input type="txt" name="VENDORNAME" id="VENDORNAME"></td>
	</tr>
<tr>
<td><h style="color:black";>PRODUCTNAME</td></h>
<td><Select name="PRODUCTNAME" size="1">
  <option value="Select">Select</option>}
   <option value="upendra">upendra</option>
   <option value="PT">PT</option>
   <option value="SIM CARD">SIM CARD</option>
   </Select></td>
</tr>
<tr>
	<td>QUANTITY</td>
	<td><input type="txt" name="QUANTITY" id="QUANTITY"></td>
	</tr>
	<tr>
	<td>RECEIVINGDATE</td>
	<td><input name="date" type="date"/></td>
    </tr>
<tr>
<td></td>
<td><input type="submit" value="submit"></td>
</tr>

</table>
</Form>
</body>
</html>

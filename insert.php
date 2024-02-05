<?php
include("config.php");
if (isset($_POST['submit'])) {
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$amount=$_POST['amount'];
$sql = "INSERT INTO product_details(product_id,product_name,customer_name,address,amount)VALUES('$product_id','$product_name','$customer_name','$address','$amount')";
$result = $conn->query($sql);
if($result==TRUE){
	echo "New record created successfully.";
}else{
	echo "Error:".$sql."<br>". $conn->error;
}
$conn->close();
}
?>


<!DOCTYPE html>
<head>
<body>
<h1 style="text-align: center; font-family:Californian FB; color:#E11584"><b>Product Details</b></h1>

<body >	
      <div align = "center" >
         <div style = "width:400px; border: dashed 2px #333333; " align = "center">
            <div style = "background-color:#E11584; color:#ffe2e6; padding:3px;"><b></b></div>				
            <div style = "margin:30px">               
               <form action = "" method = "post">
Product id:<br>
<input type="number" name="product_id"><br>
Product name:<br>
<input type="text" name="product_name"><br>
Customer name:<br>
<input type="text" name="customer_name"><br>
Address:<br>
<input type="text" name="address"><br>
Amount:<br>
<input type="number" name="amount"><br>
</select><br><br>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>
<a href="view.php">View Records</a>
</body>
</head>
</html>

 
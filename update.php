<?php
include "config.php";
if(isset($_POST['update'])){
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$amount=$_POST['amount'];
$sql= "update product_details SET product_name='$product_name',customer_name='$customer_name',address='$address',amount='$amount' WHERE product_id='$product_id'";
$result=$conn->query($sql);
if($result==TRUE){
		echo "Record updates successfully";
	}else{
		echo "Error:".$sql."<br>". $conn->error;
	}
}
if(isset($_GET['product_id'])){
	$product_id=$_GET['product_id'];
	$sql= "select * from product_details where product_id='$product_id'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
		$product_id=$row['product_id'];
		$product_name=$row['product_name'];
		$customer_name=$row['customer_name'];
		$address=$row['address'];
        $amount=$row['amount'];
		}
		}
}
?>
<html>
<body>
<h2>User update Form</h2>
<form action="" method="POST">
<fieldset>
<legend>Personal information:</legend>
Product id:<br>
<input type="hidden" name="product_id" value="<?php echo $product_id; ?>"><br>
Product name:<br>
<input type="text" name="product_name" value="<?php {echo $product_name;} ?>"><br>
Customer name:<br>
<input type="text" name="customer_name" value="<?php {echo $customer_name;} ?>"><br>
Address:<br>
<input type="text" name="address" value="<?php {echo $address;} ?>"><br>
Amount:<br>
<input type="number" name="amount" value="<?php {echo $amount;} ?>"><br>
<input type="submit" name="update" value="Update">
</fieldset>
</form>
<a href="view.php">View Records</a>
</body>
</html>



	
		
	
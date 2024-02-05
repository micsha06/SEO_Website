<?php
include "config.php";
if(isset($_GET['product_id'])){
	$product_id=$_GET['product_id'];
	$sql="delete from product_details where product_id='$product_id'";
	$result=$conn->query($sql);
	if($result==TRUE){
		echo "Record deleted successfully";
	}else{
		echo "Error:".$sql."<br>". $conn->error;
	}
}
?>
<?php
include "config.php";
$sql = "select * from Product_details";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>View page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<h2>Product Details</h2>
<table class="table">
<head>
<tr>
<th>ID</th>
<th>Product name</th>
<th>Customer name</th>
<th>Address</th>
<th>Amount</th>
<th>Action</th>
</tr>

<?php
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $row['product_id'];?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['customer_name'];?></td>
<td><?php echo $row['address'];?></td>	
<td><?php echo $row['amount'];?></td>
<td> <a class="btn btn-info" href="update.php?product_id=<?php echo $row['product_id'];?>">Edit</a>&nbsp
<a class="btn btn-danger" href="delete.php?product_id=<?php echo $row['product_id'];?>">Delete</a></td>
</tr>
	<?php }
	}
	?>
</table>
</div>
<center><a href="insert.php">Insert Records</a></center>

</body>
</html>



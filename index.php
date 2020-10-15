<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
require 'connect.php';
$sql = 'SELECT * FROM product';
$result = mysqli_query($con, $sql);
 ?>
<h2> Silakan pilih item anda: </h2>
 <table id="t01">
 <tr>
 	<th>Id</th>
 	<th>Nama</th>
 	<th>harga</th>
 	<th>kualitas (in stock)</th>
 	<th>beli</th>
 </tr>
 	<?php while($product = mysqli_fetch_object($result)) { ?> 
	<tr>
		<td> <?php echo $product->id; ?> </td>
		<td> <?php echo $product->name; ?> </td>
		<td> <?php echo $product->price; ?> </td>
		<td> <?php echo $product->quantity; ?> </td>
		<td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a> </td>
	</tr>
	<?php } ?>
 </table>
</body>

 </html>
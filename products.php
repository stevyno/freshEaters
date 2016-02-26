<?
//products.php
	$stmt = $db->query("SELECT id, name FROM product ORDER BY date");
	?>
	<li><a href="addProduct_form.php">ADD product</a></li>
	<?
	while($product = $stmt->fetchObject()){
		?>
		<li><?echo $product->name;?> <a href="editProduct_form.php?id=1">edit</a><a href="deleteProduct.php?id=1">delete</a></li>
		<?
	}
	
?>
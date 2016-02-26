<?
//addProduct_form.php
	include("header.php");
?>
	<form action="addProduct.php" method="post">
		<label>
			Name
			<input type="text" name="name">
		</label>
		<label>
			Unit
			<input type="text" name="unit">
		</label>
		<label>
			Price
			<input type="text" name="price">
		</label>
		<label>
			Image
			<input type="text" name="unit">
		</label>
		<label>
			Description
			<textarea id="description" rows="10" cols="70"></textarea>
		</label>
		<label>
			Category
			<select name="category">
			<option>Vegetable</option>>
		</label>
		<label>
			Sub-Category
			<select name="subcategory">
			<option>Carrots</option>>
		</label>
 
  
  farmer, date
	</form>
<?
	
?>
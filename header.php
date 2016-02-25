<?
	include("db.php");
	if(!isset($_SESSION['id'])){
?>

<form action="login.php" method="post">
	<label>
		Log In:
		<input type="text" name="log_in">
	</label>
	<label>
		Password:
		<input type="password" name="password">
	</label>
	<input type="submit" value="Log In">
</form>

<? } else {
?>
		<a href="logout.php">Log Out</a>
	
	<?php 
		if (hasAccess(2)){ 	
	?>
			 <a href = addProduct.php>Add product</a>
	
	<?php 
		}
	?>

<?
}
?>
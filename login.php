<?
	include("db.php");
	include ("checked_logged_in.php");
	$log_in = $_POST['log_in'];
	$password = $_POST['password'];
	
	$stmt = $db->prepare('SELECT * FROM user WHERE log_in=:log_in AND password=:password');
	$stmt->bindValue(':log_in', $log_in);
	$stmt->bindValue(':password', $password);	
	$stmt->execute();
	
	if ($user = $stmt->fetchObject()){
		$_SESSION['user_type']=$user->user_type;
		$_SESSION['log_in']=$user->log_in;
		$_SESSION['id']=$user->id;
		header("Location: index.php");		
	} else {
		die("Do Pice!");
	}
?>
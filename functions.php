<?php
function hasAccess($requiredlevel){
	if(!isset($_SESSION['user_type'])){
		return false;
	}
	if($_SESSION['user_type']>=$requiredlevel){
		return true;
	}
	return false; 
}
?>
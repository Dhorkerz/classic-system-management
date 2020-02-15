<?php
session_start();
if(isset($_COOKIE['user'])){
	//unset cookie by using a -ve tie value to backdate or use function unset cookie()
 	setcookie('user',$_SESSION['user'],time() -60);
 	unset($_COOKIE['user']);
 	//unset session
	$_SESSION['user']=array();
	//destroy session
	SESSION_destroy();
	header('location:login.php?msg=You are now logged out');
}
?>
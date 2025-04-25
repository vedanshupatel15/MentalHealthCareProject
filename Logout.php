<?php
	session_start();
	if(isset($_SESSION['patient'])){
		unset($_SESSION['patient']);
	}
	if(isset($_SESSION['doctor'])){
		unset($_SESSION['doctor']);
	}
	echo "<script>window.location='index.php';</script>";
?>
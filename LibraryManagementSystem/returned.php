<?php
	 include 'config.php';
	
	if($_GET['bookId']){
		$bookId = $_GET['bookId'];
		
		$conn->query("DELETE FROM `borrow` WHERE `bookId` = $bookId");
		header("location: borrowedbooks.php");
	}	
?>
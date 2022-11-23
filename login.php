<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=newseful;charset=UTF8", "newseful", "wWVeEeWZWYL##3EmWsZe!3M3");
		if ($pdo) echo "connection to database was successful";
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
?>

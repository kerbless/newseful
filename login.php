<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=newseful", "newseful", "wWVeEeWZWYL##3EmWsZe!3M3");
		if ($pdo) echo "connection to database successful";
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}

	echo "<br>checking user details";

	$sql = $pdo->prepare("SELECT * FROM login WHERE username = ? and password = ?");
	echo "<br>prepared SQL query, r_printing sql object:<br>";
	print_r($sql);

	$sql->execute([$_POST["user"], $_POST["password"]]);
	echo "<br>executed SQL query, r_printing sql object:<br>";
	print_r($sql);

	$output = $sql->fetchAll();
	echo "<br>fetched all SQL query, r_printing returned object:<br>";
	print_r($output);
	
	echo "<br>trying to parse output";
	echo "<br>1. first foreach (key: value):";
	foreach($output as $key => $value) {
		echo "<br>$key: $value";
		echo "<br>2. second foreach (key: value):";
		foreach($value as $key2 => $value2) {
			echo "<br>$key2: $value2";
		}
	}

	echo "<br>trying to parse output (better)";
	$username = $output[0]["username"];
	$password = $output[0]["password"];
	echo "<br>Username: $username";
	echo "<br>Password: $password";

	echo "<br>so...";
	if ($_POST["password"] == $output[0]["password"] && $output[0]["password"] != "") echo "<h1>LOGIN SUCCESSFUL</h1>";
	else echo "<h1>LOGIN FAILED</h1>";

?>

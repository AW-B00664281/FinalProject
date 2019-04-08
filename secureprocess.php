<?php 
	
	$HOST = "localhost";
	$Username = "root";
	$Password = "";
	$DBName = "sqli";
	
	$Userinput = $_POST['secureuser'];
	$Passinput = $_POST['securepass'];
	
	$SecuredUsername = htmlspecialchars($Userinput);
	$SecuredPassword = htmlspecialchars($Passinput);
	
	$connection = mysqli_connect($HOST, $Username, $Password, $DBName) or die (mysqli_connect_error());
	
	$statement = $connection->prepare("SELECT * FROM users WHERE Username = ? AND Password = ?");
	$statement->bind_param("ss", $SecuredUsername, $SecuredPassword);
	$statement->execute();
	$result = $statement->get_result();
	
	if($result->num_rows > 0) {
		echo "<html><body><h1>Logged in! Here are you details:</h1><br><table><tr><th>Username</th><th>Password</th><tr>";
		while($row = $result -> fetch_assoc()) {
			echo "<tr><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td></tr>";
		}
		echo "</table><br><br><a href='sqli.php'>Back to SQL Injection Tutorial</a>";
	}
	else {
		echo "Incorrect details.<br><br><a href='sqli.php'>Back to SQL Injection Tutorial</a>";
	}
	$statement->close();
	
?>
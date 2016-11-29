<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// collect value of input field
    $email = $_POST['memail']; 
    $pass = $_POST['password'];
    $firstname = $_POST['mfirname'];
    $lastname = $_POST['mlasname'];
    $username = $_POST['musername'];
    
    $servername = "localhost";
    $conn = new mysqli($servername, "killzoms", "");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query("CREATE TABLE UserAccounts (firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), password VARCHAR(18), username VARCHAR(30))") === true) {
        
        
    }
    
    $sqli = "INSERT INTO UserAccounts (firstname, lastname, email, password, username) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $pass . "', " . $username . "')";
    if ($conn->query($sqli) === TRUE) {
        echo "New account created successfully";
    } else {
        echo $conn->query($sqli);
    }
}

?>
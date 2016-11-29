<?php
$loggedin = false;
$email = "";
$firstname = "";
$lastname = "";
$username = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['memail'];
    $pass = $_POST['mpass'];
    
    $conn = new mysqli("localhost", "killzoms", "", "UserAccounts");
    
    
    
    $sqli = "SELECT email, password, firstname, lastname, username FROM UserAccounts";
    $log = $conn->query($sqli);
    
    if ($log->num_rows > 0) {
        while ($rows = $log->fetch_assoc()) {
            if ($rows['email'] == $email and $rows['password'] == $pass) {
                $GLOBALS['loggedin'] = true;
                $GLOBALS['email'] = $email;
                $GLOBALS['firstname'] = $rows['firstname'];
                $GLOBALS['lastname'] = $rows['lastname'];
                $GLOBALS['username'] = $rows['username'];
            }
        }
    }
}

if ($GLOBALS['loggedin'] == true) {
    echo 'Logged in!';
} else {
    echo 'Log in failed.';
}

?>
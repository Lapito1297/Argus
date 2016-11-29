<html>
<head>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="styles/login.css" />
</head>
<body style="background-color: rgb(200,200,200);">
    <form method='post' action="<?php echo 'security/login.php'?>">
        Username: <input required="true" id="mEmail" type="email" name="memail" />
        <br />
        <br />
        Password: <input required="true" id="mPass" type="password" name="mpass" />
        <br />
        <br />
        <input id="Submit" value="Login" type="submit"/>
    </form>
    <br />
    <a href="newaccount.php">Create account</a>
</body>
</html>
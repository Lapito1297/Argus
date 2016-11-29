<html>
<head>
    <title>Argus.com</title>
    <link rel="stylesheet" href="styles/login.css" />
</head>
<body style="background-color: rgb(200,200,200);">
    <form method="post" action="<?php echo '/security/createaccount.php'; ?>">
        Email: <input id="mEmail" type="email" name="memail"/>
        <br />
        <br />
        First name: <input type="text" name="mfirname"/>
        <br />
        <br />
        Last name: <input type="text" name="mlasname"/>
        <br />
        <br />
        Username: <input type="text" name="musername"/>
        <br />
        <br />
        Password: <input style="" type="password" name="mpass"/>
        <br />
        <br />
        <input value="Create account" style="left: 10px;"type="submit"/>
    </form>
</body>
</html>
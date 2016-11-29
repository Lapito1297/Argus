function ShowLoginScreen() {
    if (document.getElementById('loginMain').style.visibility == 'hidden') {
                    document.getElementById('loginMain').style.visibility = 'visible';
                } else {
                    document.getElementById('loginMain').src = './login.php';
                    document.getElementById('loginMain').style.visibility = 'hidden';
                }
}

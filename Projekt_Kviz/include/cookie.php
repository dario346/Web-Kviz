<?php
//provjera jesi korisnik u bazi preko kolacica
$username = $_COOKIE['user'] ?? '';
$password = $_COOKIE['pass'] ?? '';
$result = sendQuery("SELECT * FROM korisnik WHERE username='$username' AND pass='$password' LIMIT 1", $db);
$isLogedIn = false;
while ($row = mysqli_fetch_assoc($result)) {
    $isLogedIn = true;
}
$message = '';
if ($isLogedIn) {
    $message = 'welcome';
}else {
    header("Location:../user/login.php");
}
if (isset($_POST['logout'])) {
    setcookie(
        'user',
        "",
        (time() - 3600)
    );
    setcookie(
        'pass',
        "",
        (time() - 3600)
    );
    header("Location:../user/login.php");
}

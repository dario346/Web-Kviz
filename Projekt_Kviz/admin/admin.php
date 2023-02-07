<?php
include '../include/baza.php';
// todo: u zaseban fajl
$username = $_COOKIE['user'] ?? '';
$password = $_COOKIE['pass'] ?? '';
$result = sendQuery("SELECT*FROM korisnik WHERE username='$username' AND pass='$password' LIMIT 1", $db);
$isLogedIn = false;
while ($row = mysqli_fetch_assoc($result)) {
    $isLogedIn = true;
}
$message = '';
if ($isLogedIn) {
    $message = 'welcome';
} else {
    //header("Location:../user/login.php");
    //exit();
}
if (isset($_POST['logout'])) {
    setcookie(
        'user',
        "",
    );
    setcookie(
        'pass',
        "",
    );
    header("Location:../user/login.php");
}


// admin
$message = '';
if (isset($_POST['formSubmit'])) {
    $pitanje = $_POST['pitanje'];
    $opcija1 = $_POST['opcija1'];
    $opcija2 = $_POST['opcija2'];
    $opcija3 = $_POST['opcija3'];
    $opcija4 = $_POST['opcija4'];
    $odgovor = $_POST['odgovor'];


    $sql = "INSERT INTO pitanja (pitanje, opcija1, opcija2, opcija3, opcija4,odgovor)
                VALUES ('$pitanje', '$opcija1','$opcija2','$opcija3','$opcija4','$odgovor')";
    $result = mysqli_query($db, $sql);
    
    if ($result === true) {
    } else {
    }
    sendQuery("ALTER TABLE pitanja AUTO_INCREMENT=1",$db);
}

if (isset($_POST['formDelete'])) {
    $pitanjeID = $_POST['pitanjeID'];
    $sql = "DELETE FROM pitanja WHERE pitanjeID='$pitanjeID'";
    $result = mysqli_query($db, $sql);
    if ($result === true) {
    } else {
    }
    sendQuery("ALTER TABLE pitanja AUTO_INCREMENT=1",$db);
}

if (isset($_POST['formUpdate'])) 
{
    $pitanjeID = $_POST['pitanjeID'];
    $pitanje = $_POST['pitanje'];
    $opcija1 = $_POST['opcija1'];
    $opcija2 = $_POST['opcija2'];
    $opcija3 = $_POST['opcija3'];
    $opcija4 = $_POST['opcija4'];
    $odgovor = $_POST['odgovor'];
    $sql = "UPDATE pitanja SET pitanje='$pitanje', opcija1='$opcija1', opcija2='$opcija2', opcija3='$opcija3', opcija4='$opcija4',odgovor='$odgovor' WHERE pitanjeID='$pitanjeID'";
    $result = mysqli_query($db, $sql);
    sendQuery("ALTER TABLE pitanja AUTO_INCREMENT=1",$db);
    if ($result === true) {
    } else {
    }
}

if(isset($_POST['formCookie'])){
    $trajanje=$_POST['cookie'];
    var_dump($trajanje);
    $sql="UPDATE cookievrijeme SET trajanje='$trajanje'";
    sendQuery($sql,$db);


}

if(isset($_POST['formKorisnik'])){
    $Username = $_POST['Username'];
    $IsAdmin = $_POST['IsAdmin'];
    $stanjeracuna = $_POST['stanjeracuna'];
    $sql="UPDATE korisnik SET IsAdmin='$IsAdmin',stanjeracuna='$stanjeracuna' WHERE username='$Username'";
    sendQuery($sql,$db);


}


?>
<title>Administrator</title>
<?php include('../include/templates/header2.tpl.php') ?>
<?php include('../include/templates/header.tpl.php') ?>
<?php include('../include/templates/admin.tpl.php') ?>
<?php include('../include/templates/footer.tpl.php') ?>
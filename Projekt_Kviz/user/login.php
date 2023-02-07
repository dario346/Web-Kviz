<button class="login"><a href="../user/Registracija.php">Registriraj se</a></button>
<?php
include '../include/templates/header.tpl.php';
include '../include/baza.php';
// Postavljanje kolacica na login
$message='';
session_start();
$_SESSION['pokusaji'] ?? null;
if (isset($_POST['submit'])) {
    
    $username = $_POST['user'] ?? null;
    $pass = $_POST['password'] ?? null;
    $checkbox2 =$_POST['checkboxx'] ?? null;
    $select = mysqli_query($db, "SELECT * FROM korisnik");

    //dobavi is db koliko ce kolacic trajat
    $cookievrijeme = mysqli_query($db,"SELECT trajanjecookie FROM adminopcije");
    $vrijeme = mysqli_fetch_assoc($cookievrijeme);
    $vrijemetrajanja =$vrijeme['trajanjecookie']*3600;


    //dobavi is db koliko pokusaj pri loginu korisnik ima
    $pokusaj = mysqli_query($db,"SELECT pokusajlogin FROM adminopcije");
    $vrijeme = mysqli_fetch_assoc($pokusaj);
    $brojpokusaja =$vrijeme['pokusajlogin'];
    var_dump($_SESSION['pokusaji']);



while ($row = mysqli_fetch_array($select))
{
    if ($username == NULL) {
        $message = ' Username polje je prazno!';
    }
    else if($pass ==NULL)
    {
        $message = ' Password polje je prazno!';
    }
    else if($row['stanjeracuna']=='locked'){
        $message='Account je zakljucan!';

    }
    else if($username == $row['username'] && $pass == $row['pass'] && $checkbox2 =='on')
    {
        $_SESSION["user"] = $row['user'] ?? null;
        $_SESSION["pass"] = $row['pass'] ?? null;

        setcookie(
            'user',
            $username,
            (time() +  $vrijemetrajanja)
        );
        setcookie(
            'pass',
            $pass,
            (time() +  $vrijemetrajanja)
        );
        session_unset();
        header("Location:../user/naslovna.php");
    }
    else if ($username == $row['username'] && $pass == $row['pass']) {
        $_SESSION["user"] = $row['user'] ?? null;
        $_SESSION["pass"] = $row['pass'] ?? null;

        setcookie(
            'user',
            $username,
        );
        setcookie(
            'pass',
            $pass,
        );
        session_unset();
        header("Location:../user/naslovna.php");
    }
    else if($username == $row['username'])
    {

        if($_SESSION['pokusaji']==$brojpokusaja){
            $message ="Account je zakljucan!";
            $editstanje="UPDATE korisnik SET stanjeracuna='locked' where username='$username'";
            sendQuery($editstanje,$db);
            session_unset();
        }
        else{
        $message = 'Kriva šifra!';
        $_SESSION['pokusaji']++;
        }
    }
}

}

?>
<title>Login</title>
<body>
    <div id="main">
        <div id="logo">
            <h1>Kviz<br>Glavni gradovi</h1>
        </div>
        <div id="forma">
            <form action="login.php" method="POST" class="log">
                <div><?= $message ?><br><br></div>
                <label for="user"><span class="user">Username</span></label>
                <div>
                    <input type="text" name="user" id="user">
                </div>
                <label for="password" class="pass" name="password">Lozinka</label>
                <div>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <input type="submit" name="submit" id="ssubmit" value="Log in">
                </div>
                <label class="z">
                    <input type="checkbox" name="checkboxx">Zapamti me!
                </label>

            </form>

        </div>
    </div>
    <?php
    include '../include/templates/footer.tpl.php';
    ?>
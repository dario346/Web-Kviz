<?php
include '../include/baza.php';
include '../include/cookie.php';
include '../include/templates/header.tpl.php';
?>
<title>Naslovna</title>
<body id="sadrzaj">
    <div id="logo">
        <h1 id="naslov">Kviz<br>Glavni gradovi</h1>
    </div>
    <div id="button">
        <button type="button" name="newGame" class="b1"><a href="kviz.php">New Game</a></button><br>
        <button type="button" name="high" class="b1"><a id="text" href="highscore.php">Highscore</a></button><br>
        <form action="naslovna.php" method="POST">
            <input type="submit" name="logout" class="b1" value="Logout">
        </form>
    </div>
    <div id="kanal">
        <a href="../include/rss.xml">
            <img src="../slike/rss.png" class="rss">
        </a>
    </div>
    <?php
    //Provjera jesi logirani korisnik admin
    $username = $_COOKIE['user'];
    $pass = $_COOKIE['pass'];
    $select = mysqli_query($db, "SELECT * FROM korisnik WHERE username='$username' AND pass='$pass'");
    $row = mysqli_fetch_assoc($select);
    if (($username == $row['username'] && $pass == $row['pass'] && $row['IsAdmin'] == 1)) {
        $show_consent = True;
    } else {
        $show_consent = False;
    }
    ?>
    <?php if ($show_consent == True) { ?>
        <div id="administracija">
            <form method="POST" id="form_admin">
                <button><a href="../admin/admin.php"> Administracija</button>
            </form>
        </div>
    <?php } ?>
    <?php
    include '../include/templates/footer.tpl.php';
    include '../include/rss.php';
    ?>
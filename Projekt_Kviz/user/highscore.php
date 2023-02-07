<!DOCTYPE html>

<head>
    <title>Highscore</title>

    <form method="POST" id="searching">
        <input type="text" name="search" id="searchbar" placeholder="Pretraži..." onclick="ajax(e);">
        <button name="submit">Search</button>
        <br><br>
        <a href="../user/naslovna.php">Naslovna</a>
        <a href="../user/login.php">Logout</a>
    </form>

    <?php
    include '../include/baza.php';
    include '../include/templates/header.tpl.php';
    ?>

<body>
    <?php
    include '../include/sort_trazi.php';
    ?>
    <?php

    include '../include/templates/footer.tpl.php';
    ?>
</body>

</html>
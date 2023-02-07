<?php
include './include/baza.php';
include './include/templates/header.tpl.php';
?>
<link rel="stylesheet" href="./dizajn/dizajn.css">
<button class="login"><a href="./user/login.php">Logiraj se</a></button>
<button class="login"><a href="./user/Registracija.php">Registriraj se</a></button>
<title>Index</title>

</head>

<body>
    <div id="logo">
        <h1 id="naslov">Kviz<br>Glavni gradovi</h1>
    </div>
    <div id="displaydata">
        <?php
        // ispis higscore

       $bla =$_GET['sort'] ?? null;
        $sql = "SELECT * FROM highscore ORDER BY score " .$bla . "DESC";
        $result = sendQuery($sql, $db);
        while ($row = mysqli_fetch_array($result)) {
            echo 'Username: ' . $row['username'] . ' Score: ' . $row['score'] . '<br>';
        }
        ?>
    </div>
    <script src="./javascript/digitalna_pristupacnost.js"></script>
    <?php
    include './include/templates/footer.tpl.php';
    ?>
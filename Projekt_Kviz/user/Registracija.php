<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
include '../include/templates/header.tpl.php';
include '../include/baza.php';
function cap_provjera($provjera)
{
    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . urldecode("6LdhcHkjAAAAABNvd8Rpbx5M4X_maoqBXlZY74h6") . '&response=' . urldecode($provjera));
    $response = json_decode($response, true);
    return $response['success'];
}  ?>
<title>Registracija</title>
<script type="text/Javascript" src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body class="disleksija">

    <div id="main">

        <div id="logo">
            <h1>Kviz<br>Glavni gradovi</h1>
        </div>
        <div id="forma">
            <?php
            // Post na db

            if (isset($_POST['user'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $gender = $_POST['gender'];
                $hash = md5(rand(0, 1000));
                $admin = 0;
                $status = 'unlocked';

                if (cap_provjera($_POST['g-recaptcha-response'])) {



                    $sql = "INSERT INTO korisnik (username, email, pass, gender, hashing, IsAdmin, stanjeracuna)
                        VALUES ('$user', '$email','$pass','$gender','$hash','$admin','$status')";

                    $db->query($sql);

                    $db->close();
                } else {
                    $message = "Greška";
                }
            }
            ?>

            <form name="registerForm" action="Registracija.php" method="POST">

                <label for="user"><span class="user">Username</span></label>
                <div>
                    <input type="text" name="user" id="user" value="">
                </div>
                <label for="email" class="email">Email</label>

                <div>
                    <input type="text" name="email" id="email" value="">
                </div>
                <label for="password" class="pass" name="password">Lozinka</label>
                <div>
                    <input type="password" name="password" id="password" value="">
                </div>
                <label class="m">
                    <input type="radio" name="gender" value="M" id="genderM"> M
                </label>
                <label class="z">
                    <input type="radio" name="gender" value="Z" id="genderZ"> Z
                </label>
                <br>
                <label class="z">
                    <input type="checkbox" id="checkbox">Uvjeti Korištenja
                </label>
                <div>
                    <input type="submit" name="formSubmit" value="Submit" id="ssubmit" onclick="ajax(event);">
                </div>
                <div class="cap">
                    <div class="g-recaptcha" data-sitekey="6LdhcHkjAAAAAH3okksrqY8iEWS8uLZCooFguKfK"></div>

                </div>
                <br>
            </form>
        </div>
    </div>
</body>
<?php
include '../include/templates/footer.tpl.php';
?>
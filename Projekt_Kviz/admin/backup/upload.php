<?php


?>
<form method="post" action="" enctype="multipart/form-data" id="uploadback">
    <div class="res">Odaberi backup datoteku:</div>
    <br>
    <div>
            <input type="file" name="backup" class="btn1">
    </div>
    <br>
    <div>
        <input type="submit" name="restore_backup" value="Restore" class="btn">
    </div>
</form>
<?php
$message = "";
if (!empty($_FILES)) {
    // Validating SQL file type by extensions
    if (!in_array(strtolower(pathinfo($_FILES["backup"]["name"], PATHINFO_EXTENSION)), array(
        "sql"
    ))) {
    } else {
        if (is_uploaded_file($_FILES["backup"]["tmp_name"])) {
            move_uploaded_file($_FILES["backup"]["tmp_name"], $_FILES["backup"]["name"]);
            $message = restoreMysqlDB($_FILES["backup"]["name"], $db);
        }
    }
}

function restoreMysqlDB($filePath, $db)
{
    $sql = '';
    $error = '';
    $db='';
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // Create database
    $sql2 = "CREATE DATABASE kviz";
    if ($conn->query($sql2) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }

    $conn->close();

    include '../../include/baza.php';
   

    if (file_exists($filePath)) {
        $lines = file($filePath);

        foreach ($lines as $line) {

            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }

            $sql .= $line;

            if (substr(trim($line), -1, 1) == ';') {
                $result = mysqli_query($db, $sql);
                if (!$result) {
                    $error .= mysqli_error($db) . "\n";
                }
                $sql = '';
            }
        }
    }
}
?>
</div>
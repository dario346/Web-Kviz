<?php
//spajanje na bazu
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="Kviz";
        

        $db = new mysqli($servername, $username, $password,$database);

        function sendQuery($sql, $db) {
                
                
                $result = $db->query($sql) or die($db->error);
                return $result;
        }

        
        if($_SERVER['SERVER_PROTOCOL']=='http'){
                header("Location: login.php");
            }

?>

        
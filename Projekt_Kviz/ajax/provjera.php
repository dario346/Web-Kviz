<?php

include '../include/baza.php';

$sql="SELECT username FROM korisnik WHERE username = '".$_REQUEST['username']."' LIMIT 1";
$result = sendQuery($sql, $db);
    if($result->num_rows != null){
        print 1;
    }else{
        print 0;
    }

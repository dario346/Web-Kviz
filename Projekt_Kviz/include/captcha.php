<?php
function cap_provjera($provjera){
    $response=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.urldecode("6LdhcHkjAAAAABNvd8Rpbx5M4X_maoqBXlZY74h6").'&response='.urldecode($provjera));
    $response=json_decode($response,true);
    return $response['success'];
}  ?>
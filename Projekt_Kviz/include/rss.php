
<?php
$url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$str = "<?xml version='1.0'?>";
$str .= "<rss version='2.0'>";
$str .= "<channel>";
$str .= "<title>Naslovna</title>";
$str .= "<description>Naslovna</description>";

$result = mysqli_query($db, "SELECT *FROM highscore");

while ($row = mysqli_fetch_object($result)) {
    $str .= "<item>";
    $str .= "<title>" . $row->username . "</title>";
    $str .= "<description>" . $row->score . "</description>";
    $str .= "<link>$url</link>";
    $str .= "</item>";
}
$str .= "</channel>";
$str .= "</rss>";
file_put_contents("../include/rss.xml", $str);
?>

<?php

$sql = "SELECT pitanjeID,pitanje FROM pitanja";
$result = mysqli_query($db, $sql);
echo '<table border="1" > 
        <tr>  
            <th>ID</th>  
            <th>Pitanje</th> 
        </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>' . $row['pitanjeID'] . '</td> 
            <td>' . $row['pitanje'] . '</td>
        </tr>';
}
echo '</table>';

<?php
$sql = "SELECT username, email,IsAdmin,stanjeracuna FROM korisnik";
$result = mysqli_query($db, $sql);
echo '<table border="1" > 
        <tr>  
            <th>Username</th>  
            <th>Email</th>
            <th>IsAdmin</th> 
            <th>Stanje Racuna</th>
        </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>' . $row['username'] . '</td> 
            <td>' . $row['email'] . '</td>
            <td>' . $row['IsAdmin'] . '</td> 
            <td>' . $row['stanjeracuna'] . '</td>
        </tr>';
}
echo '</table>';
?>
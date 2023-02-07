<div>
    <h1 id="high">Highscore</h1>
</div>
<div id="sortiranje">
    <a href="?sort=ASC" class="asc" onclick="ajax(e);">Uzlazno</a>
    <a href="?sort=DESC" class="asc" onclick="ajax(e);">Silazno</a>
    <br>
</div>
<br><br>
<div id="displaydata">
    <?php
    //Prikaz highscore iz db
    if (isset($_GET['sort'])) {
        $asc_query = "SELECT * FROM highscore ORDER BY score " . $_GET['sort'] . "";
        $result = sendQuery($asc_query, $db);
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {
            $count++;
            echo '<table border="1" > 
                        <tr>  
                               <th>Redni Broj</th> 
                               <th>Username</th>  
                               <th>Score</th>  
                               <th>Vrijeme</th>  
                        </tr>  
                        <tr> 
                            <td>' . $count . '</td> 
                            <td>' . $row['username'] . '</td> 
                            <td>' . $row['score'] . '</td> 
                            <td>' . $row['vrijeme'] . '</td>
                        </tr>
                        </table>';
        }
    }
    ?>

</div>
<div id="displaydata2">
    <?php
    //Pretrazivanje po korisniku preko ID
    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        $sql = "SELECT *FROM korisnik WHERE korisnikID='$search'";
        $result = mysqli_query($db, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo 'Korisnik: ' . $row['username'];
            } else {
                echo "Ne postoji korisnik!!!";
            }
        }
    }
    ?>
</div>
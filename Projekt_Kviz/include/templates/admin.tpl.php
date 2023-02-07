<div class="message"><?= $message ?></div>

<script>
    function ajaxFunction(e) {
        var ajaxRequest;

        ajaxRequest = new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 0) {
                var ajaxDisplay = document.getElementById('adminDisplay');
                ajaxDisplay.innerHTML = ajaxRequest.responseText;
            }
        }

        var id = document.getElementById('pitanjeID').value;
        var pitanje = document.getElementById('pitanje').value;
        var opcija1 = document.getElementById('opcija1').value;
        var opcija2 = document.getElementById('opcija2').value;
        var opcija3 = document.getElementById('opcija3').value;
        var opcija4 = document.getElementById('opcija4').value;
        var odgovor = document.getElementById('odgovor').value;

        ajaxRequest.open("GET", "./admin.php", true);
        ajaxRequest.send(null);
    }
</script>
<br><br>

<div id="admin">
    <div id="adminDisplay">
        <?php include './pregledPitanja.php'; ?>
        <?php include './pregledKorisnika.php'; ?>
        
    </div>
<tr>
<th>
    <form name="dodaj" action="admin.php" method="POST" class="adminPodes">
        <label for="pitanjeID"><span class="Username">Username</span></label>
        <div>
            <input type="text" name="Username" id="Username" value="">
        </div>
        <label for="pitanje"><span class="IsAdmin">IsAdmin</span></label>
        <div>
            <input type="text" name="IsAdmin" id="IsAdmin" value="">
        </div>
        <label for="opcija1"><span class="opcija1">Stanje Racuna</span></label>
        <div>
            <input type="text" name="stanjeracuna" id="stanjeracuna" value="">
        </div>
        <div>
            <input type="submit" name="formKorisnik" value="Update User" id="submit" onclick="ajaxFunction(event);">
        </div>
    </form> 
</th>
<th>
    <form name="dodaj" action="admin.php" method="POST" class="adminPodes">
        <label for="pitanjeID"><span class="pitanjeID">PitanjeID</span></label>
        <div>
            <input type="text" name="pitanjeID" id="pitanjeID" value="">
        </div>
        <label for="pitanje"><span class="pitanje">Pitanje</span></label>
        <div>
            <input type="text" name="pitanje" id="pitanje" value="">
        </div>
        <label for="opcija1"><span class="opcija1">Opcija1</span></label>
        <div>
            <input type="text" name="opcija1" id="opcija1" value="">
        </div>
        <label for="opcija2"><span class="opcija2">Opcija2</span></label>
        <div>
            <input type="text" name="opcija2" id="opcija2" value="">
        </div>
        <label for="opcija3"><span class="opcija3">Opcija3</span></label>
        <div>
            <input type="text" name="opcija3" id="opcija3" value="">
        </div>
        <label for="opcija4"><span class="opcija4">Opcija4</span></label>
        <div>
            <input type="text" name="opcija4" id="opcija4" value="">
        </div>
        <label for="odgovor"><span class="odgovor">Odgovor</span></label>
        <div>
            <input type="text" name="odgovor" id="odgovor" value="">
        </div>
        <div>
            <input type="submit" name="formSubmit" value="Submit" id="submit" onclick="ajaxFunction(event);">
            <input type="submit" name="formUpdate" value="Update" id="submit" onclick="ajaxFunction(event);">
        </div>
    </form> 
</th>
    <br>
<th>
    <form name="update" action="admin.php" method="POST" class="adminPodes">
        <label for="pitanjeID"><span class="pitanjeID">PitanjeID</span></label>
        <div>
            <input type="text" name="pitanjeID" id="pitanjeID" value="">
        </div>
        <div>
            <input type="submit" name="formDelete" value="Delete" id="submit">
        </div>
    </form>
</th>

    <br>
<th>
    <form name="editcookie" action="admin.php" method="POST" class="adminPodes">
    <label for="odgovor"><span class="odgovor">Trajanje kolacica (U satima)</span></label>
        <div>
            <input type="text" name="cookie" id="cookie" value="">
        </div>
        <div>
            <input type="submit" name="formCookie" value="Submit" id="submit">
        </div>
    </form>
</th>
</tr>
</div>
<button class="backup"><a href="../admin/backup/backup_page.php">Sigurnosna kopija</a></button>
<button class="backup"><a href="../admin/backup/upload_page.php">Upload kopije</a></button>
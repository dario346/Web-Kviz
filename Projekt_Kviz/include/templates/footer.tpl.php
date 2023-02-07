<?php
if(!isset($_COOKIE['Privacy'])){
	$show_consent = True;
    if(isset($_POST['abc'])){
        setcookie(
            'Privacy',
            "Privacy",
            (time() + 3600 * 60 * 24 * 30)
        );
        $show_consent = False;
    }
    	
}else{
	$show_consent = False;
}
?>
<?php if($show_consent == True){ ?>
	<input type="checkbox" id="close_cookie"></input>
	<div id="cookie_consent_popup">
		<h1>TERMS OF SERVICE</h1>
		<label for="close_cookie" id="close_cookie_box">X</label>
		<p>TERMS OF SERVICE. By clicking 'Accept' you consent to the use of cookies unless you disabled them.<p>
        <form method="POST">
        <input type="submit" id="ok_cookie_box" name="abc" value="Accept">
        </form>
	</div>
<?php }?>

<script src="../javascript/validacija.js"></script>
    <script src="../javascript/digitalna_pristupacnost.js"></script>
</body>
</html>

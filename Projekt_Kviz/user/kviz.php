<?php

include '../include/baza.php';
include '../include/templates/header_quiz.tpl.php';

session_start(); ?>
<button class="nas"><a href="../user/naslovna.php">Naslovna</a></button>
<button class="nas"> <a href="../user/login.php">Logout</a></button>
<title>Kviz-Glavni gradovi</title>
<body>
	<div id="main">
		<?php
		//Pocetak kviza
		if (isset($_POST['click']) || isset($_GET['start'])) {
			@$_SESSION['clicks'] += 1;
			$c = $_SESSION['clicks'];
			if (isset($_POST['korOdg'])) {
				$userselected = $_POST['korOdg'];

				$sql2 = "UPDATE pitanja SET korOdg='$userselected' WHERE pitanjeID=$c-1";
				$result2 = mysqli_query($db, $sql2);
			}
		} else {
			$_SESSION['clicks'] = 0;
		}

		?>
		<div class="bump"><br>
			<form><?php if ($_SESSION['clicks'] == 0) { ?> <button class="button" name="start"><span>START</span></button> <?php } ?></form>
		</div>
		<form action="" method="post">

			<table><?php
					if (isset($c)) {
						$sql = "SELECT * FROM pitanja where pitanjeID='$c'";
						$result = mysqli_query($db, $sql);
						$num = mysqli_num_rows($result);
						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
					}
					?>
				<tr>
					<td></td>
				</tr> <?php 
				// Ispis Pitanja
				if ($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 15) { 
					?>
					<h3><?php echo @$row['pitanje']; ?></h3>
					<tr>
						<td><input required type="radio" name="korOdg" value="<?php echo $row['opcija1']; ?>">&nbsp;<?php echo $row['opcija1']; ?><br>
					<tr>
						<td><input required type="radio" name="korOdg" value="<?php echo $row['opcija2']; ?>">&nbsp;<?php echo $row['opcija2']; ?></td>
					</tr>
					<tr>
						<td><input required type="radio" name="korOdg" value="<?php echo $row['opcija3']; ?>">&nbsp;<?php echo $row['opcija3']; ?></td>
					</tr>
					<tr>
						<td><input required type="radio" name="korOdg" value="<?php echo $row['opcija4']; ?>">&nbsp;<?php echo $row['opcija4']; ?><br><br><br></td>
					</tr>
					<tr>
						<td><button class="button3" name="click">Dalje</button></td>
					</tr> <?php }
							?>
				<form>

					<?php
					//Kraj kviza , unos rezultata
					include '../include/cookie.php';
					$username = $_COOKIE['user'] ?? '';
					if ($_SESSION['clicks'] > 14) {
						$qry3 = "SELECT odgovor, korOdg FROM pitanja;";
						$result3 = mysqli_query($db, $qry3);
						$storeArray = array();
						$score = 0;
						while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
							if ($row3['odgovor'] == $row3['korOdg']) {
								$score++;
							}
						}
						$rez = $score;
						date_default_timezone_set('Europe/zagreb');
						$time2 = date('h:i:s');
						$sql2 = "INSERT INTO highscore(username,score,vrijeme) VALUES ('$username','$rez','$time2')";
						sendQuery($sql2, $db);
					?>

						<h2>REZULTAT</h2>

						<span class="score">Broj točnih odgovora:&nbsp;<?php echo $no = $score;
																		session_unset(); ?></span><br>
						<span class="score">Vaš score:&nbsp<?php echo $no * 1; ?></span>
						<br>

					<?php } ?>

					<script type="text/javascript">
						function radioValidation() {
							var useransj = document.getElementsByClassName('score').value;
							document.cookie = "username = " + korOdg;
							alert(useransj);
							var uans = document.getElementsByName('korOdg');
							var tok;
							for (var i = 0; i < uans.length; i++) {
								if (uans[i].checked) {
									tok = uans[i].value;
									alert(tok);
								}
							}
						}
					</script>
	</div>

	<?php
	include '../include/templates/footer.tpl.php';
	?>
	<?php
	include '../include/baza.php';
	?>
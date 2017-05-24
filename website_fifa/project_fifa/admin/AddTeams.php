<?php require(realpath(__DIR__) . '/../templates/header.php');
require ('../app/database.php')?>
		<div class="admin-panel">
			<div class="container">
				<h1>FIFA DEV Edition</h1>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="form">
					<form action="teamhandler.php" method="POST" >
					<p>Insert Team Name:</p>
						<input type="text" name="teamname" checked>
						<input type="submit" value="teamname">
					</form>
					<p>Insert Player Name:</p>
					<form action="playerhandler.php">
						<input type="text" name="PlayerName" checked>
						<input type="submit" value="Speler invoeren">
					</form>
				</div>
			</div>
		</div>
<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>
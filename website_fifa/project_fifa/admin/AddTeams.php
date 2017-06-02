<?php require(realpath(__DIR__) . '/../templates/header.php');
require ('../app/database.php');
require('../app/Teams.php');
require('../app/utility.php');
?>
		<div class="admin-panel">
			<div class="container">
				<h1>FIFA DEV Edition</h1>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="row-spaced">
                    <div class="add-team">
                        <h2>Add Team</h2>
                        <form action="teamhandler.php" method="POST" >
                            <input type="text" name="teamname" checked>
                            <input type="submit" value="teamname">
                        </form>
                        <?php
                        $utility = new \project_fifa\utility();
                        $utility->DisplayTeams();
                        ?>
                    </div>
                    <div class="add-player">
                        <h2>Add Player:</h2>
                        <form action="playerhandler.php" method="POST">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="studentid">Student ID</label>
                                <input type="text" name="studentid" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                        <?php
                        $utility = new \project_fifa\utility();
                        $utility->DisplayPlayers();
                        ?>
                    </div>
				</div>
			</div>
		</div>
<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>
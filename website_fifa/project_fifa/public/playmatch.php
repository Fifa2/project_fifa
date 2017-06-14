<?php require(realpath(__DIR__) . '/../templates/header.php');
require('../app/utility.php');
$utility = new \project_fifa\utility();
$utility->loginCheck();
if (isset($_GET['id']) && !empty($_GET['id']))
{
    $matchid = $_GET['id'];
}
global $db;
require_once '../app/database.php';
$sql = "SELECT tbl_matches.id, tbl_matches.start_time, tbl_matches.team_id_a, teams.teamname, tbl_teams.teamname, tbl_matches.team_id_b , tbl_matches.score_team_a , tbl_matches.score_team_b FROM tbl_matches INNER JOIN tbl_teams as teams ON tbl_matches.team_id_a = teams.id INNER JOIN tbl_teams ON tbl_matches.team_id_b = tbl_teams.id WHERE tbl_matches.id = $matchid";
$items = $items = $db->query($sql)->fetchAll();

foreach ($items as $item) {
    $matchid = $item[0];
    $startime = $item[1];
    $teamidA = $item[2];
    $teamnameA = $item[3];
    $teamnameB = $item[4];
    $teamidB = $item[5];
    $scoreteama = $item['score_team_a'];
    $scoreteamb = $item['score_team_b'];
}


?>
<div class="match">
    <div class="smalltainer center pt">
        <div class="score row-spaced">
            <div class="match-top center">
                <h2><?php echo $teamnameA ?></h2>
                <p>
                    <?php
                    if ($scoreteama == null)
                    {
                        echo "0";
                    }
                    else
                    {
                        echo "$scoreteama";
                    }
                    ?>
                </p>
            </div>
            <div class="match-top">
                <h2><?php echo $teamnameB ?></h2>
                <p>
                    <?php
                    if ($scoreteamb == null)
                    {
                        echo "0";
                    }
                    else
                    {
                        echo "$scoreteamb";
                    }
                    ?>
                </p>
            </div>

        </div>
        <div class="updatescore row-spaced">
            <div class="form-group">
                <form action="../app/updatematch.php" method="POST">
                    <div class="form-group">
                        <label for="player">Player</label>
                        <select class="form-control" name="player">
                            <?php
                            $sql = "SELECT * FROM tbl_players WHERE team_id = $teamidA";
                            $players = $db->query($sql)->fetchAll();
                            foreach ($players as $player)
                            {
                                $id = $player['id'];
                                $firstname = $player['first_name'];
                                $lastname = $player['last_name'];
                                echo '<option value=' . $id . '>' . $firstname . $lastname  . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type='hidden' name='teamid' value='score_team_a'/>
                    <input type='hidden' name='goals' value='<?php echo "$scoreteama";?>'/>
                    <input type='hidden' name='matchid' value='<?php echo "$matchid";?>'/>
                    <input type="submit" value="Scored" class="form-control">
                </form>
            </div>
            <div class="form-group">
                <form action="../app/updatematch.php" method="POST">
                    <div class="form-group">
                        <label for="player">Player</label>
                        <select class="form-control" name="player">
                            <?php
                            $sql = "SELECT * FROM tbl_players WHERE team_id = $teamidB";
                            $players = $db->query($sql)->fetchAll();
                            foreach ($players as $player)
                            {
                                $id = $player['id'];
                                $firstname = $player['first_name'];
                                $lastname = $player['last_name'];
                                echo '<option value=' . $id . '>' . $firstname . $lastname  . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type='hidden' name='teamid' value='score_team_b'/>
                    <input type='hidden' name='goals' value='<?php echo "$scoreteamb";?>'/>
                    <input type='hidden' name='matchid' value='<?php echo "$matchid";?>'/>
                    <input type="submit" value="Scored" class="form-control">
                </form>
            </div>


        </div>
    </div>
</div>

<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>


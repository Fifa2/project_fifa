<?php
var_dump($_POST);
if (isset($_POST['player']) && !empty($_POST['player']) && isset($_POST['teamid']) && !empty($_POST['teamid']) && isset($_POST['matchid']) && !empty($_POST['matchid'])&& isset($_POST['goals']))
{
    $player = $_POST['player'];
    $team = $_POST['teamid'];
    $matchid = $_POST['matchid'];
    $goals = $_POST['goals'];
    require ('../app/database.php');
    global $db;
    var_dump($matchid);
    var_dump($team);

    $sql = "UPDATE tbl_players SET goals_scored = goals_scored + 1 WHERE id = $player";
    $db->query($sql);
    if($goals == NULL )
    {
        $sql2 = "UPDATE tbl_matches SET $team = 1 WHERE id = $matchid";
        $db->query($sql2);
    }
    else
    {
        $sql2 = "UPDATE tbl_matches SET $team = $team + 1 WHERE id = $matchid";
        $db->query($sql2);

    }
header("Location: ../public/playmatch.php?id=$matchid");
}



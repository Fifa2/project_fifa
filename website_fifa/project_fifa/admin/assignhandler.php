<?php

if ((isset($_POST['Team']) && !empty($_POST['Team'])) && (isset($_POST['1']) && !empty($_POST['1'])) && (isset($_POST['2']) && !empty($_POST['2'])) && (isset($_POST['3']) && !empty($_POST['3'])) && (isset($_POST['4']) && !empty($_POST['4'])) && (isset($_POST['5']) && !empty($_POST['5'])))
{
    require ('../app/database.php');
    global $db;

    $teamid = $_POST['Team'];
    $players = array($_POST['1'],$_POST['2'],$_POST['3'],$_POST['4'],$_POST['5']);

    require_once '../app/database.php';


    foreach ($players as $player) {
        $sql = "UPDATE tbl_players SET team_id = $teamid where id = $player";
        $db->query($sql);
    }
    header("Location: AssignTeams.php");
}
<?php
/**
 * Created by PhpStorm.
 * User: shoev
 * Date: 31-5-2017
 * Time: 15:03
 */

namespace project_fifa;


class utility
{


    function __construct()
    {
    }

    function DisplayPlayers()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT tbl_players.id, tbl_players.first_name, tbl_players.last_name,tbl_teams.teamname FROM tbl_players INNER JOIN tbl_teams ON tbl_players.team_id = tbl_teams.id";
        $items = $db->query($sql)->fetchAll();
        echo"
        <table class='table'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Team Name</th>
                
            </tr>";
        foreach ($items as $item)
        {
            $id = $item['id'];
            $firstname = $item['first_name'];
            $lastname = $item['last_name'];
            $teamname = $item['teamname'];
            echo '<tr>
                <td>' . $firstname . '</td>
                <td>' . $lastname .'</td>
                <td>' . $teamname . '</td> </tr>';
        }
        echo "</table>";

    }

    function DisplayTeams()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT * FROM tbl_teams";
        $items = $db->query($sql)->fetchAll();
        echo"
        <table class='table'>
            <tr>
                <th>Team ID</th>
                <th>Team Name</th>
                <th>Poule Number</th>
            </tr>";
        foreach ($items as $item)
        {
            $id = $item['id'];
            $teamname = $item['teamname'];
            $pouleid = $item['poule_id'];
            echo '<tr>
                <td>' . $id . '</td>
                <td>' . $teamname .'</td>
                <td>' . $pouleid . '</td> </tr>';
        }
        echo "</table>";
    }

    function DisplayPoule($pouleid)
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT * FROM tbl_teams where poule_id = $pouleid";
        $items = $db->query($sql)->fetchAll();
        echo"
        <table class='table'>
            <tr>
                <th>Team Name</th>
                <th>Points</th>
            </tr>";
        foreach ($items as $item)
        {
            $id = $item['id'];
            $teamname = $item['teamname'];
            $points = $item['points'];
            echo '<tr>
                <td><a href="../public/teams.php?id='. $id .'">' . $teamname .'</a></td>
                <td>' . $points . '</td> </tr>';
        }
        echo "</table>";
    }

    function selectPlayer($playernumber)
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT * FROM tbl_players";
        $items = $db->query($sql)->fetchAll();

        echo '<select class="form-control" name="' . $playernumber . '">';
        foreach ($items as $item)
        {
            $id = $item['id'];
            $firstname = $item['first_name'];
            $lastname = $item['last_name'];
            echo '<option value=' . $id . '>' . $firstname . $lastname  . '</option>';
        }
        echo "</select>";
    }

    function selectScorer($teamid)
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT * FROM tbl_players where team_id = $teamid";
        $items = $db->query($sql)->fetchAll();
        echo 'select class="form-control" name="scorer">';
        foreach ($items as $item)
        {
            $id = $item['id'];
            $firstname = $item['first_name'];
            $lastname = $item['last_name'];
            echo '<option value=' . $id . '>' . $firstname . $lastname  . '</option>';
        }
        echo "</select>";

    }

    function loginCheck()
    {
        if (empty ($_SESSION['loggedIn'])){
            header("Location: ../public/home.php");
        }

    }
    function displayTeam($teamid)
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT tbl_players.id, tbl_players.first_name, tbl_players.last_name,tbl_teams.teamname FROM tbl_players INNER JOIN tbl_teams ON tbl_players.team_id = tbl_teams.id WHERE tbl_players.team_id = $teamid";
        $items = $db->query($sql)->fetchAll();
        $teamname = $items[0]['teamname'];
        echo"
        <h1>". $teamname . "</h1>
        <table class='table'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>";
        foreach ($items as $item)
        {
            $id = $item['id'];
            $firstname = $item['first_name'];
            $lastname = $item['last_name'];
            $teamname = $item['teamname'];
            echo '<tr>
                <td>' . $firstname . '</td>
                <td>' . $lastname .'</td>
                </tr>';
        }
        echo "</table>";
        }

}
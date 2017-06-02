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
                <th>Teaam ID</th>
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
        
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: shoev
 * Date: 16-5-2017
 * Time: 13:47
 */

namespace project_fifa;


class matches
{
    protected $matchID;
    protected $idTeamA;
    protected $idTeamB;
    protected $scoreTeamA;
    protected $scoreTeamB;

    function __construct()
    {

    }

    function AddMatch($idTeamA,$idTeamB)
    {
        global $db;
        require_once '../app/database.php';
        $sql = "INSERT INTO tbl_matches (team_id_a, team_id_b) VALUES ($idTeamA, $idTeamB)";
        $db->query($sql);
    }

    function DisplaySchedule()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT tbl_matches.team_id_a, teams.teamname, tbl_teams.teamname, tbl_matches.team_id_b FROM tbl_matches INNER JOIN tbl_teams as teams ON tbl_matches.team_id_a = teams.id INNER JOIN tbl_teams ON tbl_matches.team_id_b = tbl_teams.id";
        $items = $db->query($sql)->fetchAll();
        foreach ($items as $item)
        {
            $teamidA = $item[0];
            $teamnameA = $item[1];
            $teamnameB = $item[2];
            $teamidB = $item[3];

            echo"
            <table class='table'>
                <tr>
                    <th>Home</th>
                    <th>Away</th>
                </tr>";
            echo '<tr>
                <td>' . $teamnameA . '</td>
                <td>' . $teamnameB .'</td> </tr>';


        }

    }
}
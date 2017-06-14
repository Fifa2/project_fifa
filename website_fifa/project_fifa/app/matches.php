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
        $sql = "SELECT tbl_matches.id, tbl_matches.start_time, tbl_matches.team_id_a, teams.teamname, tbl_teams.teamname, tbl_matches.team_id_b , tbl_matches.score_team_a , tbl_matches.score_team_b FROM tbl_matches INNER JOIN tbl_teams as teams ON tbl_matches.team_id_a = teams.id INNER JOIN tbl_teams ON tbl_matches.team_id_b = tbl_teams.id";
        $items = $db->query($sql)->fetchAll();
        foreach ($items as $item)
        {
            $matchid = $item[0];
            $startime = $item[1];
            $teamidA = $item[2];
            $teamnameA = $item[3];
            $teamnameB = $item[4];
            $teamidB = $item[5];
            $scoreteama = $item['score_team_a'];
            $scoreteamb = $item['score_team_b'];

            echo"
            <table class='table schedule'>
                <tr>
                    <th>Home</th>
                    <th>Away</th>
                    <th>Play Time</th>
                    <th>End Score</th>
                </tr>";
            echo '<tr>
                <td>' . $teamnameA . '</td>
                <td>' . $teamnameB .'</td>
                <td>' . $startime .'</td>';
            if ($scoreteama == NULL || $scoreteamb == NULL)
            {
                echo '<td><a href="../public/playmatch.php?id='. $matchid .'">Play Match!</a></td>';
            }
            else
            {
                echo '<td>' . $scoreteama . ' - ' . $scoreteamb . '</td>';
            }
                echo '</tr> </table>';
        }
    }
}
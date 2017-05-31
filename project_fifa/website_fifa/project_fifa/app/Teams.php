<?php
namespace project_fifa;
class Teams
{
    protected $teamName;
    protected $poolID;
    protected $points;
    protected $doesExist;

    function __construct($name,$poolID)
    {
        $this->teamName = $name;
        $this->poolID = $poolID;
        $this->points = 0;
        $this->doesExist = true;
    }
    //AddTeams();
    function AddTeams()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "INSERT INTO tbl_teams (poule_id, teamname, points, doesexist) VALUES ('$this->poolID', '$this->teamName', '$this->points', '$this->doesExist')";
        $db->query($sql);
    }

    function displayteams()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "SELECT tbl_players.id, tbl_players.first_name, tbl_players.last_name FROM tbl_users INNER JOIN tbl_teams ON tbl_players.team_id = tbl_teams.id";
        $items = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $item)
        {
            $id = $item['id'];
            $firstname = $item['first_name'];
            $lastname = $item['last_name'];
            $ingredienten = $item['ingredienten'];
            $foto = $item['foto'];


            echo '<tr>
                <td>' . $firstname .'</td>
                <td>' .$lastname. '</td>
                <td>' .id. '</td>
                ';
//            if($item['foto']== null)
//            {
//                echo '<td><img src="http://placehold.it/350x150" alt="foto"></td>';
//            }
//            else
//            {
//                echo '<td><img src="../img/' .$foto. '" alt="recept foto"></td>';
//            }
//
//
//            echo '</tr>';
        }
    }
    //DeleteTeams();
    function DeleteTeams()
    {

    }

}
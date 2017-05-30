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
        $db->query($sql);

        echo "";
    }
    //DeleteTeams();
    function DeleteTeams()
    {

    }

}
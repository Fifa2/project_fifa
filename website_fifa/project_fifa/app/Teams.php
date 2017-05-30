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
//        return true;
    }
    //DeleteTeams();
    function DeleteTeams()
    {

    }

}
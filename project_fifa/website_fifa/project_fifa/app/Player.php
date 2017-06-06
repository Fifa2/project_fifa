<?php
/**
 * Created by PhpStorm.
 * User: Corne
 * Date: 16-5-2017
 * Time: 13:52
 */

namespace project_fifa;


class Player
{
    protected $idStudent;
//    protected $idTeam;
    protected $firstname;
    protected $lastname;

    function __construct($idStudent,$firstname,$lastname) {
        $this->idStudent = $idStudent;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
}
    function AddPlayer()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "INSERT INTO tbl_players (student_id, first_name, last_name) VALUES ('$this->idStudent', '$this->firstname', '$this->lastname')";
        $db->query($sql);
    }
    function DeletePlayer()
    {
        
    }

    function AssignTeam($playerid,$teamid)
    {
     global $db;
     require_once '../app/database.php';
     $sql = "UPDATE tbl_players SET team_id = $playerid where team_id = $teamid";
    }
}
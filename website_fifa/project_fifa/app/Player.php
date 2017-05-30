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
    protected $idPlayer;
    protected $idStudent;
    protected $idTeam;
    protected $firstname;
    protected $lastname;

    function __construct($idPlayer,$idStudent,$idTeam,$firstname,$lastname) {
        $this->idPlayer = $idPlayer;
        $this->idStudent = $idStudent;
        $this->idTeam = $idTeam;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
}
    protected function AddPlayer()
    {
        global $db;
        require_once '../app/database.php';
        $sql = "INSERT INTO tbl_players (poule_id, teamname, points, doesexist) VALUES ('$this->poolID', '$this->teamName', '$this->points', '$this->doesExist')";
        $db->query($sql);
    }
    protected function DeletePlayer()
    {
        
    }
}
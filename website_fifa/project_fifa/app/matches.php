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

    function EditMatch()
    {
//     also add code here please
    }
}
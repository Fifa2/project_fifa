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

    function __construct($matchID,$idTeamA,$idTeamB,$scoreTeamA,$scoreTeamB)
    {
        $this->matchID = $matchID;
        $this->idTeamA = $idTeamA;
        $this->idTeamB = $idTeamB;
        $this->scoreTeamA = $scoreTeamA;
        $this->scoreTeamB = $scoreTeamB;
    }

    function AddMatch()
    {
//        add code here plz
    }

    function EditMatch()
    {
//     also add code here please
    }
}
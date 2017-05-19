<?php
/**
 * Created by PhpStorm.
 * User: shoev
 * Date: 16-5-2017
 * Time: 14:25
 */

namespace project_fifa;


class pools
{
    protected $idPool;
    protected $idTeamA;
    protected $idTeamB;
    protected $idTeamC;
    protected $idTeamD;
    protected $idTeamE;

    function __construct($idPool,$idTeamA,$idTeamB,$idTeamC,$idTeamD,$idTeamE)
    {
        $this->idPool = $idPool;
        $this->idTeamA = $idTeamA;
        $this->idTeamA = $idTeamB;
        $this->idTeamA = $idTeamC;
        $this->idTeamA = $idTeamD;
        $this->idTeamA = $idTeamE;
    }
}
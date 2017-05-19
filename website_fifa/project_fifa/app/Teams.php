<?php


namespace project_fifa;

    require 'database.php';

class Teams


{
    protected $name;
    protected $poolID;
    protected $points;
    protected $exists;

    function __construct($name,$poolID)
    {
        $this->name = $name;
        //$this->poolID = $poolID;
        $this->points = 0;
        $this->exists = true;
    }



    //AddTeams();
    function AddTeams()
    {

    }

    //DeleteTeams();
    function DeleteTeams()
    {

    }

}
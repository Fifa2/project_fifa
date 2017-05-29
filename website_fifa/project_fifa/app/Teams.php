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
        $this->poolID = $poolID;
        $this->points = 0;
        $this->exists = true;
    }



    //AddTeam();
    function AddTeam()
    {

    }

    //DeleteTeam();
    function DeleteTeam()
    {
        $sql = "INSERT INTO tbl_teams "
    }

}
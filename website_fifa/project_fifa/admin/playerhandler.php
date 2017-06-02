<?php
require('../app/database.php');
require('../app/Player.php');
require('../app/utility.php');

// kijken of de data aanwezig is
// geef team pool ID
// team insert team = new team
// insert naam ->  add team
if(isset($_POST['firstname']) && !empty($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['studentid']) && !empty($_POST['studentid']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $studentid = $_POST['studentid'];
    $player = new \project_fifa\Player($studentid, $firstname, $lastname);
    var_dump($player);
    $player->AddPlayer();
    header("Location: AddTeams.php");
}
else {
//    header("Location: AddTeams.php");
    echo "nee";
}
?>
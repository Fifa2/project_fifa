<?php

require('../app/database.php');

// kijken of de data aanwezig is
// geef team pool ID
// team insert team = new team
// insert naam ->  add team

var_dump($_POST['TeamName']);

if (!isset($_POST)) {
    header("Location: AddTeams.php");
}
else {
    $TeamName = $_POST['TeamName'];
    //checken wat pool id is
    $sql = "SELECT * FROM tbl_poolnumber";
    $poulenumber = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $poulenumber = (int) $poolnumber;

    
}
?>

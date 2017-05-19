<?php

// kijken of de data aanwezig is
// geef team pool ID
// team insert team = new team
// insert naam ->  add team

var_dump($_POST['TeamName']);

if (!isset($_POST)) {
    header("Location: AddTeams.php");
}
else {
    $_POST['TeamName'] = $TeamName;
    //checken wat pool id is
    //
}
?>

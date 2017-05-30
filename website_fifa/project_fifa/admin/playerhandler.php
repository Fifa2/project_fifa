<?php
require('../app/database.php');
require('../app/Player.php');

// kijken of de data aanwezig is
// geef team pool ID
// team insert team = new team
// insert naam ->  add team
if(isset($_POST['playername']) && !empty($_POST['playername']))
{
    $playername = $_POST['playername'];
    //checken wat pool id is
    $sql = "SELECT poulenumber FROM tbl_poulenumber WHERE id = 1";
    $poulenumber = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    var_dump($poulenumber);

    $poulenumber = (int) $poulenumber[0]['poulenumber'];

    var_dump($poulenumber);
    var_dump($poulenumber);

    $player = new \project_fifa\Player($teamname, $poulenumber);

    var_dump($team);
    $team->AddTeams();
}
else {
    header("Location: AddTeams.php");
}
?>
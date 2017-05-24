<?php
require('../app/database.php');
require('../app/Teams.php');

// kijken of de data aanwezig is
// geef team pool ID
// team insert team = new team
// insert naam ->  add team
if(isset($_POST['teamname']) && !empty($_POST['teamname']))
{
    $teamname = $_POST['teamname'];
    //checken wat pool id is
    $sql = "SELECT poulenumber FROM tbl_poulenumber WHERE id = 1";
    $poulenumber = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    var_dump($poulenumber);

    $poulenumber = (int) $poulenumber[0]['poulenumber'];

    var_dump($poulenumber);
    var_dump($poulenumber);

    $team = new \project_fifa\Teams($teamname, $poulenumber);

    var_dump($team);
}
else {
    header("Location: AddTeams.php");
}
?>

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
    $poulenumber = (int) $poulenumber[0]['poulenumber'];
    $team = new \project_fifa\Teams($teamname, $poulenumber);
    $team->AddTeams();
    if($poulenumber < 4)
    {
        $poulenumber +=1;
    }
    else
    {
        $poulenumber = 1;
    }
    $sql = "UPDATE tbl_poulenumber SET poulenumber = '$poulenumber'";
    $db->query($sql);
    header("Location: AddTeams.php");

}
else {
    header("Location: AddTeams.php");
}
?>

<?php require(realpath(__DIR__) . '/../templates/header.php');
require('../app/utility.php');
$utility = new \project_fifa\utility();
$utility->loginCheck();
$id = $_GET['id'];
?>
<div class="team-display">
    <div class="container pt">
        <?php
        $utility->displayTeam($id);
        ?>
    </div>
</div>

<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>


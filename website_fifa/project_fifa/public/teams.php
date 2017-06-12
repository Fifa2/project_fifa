<?php require(realpath(__DIR__) . '/../templates/header.php');
require('../app/utility.php');
$utility = new \project_fifa\utility();
?>
<div class="team-display">
    <div class="container">
        <?php
        $utility->displayTeam();
        ?>
    </div>
</div>

<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>


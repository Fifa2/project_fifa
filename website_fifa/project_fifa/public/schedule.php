<?php require(realpath(__DIR__) . '/../templates/header.php');
require('../app/utility.php');
require('../app/matches.php');
$utility = new \project_fifa\utility();
$utility->loginCheck();
$matches = new \project_fifa\matches();
?>


<div class="schedule">
    <div class="container pt">
        <?php $matches->DisplaySchedule();?>
    </div>
</div>



<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>



<?php require(realpath(__DIR__) . '/../templates/header.php');
require('../app/utility.php');
$utility = new \project_fifa\utility();
?>
<div class="pouledisplay">
    <div class="container row-spaced">
        <div class="poule">
            <h3>Poule 1</h3>
            <?php $utility->DisplayPoule(1);?>
        </div>
        <div class="poule">
            <h3>Poule 2</h3>
            <?php $utility->DisplayPoule(2);?>
        </div>
        <div class="poule">
            <h3>Poule 3</h3>
            <?php $utility->DisplayPoule(2);?>
        </div>
        <div class="poule">
            <h3>Poule 4</h3>
            <?php $utility->DisplayPoule(4);?>
        </div>
    </div>
</div>

<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>

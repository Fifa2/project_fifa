<?php require(realpath(__DIR__) . '/../templates/header.php');
require ('../app/database.php');
echo "<div class=\"admin-panel\">
    <div class=\"container\">
        <ul>
            <li><a href=\"AddTeams.php\">Add Teams.</a></li>
            <li><a href=\"AssignTeams.php\">Assing players to teams.</a></li>
        </ul>
    </div>
</div>";
require(realpath(__DIR__) . '/../templates/footer.php');
//?>

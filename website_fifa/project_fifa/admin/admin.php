<?php require(realpath(__DIR__) . '/../templates/header.php');
require ('../app/database.php');
echo "<div class=\"admin-panel pt\">
    <div class=\"container pt fill\">
        <ul>
            <li><a href=\"AddTeams.php\">Add Teams.</a></li>
            <li class='pt'><a href=\"AssignTeams.php\">Assing players to teams.</a></li>
        </ul>
    </div>
</div>
";
require(realpath(__DIR__) . '/../templates/footer.php');
//?>

<?php require(realpath(__DIR__) . '/../templates/header.php');
require('../app/database.php') ?>

<div class="setup-items">
    <div class="container whiteborder row-spaced pt">
            <h2>
                How To Get Started:
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet corporis eaque est ex fuga, fugit maxime mollitia odio perspiciatis, possimus quia quibusdam quisquam quod? Consequuntur dignissimos reiciendis repellat reprehenderit voluptas.</p>
    </div>
</div>
<div class="setup-items">
    <div class="container row-spaced whiteborder">
        <h3>
            Add Teams For Your Tournament:
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsam iure magni minus nemo soluta suscipit ullam vitae voluptatibus. Aliquam harum non nostrum, quibusdam ratione recusandae repellat repellendus tempore vero!</p>
        <a href="../admin/addteams.php">Go!</a>
    </div>
</div>
<div class="setup-items">
    <div class="container row-spaced whiteborder">
        <h3>
            Add Players For Your Tournament:
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsam iure magni minus nemo soluta suscipit ullam vitae voluptatibus. Aliquam harum non nostrum, quibusdam ratione recusandae repellat repellendus tempore vero!</p>
        <a href="../admin/addplayers.php">Go!</a>
    </div>
</div>
<div class="setup-items">
    <div class="container row-spaced whiteborder">
        <h3>
            Assign players to teams:
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsam iure magni minus nemo soluta suscipit ullam vitae voluptatibus. Aliquam harum non nostrum, quibusdam ratione recusandae repellat repellendus tempore vero!</p>
        <a href="../admin/assignteams.php">Go!</a>
    </div>
</div>
<div class="setup-items">
    <div class="container row-spaced whiteborder">
        <h3>
            Generate Your Match Schedule:
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsam iure magni minus nemo soluta suscipit ullam vitae voluptatibus. Aliquam harum non nostrum, quibusdam ratione recusandae repellat repellendus tempore vero!</p>
        <a href="../app/matchgenerator.php">Go!</a>
    </div>
</div>
<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>


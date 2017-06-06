<?php require(realpath(__DIR__) . '/../templates/header.php');
require ('../app/database.php');
require('../app/utility.php');
$utility = new \project_fifa\utility();
?>

<div class="admin-panel">
    <div class="banner">
        <div class="container">
            <div class="form-group">
                <form action="assignhandler.php" method="POST">
                    <p>Select A Team.</p>
                    <select class="form-control" name="Team">
                        <?php
                        $sql = "SELECT * FROM tbl_teams";
                        $items = $db->query($sql)->fetchAll();
                        foreach ($items as $item)
                        {
                            $id = $item['id'];
                            $teamname = $item['teamname'];

                            echo '<option value=' . $id . '>' . $teamname . '</option>';
                        }
                        ?>
                    </select>
                    <p>Select player one.</p>
                        <?php
                        $utility->selectPlayer(1);
                        ?>
                    <p>Select player two.</p>
                        <?php
                        $utility->selectPlayer(2);
                        ?>
                    <p>Select player three.</p>
                        <?php
                        $utility->selectPlayer(3);
                        ?>
                    <p>Select player four.</p>
                        <?php
                        $utility->selectPlayer(4);
                        ?>
                    <p>Select player five.</p>
                        <?php
                        $utility->selectPlayer(5);
                        ?>
                    <input type="submit" value="Team invoeren" class="form-control">
                </form>
            </div>
        </div>
    </div>
</div>

<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>
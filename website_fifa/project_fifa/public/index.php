<?php require(realpath(__DIR__) . '/templates/header.php');
require ('../app/database.php')?>

<div class="main-content">
    <div class="container">
        <ul>
            <?php
            $sql = "SELECT * FROM tbl_teams ";
            $items = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

            foreach ($items as $item)
            {
                $name = $item['name'];
                echo '<ul>' . $name . '</ul>';
            }
            ?>
        </ul>
    </div>
</div>

<?php require(realpath(__DIR__) . '/templates/footer.php');

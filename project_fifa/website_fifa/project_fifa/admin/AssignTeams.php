<?php require(realpath(__DIR__) . '/../templates/header.php');
require ('../app/database.php')?>
<div class="admin-panel">
    <div class="banner">
        <div class="container">
            <div class="form">
                <form action="Teams.php">
                    <p>Select A Team.</p>
                    <select name="Players">
                        <!--insert php-->
                    </select>
                    <p>Select player one.</p>
                    <select name="Players">
                        <!--insert php
                        <option value="volvo">Volvo</option>
                        -->
                    </select>
                    <p>Select player two.</p>
                    <select name="Players">
                        <!--insert php-->
                    </select>
                    <p>Select player three.</p>
                    <select name="Players">
                        <!--insert php-->
                    </select>
                    <p>Select player four.</p>
                    <select name="Players">
                        <!--insert php-->
                    </select>
                    <p>Select player five.</p>
                    <select name="Players">
                        <!--insert php-->
                    </select>
                    <input type="submit" value="Team invoeren">
                </form>
            </div>
        </div>
    </div>
</div>

<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>
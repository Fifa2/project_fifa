 <?php require(realpath(__DIR__) . '/../templates/header.php');
 require('../app/database.php') ?>

 <div class="main-content">
     <div class="bgibanner">
         <div class="container">
             <div class="bannerquote pt">
                 <h2><mark class="animated fadeIn">FIFA2</mark></h2>
             </div>
         </div>
     </div>
 </div>
 <?php
 if (empty ($_SESSION['loggedIn']))
 {
     echo" <div class=\"login-register\">
     <div class=\"container row-spaced pt\">
         <div class=\"login whiteborder\">
             <h3>Login</h3>
             <form action=\"../app/loginhandler.php\" method=\"POST\">
                 <div class=\"form-group\">
                     <label for=\"username\">Username</label>
                     <input type=\"text\" name=\"username\" class=\"form-control\" required>
                 </div>
                 <div class=\"form-group\">
                     <label for=\"password\">Password</label>
                     <input type=\"password\" name=\"password\" class=\"form-control\" required>
                 </div>
                 <div class=\"form-group\">
                     <input type=\"submit\" class=\"form-control green\">
                 </div>
             </form>
         </div>
         <div class=\"register whiteborder\">
             <h3>Register</h3>
             <form action=\"../app/register.php\" method=\"POST\">
                 <div class=\"form-group\">
                     <label for=\"username\">Username</label>
                     <input type=\"text\" name=\"username\" class=\"form-control\" required>
                 </div>
                 <div class=\"form-group\">
                     <label for=\"password\">Password</label>
                     <input type=\"password\" name=\"password\" class=\"form-control\" required>
                 </div>
                 <div class=\"form-group\">
                     <label for=\"email\">E-mail</label>
                     <input type=\"text\" name=\"email\" class=\"form-control\" required>
                 </div>
                 <div class=\"form-group\">
                     <input type=\"submit\" class=\"form-control green\">
                 </div>
             </form>
         </div>
     </div>
 </div>";
 }
 ?>
<!-- <div class="login-register">-->
<!--     <div class="container row-spaced pt">-->
<!--         <div class="login whiteborder">-->
<!--             <h3>Login</h3>-->
<!--             <form action="../app/loginhandler.php" method="POST">-->
<!--                 <div class="form-group">-->
<!--                     <label for="username">Username</label>-->
<!--                     <input type="text" name="username" class="form-control" required>-->
<!--                 </div>-->
<!--                 <div class="form-group">-->
<!--                     <label for="password">Password</label>-->
<!--                     <input type="password" name="password" class="form-control" required>-->
<!--                 </div>-->
<!--                 <div class="form-group">-->
<!--                     <input type="submit" class="form-control green">-->
<!--                 </div>-->
<!--             </form>-->
<!--         </div>-->
<!--         <div class="register whiteborder">-->
<!--             <h3>Register</h3>-->
<!--             <form action="../app/loginhandler.php" method="POST">-->
<!--                 <div class="form-group">-->
<!--                     <label for="username">Username</label>-->
<!--                     <input type="text" name="username" class="form-control" required>-->
<!--                 </div>-->
<!--                 <div class="form-group">-->
<!--                     <label for="password">Password</label>-->
<!--                     <input type="password" name="password" class="form-control" required>-->
<!--                 </div>-->
<!--                 <div class="form-group">-->
<!--                     <label for="email">E-mail</label>-->
<!--                     <input type="text" name="email" class="form-control" required>-->
<!--                 </div>-->
<!--                 <div class="form-group">-->
<!--                     <input type="submit" class="form-control green">-->
<!--                 </div>-->
<!--             </form>-->
<!--         </div>-->
<!--     </div>-->
<!-- </div>-->




<?php require(realpath(__DIR__) . '/../templates/footer.php');
?>


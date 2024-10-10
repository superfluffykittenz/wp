<?php
  include("includes/db_connect.inc");
  $title = "Register";
  include("includes/header.inc"); 

  if (!empty($_SESSION['user'])) { ?>
    <p>Hey <?= $_SESSION['user']['name'] ?>, you are already registered and logged in silly!</p>  
      <?php } else { ?> 
        <form class="loginregister" action="process_register.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <span>dummy error message</span>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <span>dummy error message</span>
        <span></span>
        <span><input type="submit" value="Register"> <input type="reset" value="Reset"></span>
        
    </form>
      <?php }


?>



<?php include("includes/footer.inc"); ?>
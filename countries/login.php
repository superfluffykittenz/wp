<?php
  include("includes/db_connect.inc");
  $title = "Login";
  include("includes/header.inc"); 

  if (!empty($_SESSION['user'])) { ?>
<p>Hey <?= $_SESSION['user']['name'] ?>, you are already logged in silly!</p>  
  <?php } else { ?> 
  <form class="loginregister" action="process_login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="Alice">
    <span>dummy error message</span>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="p4ssw0rd">
    <span>dummy error message</span>
    <span></span>
        <span><input type="submit" value="Login"> <input type="reset" value="Reset"></span>
    
  </form>
  <?php }


?>

 
<?php include("includes/footer.inc"); ?>
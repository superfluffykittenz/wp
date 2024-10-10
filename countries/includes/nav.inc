    <nav>
      <a href="countriestable.php">Countries Table</a>
      <a href="countries.php">Countries Gallery</a>
<?php if(!empty($_SESSION['user'])) { ?>
      <a href="add.php">Add New Country</a>
      <a href="logout.php">Logout</a>
<?php } else { ?>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
<?php } ?>
    </nav>
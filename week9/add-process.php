<?php 
  include("includes/db_connect.inc"); 
  
  pre($_POST);
  pre($_FILES);

  echo "<p>Error: {$_FILES['image']['error']}</p>";
  if ($_FILES['image']['error'] == 0 && 
      substr($_FILES['image']['type'], 0, 6) == "image/" &&
      $_FILES['image']['name'] != ""
      ) 
  {
    echo ($_FILES['image']['tmp_name']);
    move_uploaded_file($_FILES['image']['tmp_name'],"/Applications/XAMPP/xamppfiles/htdocs/~e54061/wp/week9/images/".$_FILES['image']['name']);
  } else {
    echo "There was a problem with the file. Click here to go back";
  }

?>

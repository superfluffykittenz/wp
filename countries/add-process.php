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
    echo "<hr>";
    echo $imagePath.$_FILES['image']['name'];
    if (move_uploaded_file($_FILES['image']['tmp_name'],$imagePath.$_FILES['image']['name'])) {
      echo "<p>File was added to the images directory.</p>";
    } else {
      echo "<p>File was NOT added to the images directory.</p>";
    }
  } else {
    echo "<p>There is a problem with the file. Click here to go back.</p>";
  }

?>

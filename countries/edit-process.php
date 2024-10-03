<?php
  include("includes/db_connect.inc");

  pre($_POST);
  pre($_FILES);

/* Check if there is an image uploaded and prepare different statements to handle each case */  
  $sql = '';
  if (
    $_FILES['image']['error'] == 0 &&
    substr($_FILES['image']['type'], 0, 6) == "image/" &&
    !empty($_FILES['image']['name'])
  ) {
    // change / upload a new image
    $sql = "
      UPDATE country
      SET
        countryname = ?,
        description = ?,
        image = ?,
        caption = ?
      WHERE countryid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sssss",
      $_POST['countryname'], 
      $_POST['description'], 
      $_FILES['image']['name'], 
      $_POST['caption'],
      $_POST['countryid']
    );
  } else {
    // don't change / upload a new image
    echo "<p>Previous Image Unchanged.</p>";
    $sql = "
      UPDATE country
      SET
        countryname = ?,
        description = ?,
        caption = ?
      WHERE countryid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "ssss",
      $_POST['countryname'], 
      $_POST['description'], 
      $_POST['caption'],
      $_POST['countryid']
    );
  }

/* Update country in the database using a prepared statement */
    
  $stmt->execute();
  print_r($stmt->error);

/* If a country was modified in the database ... */
  if ($stmt->affected_rows > 0) {
    echo "<p>Country was modified in the database.</p>";
/* ... remove image of same name if it exists ... */      
    if (file_exists($imagePath.$_FILES['image']['name'])) {
      unlink($imagePath.$_FILES['image']['name']);
    }
/* ... move image from tmp folder to images folder ... */      
    if (move_uploaded_file($_FILES['image']['tmp_name'],$imagePath.$_FILES['image']['name'])) {
      echo "<p>File was added to the images directory.</p>";
    } else {
      echo "<p>File was NOT added to the images directory.</p>";
    }    
  } else {
    echo "<p>Country was not editied in the database, image not uploaded.</p>";
  }
  
  echo "<p>Return to <a href='countries.php'>countries gallery page</a>.</p>";
?>

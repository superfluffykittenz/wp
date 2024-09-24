<?php
  include("includes/db_connect.inc");

  pre($_POST);
  pre($_FILES);

/* Check if the image uploaded and is an image */  
  if (
    $_FILES['image']['error'] == 0 &&
    substr($_FILES['image']['type'], 0, 6) == "image/" &&
    !empty($_FILES['image']['name'])
  ) {

/* Add country to the database using a prepared statement */
    $sql = "
      INSERT INTO country (
        countryname, description, image, caption
      ) VALUES (
        ?,?,?,?
      )";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "ssss",
      $_POST['countryname'], 
      $_POST['description'], 
      $_FILES['image']['name'], 
      $_POST['caption']
    );
    $stmt->execute();
    print_r($stmt->error);

/* If a country was added to the database ... */
    if ($stmt->affected_rows > 0) {
      echo "<p>Country was added to the database.</p>";

/* ... move image from tmp folder to images folder ... */      
      if (move_uploaded_file($_FILES['image']['tmp_name'],$imagePath.$_FILES['image']['name'])) {
        echo "<p>File was added to the images directory.</p>";
      } else {
        echo "<p>File was NOT added to the images directory.</p>";
      }    
    } else {
      echo "<p>Country was not added to the database, image not uploaded.</p>";
    }
  } else {
    echo "<p>There is a problem with the image file.</p>";
  }
  echo "<p>Return to <a href='countries.php'>countries gallery page</a>.</p>";
?>

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

/* Create a variable for each element in $_POST, ie $name, $description, $caption */
    foreach ($_POST as $name => $value) {
      $$name = $value;
    }

/* Add country to the database using a prepared statement */
    $sql = "INSERT INTO country (countryname, description, image, caption) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss",$name, $description, $_FILES['image']['name'], $caption);
    $stmt->execute();
    print_r($stmt->errorInfo());

/* If a country was added to the database ... */
    if ($stmt->affected_rows > 0) {

/* ... try to move image from tmp folder to images folder ... */      
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

?>

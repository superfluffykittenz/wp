<?php
  include("includes/db_connect.inc");

  pre($_GET);

  $sqlNoWait = "SELECT image FROM country WHERE countryid = ?";
  $stmt = $conn->prepare($sqlNoWait);
  $stmt->bind_param("s", $_GET['id']);
  $stmt->execute();

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $imageToDelete = $imagePath.$row['image']; 

  pre([$sqlNoWait,$imageToDelete]);

  $sql = "DELETE FROM country WHERE countryid = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param(
    "s",
    $_GET['id']
  );
  
/* Delete country in the database using a prepared statement */
    
  $stmt->execute();
  print_r($stmt->error);

/* If a country was deleted in the database ... */
  if ($stmt->affected_rows > 0) {
    echo "<p>Country was deleted in the database.</p>";
/* ... remove image of same name if it exists ... */      
    if (file_exists($imageToDelete)) {
      unset($imageToDelete);
    }    
  } else {
    echo "<p>Country was not deleted in the database, image not removed.</p>";
  }
  
  echo "<p>Return to <a href='countries.php'>countries gallery page</a>.</p>";
?>

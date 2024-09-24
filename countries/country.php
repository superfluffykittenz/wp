<?php 
  include("includes/db_connect.inc"); 
  $title = "Country Detail";
  include("includes/header.inc"); 

  $sql = "select * from country where countryid = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$_GET['id']);
  $stmt->execute();
  // print_r($stmt->error);

  $result = $stmt->get_result();

?>

<div id="gallery">
<?php
  while($row = $result->fetch_assoc()) {
    // pre($row);
    echo <<<"CDATA"
  <div class="gallery-item">
    <h3>{$row['countryname']}</h3>
    <figure>
      <img src="images/{$row['image']}" alt="{$row['caption']}">
      <figcaption>{$row['caption']}</figcaption>
    </figure>
    <p>{$row['description']}</p>
    <p><a href="countries.php">Back to Gallery</a></p>
  </div>

CDATA;      
  }
?>
</div>

<?php include("includes/footer.inc"); ?>

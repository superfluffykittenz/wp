<?php 
  include("includes/db_connect.inc"); 
  $title = "Countries Gallery";
  include("includes/header.inc"); 

  $countries = mysqli_query($conn, "select * from country");

?>
<style>
  .gallery-item {
    border: 1px solid #666;
    padding: 5px;
    margin: 1px;
    display: inline-block;
  }
  .gallery-item figure {
    margin: 0px;
  }
  .gallery-item img {
    height: 200px;
    width: 350px;
    object-fit: cover;
    object-position: 50% 50%;
  }
</style>

<div id="gallery">
<?php
  while($row = mysqli_fetch_assoc($countries)) {
      //pre($row);
      echo <<<"CDATA"
  <div class="gallery-item">
    <h3>{$row['countryname']}</h3>
    <figure>
      <img src="images/{$row['image']}" alt="{$row['caption']}">
      <figcaption>{$row['caption']}</figcaption>
    </figure>
    <p><a href="country.php?id={$row['countryid']}">Read More</a></p>
  </div>

CDATA;      
  }
?>
</div>

<?php 
  include("includes/db_connect.inc"); 
  $exNum = 1;
  $title = "Countries Gallery";
  include("includes/header.inc"); 

  $countries = mysqli_query($conn, "select * from country");
  // while($row = mysqli_fetch_assoc($countries)) {
  //   echo "<pre>";
  //   print_r($row);
  //   echo "</pre>";
  // }

?>
<style>
  .gallery-item {
    border: 1px solid #666;
    padding: 5px;
    margin: 1px;
    display: inline-block;
  }
  .gallery-item img {
    height: 200px;
  }
</style>
<!-- <table>
  <tr>
    <th>Id</th><th>Name</th><th>Description</th><th>Image</th><th>Caption</th>
  </tr>
  
<?php  
  // while($row = mysqli_fetch_assoc($countries)) {
  //   echo "<tr>";
  //   foreach($row as $value ) {
  //     echo "<td>$value</td>";
  //   }
  //   echo "</tr>";
  // }

?>

</table> -->
<hr>

<?php
  while($row = mysqli_fetch_assoc($countries)) {
      //pre($row);
      echo <<<"CDATA"
  <div class="gallery-item">
    <h3>{$row['countryname']}</h3>
    <img src="images/{$row['image']}" alt="{$row['description']}">
    <p><a href="">Read More</a></p>
  </div>

CDATA;      
  }

?>
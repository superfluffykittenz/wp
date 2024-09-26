<?php 
  include("includes/db_connect.inc"); 
  $title = "Countries Table";
  include("includes/header.inc"); 

  $countries = mysqli_query($conn, "select * from country");

?>

<table id="countriestable">
  <tr>
    <th>Name</th><th>Image</th><th>Caption</th><th colspan="3">User Actions</th>
  </tr>

<?php
  while($row = mysqli_fetch_assoc($countries)) {
    echo "<tr>";
    
      echo "
        <td>{$row['countryname']}</td>
        <td><img src='images/{$row['image']}' alt='{$row['countryname']}'></td>
        <td>{$row['caption']}</td>
        <td>🔎 <a href='country.php?id={$row['countryid']}'>Details</a></td>
        <td>✍️ <a href='edit.php?id={$row['countryid']}'>Edit</a></td>
        <td>❌ <a href='delete.php?id={$row['countryid']}'>Delete</a></td>
        ";
    
    echo "</tr>";
  }

?>

</table>

<?php include("includes/footer.inc"); ?>
<?php 
  include("includes/db_connect.inc"); 
  $title = "Edit Country";
  include("includes/header.inc"); 
?>

<form method="post" action="add-process.php" enctype="multipart/form-data">
  <h2>Edit Existing Country</h2>
  <p><label for="countryname">Country Name</label><br>
  <input type="text" name="countryname" id="countryname"></p>
  <p><label for="description">Country Description</label><br>
  <textarea name="description" id="description"></textarea></p>
  <p><label for="image">Country Image</label><br>
  <input type="file" name="image" id="image"></p>
  <p><label for="caption">Image Caption</label><br>
  <input type="text" name="caption" id="caption"></p>
  <p><button type="submit">Add New Country</button></p>
</form>

</table>

<?php include("includes/footer.inc"); ?>

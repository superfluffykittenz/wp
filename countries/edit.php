<?php 
  include("includes/db_connect.inc"); 
  

  $sql = "select * from country where countryid = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $_GET['id']);
  $stmt->execute();
  // print_r($stmt->error);

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  pre($row);
  pre($imagePath);
  $title = "Edit " . $row['countryname'];

  include("includes/header.inc"); 
?>

<form method="post" action="edit-process.php" enctype="multipart/form-data">
  <fieldset>
    <legend>Edit Details</legend>
    <input type="hidden" name="countryid" value="<?= $row['countryid'] ?>">
    <p><label for="countryname">Country Name</label><br>
    <input type="text" name="countryname" id="countryname" value="<?= $row['countryname'] ?>"></p>
    <p><label for="description">Country Description</label><br>
    <textarea name="description" id="description"><?= $row['description'] ?></textarea></p>
    <p><label for="image">Country Image</label><br>
    <input type="file" name="image" id="image"> <span>Currently <?= $row['image'] ?> <img src="<?= 'images/'.$row['image'] ?>" ></span></p>
    <p><label for="caption">Image Caption</label><br>
    <input type="text" name="caption" id="caption" value="<?= $row['caption'] ?>"></p>
    <p><button type="submit">Update Country</button></p>
  </fieldset>
</form>

</table>

<?php include("includes/footer.inc"); ?>

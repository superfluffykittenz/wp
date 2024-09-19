<?php 
  include("includes/db_connect.inc"); 
  $exNum = 1;
  $title = "Wk08 Ex0" . $exNum;
  include("includes/header.inc"); 

  $countries = mysqli_query($conn, "select * from country");
  // while($row = mysqli_fetch_assoc($countries)) {
  //   echo "<pre>";
  //   print_r($row);
  //   echo "</pre>";
  // }

?>

<table>
  <tr>
    <th>Id</th><th>Name</th><th>Description</th><th>Image</th><th>Caption</th>
  </tr>
  
<?php  
  while($row = mysqli_fetch_assoc($countries)) {
    echo "<tr>";
    foreach($row as $value ) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
?>

</table>
<?php
  $name="Trevor";
  $myArray = [1,2,3,4,5,6,7,8,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    for ($i=0; $i<=count($myArray); ++$i)
      echo "<p>$myArray[$i]</p>";
  ?>

</body>
</html>
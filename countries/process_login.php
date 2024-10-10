<?php
  include("includes/db_connect.inc");

  $sql = "select * from users where username = ? and password = SHA(?)";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();

  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $_SESSION['user']['name'] = $username;
    $_SESSION['usrmsg'] =  "Welcome back $username";
  } else {
    $_SESSION['err'] =  "Who are you? Maybe type better next time?";
  }
  $conn->close();
  header("Location:countries.php");
  exit(0);
<?php
  session_start();
  $_SESSION['usrmsg'] =  "Bye {$_SESSION['user']['name']}, missing you already!";
  unset($_SESSION['user']);
  /* Do we really need to set fire to the shopping cart?
  session_unset();
  session_destroy();
  */
  header("Location:countries.php");
  exit(0);
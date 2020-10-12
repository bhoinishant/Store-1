<?php

  session_start();

  $login = "admin@admin.com";
  $password = "abc123";

  if($login == "" && $password == "") {
    $SESSION['login'] = true;
    echo "Success!";
  } else {
    echo "Error!";
  }


?>

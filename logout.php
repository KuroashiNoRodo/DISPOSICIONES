<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /DIDISEE2/login.php');
?>

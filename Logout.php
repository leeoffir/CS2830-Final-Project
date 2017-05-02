<?php
  session_start();
  session_unset();
  session_destroy();
  unset($_SESSION["nome"]);
  header("Location: index.php");
  exit();
?>

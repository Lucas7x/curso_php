<?php
  require_once("config.php");

  //unset($_SESSION["nome"]);   // desaloca variavel
  session_unset();            //desaloca tudo
  //session_destroy();
  echo $_SESSION["nome"];
?>

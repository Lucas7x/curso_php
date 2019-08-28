<?php
  require_once("config.php");

  //unset($_SESSION["nome"]);   // desaloca variavel
  session_unset();              //desaloca tudo
  //session_destroy();          //limpa variaveis e remove a sessão

  echo $_SESSION["nome"];
?>

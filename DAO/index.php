<?php
  require_once("config.php");

  /*
  //carrega um usuario
  $usuario = new Usuario();
  $usuario->loadById(1);
  echo $usuario;
  */

  //carrega uma lista de usuarios
  $lista = Usuario::getList();
  echo json_encode($lista);
?>

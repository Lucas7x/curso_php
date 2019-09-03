<?php
  require_once("config.php");

  /*
  //carrega um usuario
  $usuario = new Usuario();
  $usuario->loadById(1);
  echo $usuario;
  */

  /*
  //carrega uma lista de usuarios
  $lista = Usuario::getList();
  echo json_encode($lista);
  */

  /*
  //carrega usuarios buscando pelo login
  $search = Usuario::search("l");
  echo json_encode($search);
  */

  //carrega um usuario usando o login e setDessenha
  $usuario = new Usuario();
  $usuario->login("roota","qwerty");
  echo $usuario;

?>

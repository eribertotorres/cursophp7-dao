<?php

require_once("config.php");

/* carrega um usuário
$root = new Usuario();
$root->loadByID(3);
echo $root;
*/

/*Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista):*/

/*Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("jose","1234567890");

echo $usuario;

?>
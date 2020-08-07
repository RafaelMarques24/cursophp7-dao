<?php  

require_once("config.php");

// carrega um usuario.
//$root = new Usuario();
//$root->loadById(4);
//echo $root;
//----------------------------------------------------

// Carrega uma lista de usuarios
//$lista = Usuario ::getList();
//echo json_encode($lista);
//---------------------------------------------------------

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("roo");
//echo json_encode($search);

//-------------------------------------------------------------
 // Carrega um usuario USANDO O LOGIN E A SENHA

 //$usuario = new Usuario();
 //$usuario->login("root", "!@#$%");
//echo $usuario;

// Criando um novo usuario, usando insert
//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;

// ALTERANDO UM USUARIO PELA CLASSE DAO PHP
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "!@#$%¨&");
//echo $usuario;


$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;


?>
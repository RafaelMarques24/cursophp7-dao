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

 $usuario = new Usuario();
 $usuario->login("root", "!@#$%");

echo $usuario;

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>
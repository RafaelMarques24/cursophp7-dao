<?php  

require_once("config.php");

// carrega 1 usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;



//Carrega uma lista de usuarios

//$lista = Usuario::getlist();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario ::search("ro");

//echo json_encode($search);

// Carrega um usuario usando o login e a senha

$usuario = new Usuario();
$usuario->login("root","123456789");

echo $usuario;


//var_dump($lista);

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

?>
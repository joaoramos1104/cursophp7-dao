<?php 

    require_once("config.php");

/*
  $sql = new Sql();

  $usuarios = $sql->select("SELECT * FROM tb_usuarios");

  echo json_encode($usuarios);
  */

//-----------------------------------------------------

//Carrega um usuario
/*
  $user = new Usuario();

  $user->loadById(3);

  echo $user;
  */
//-----------------------------------------------------

//Carega uma lista de usuários
/*
  $lista = Usuario::getList();

  echo json_encode($lista);
  */
//-----------------------------------------------------

//Carrega uma lista de usuários buscando pelo login
/*
  $search = Usuario::search("m");

  echo json_encode($search);
  */
//-----------------------------------------------------
//Carrega  um usuário usando o login e senha //validando login e senha usuário
/*
  $usuario = new Usuario();
  $usuario->login("joao", "joaoabcd");

  echo $usuario;
  */

//-----------------------------------------------------

//iserir usuario e senha
/*
  $aluno = new Usuario("ana", "123er");

  //$aluno->setDeslogin("aluno");
  //$aluno->setDessenha("1104");

  $aluno->insert();

  echo $aluno;
*/

//-----------------------------------------------------
// Atualizando dados do usuario
/*
$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("professor", "bnfd123");

echo $usuario;
*/


//-----------------------------------------------------

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->delete();

echo $usuario;


?>
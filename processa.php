<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'useremail', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'usersenha', FILTER_SANITIZE_SPECIAL_CHARS);

// echo "Nome: $nome <br>";
// echo "Email: $email <br>";
// echo "Senha: $senha <br>";

$result_usuarios = "INSERT INTO tb_usuario (nome, email, senha, created) VALUES ('$nome', '$email', '$senha', NOW())";
$resultado_usuario = mysqli_query($conexao, $result_usuarios);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com sucesso!</p>";
    header("Location: cadastro.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso!</p>";
    header("Location: cadastro.php");   
}
?>
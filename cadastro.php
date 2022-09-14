<?php
session_start();
if(isset($_POST['userEmail'])){

        include('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['userEmail'];
        $senha = password_hash($_POST['userSenha'], PASSWORD_DEFAULT);

        $mysqli->query("INSERT INTO tb_usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')"); 

        if(mysqli_insert_id($mysqli)){
            $_SESSION['msg'] = "<script>
            alert('Dados gravados com sucesso!');</script>";
            header("Location: login.php");
        }else{
            $_SESSION['msg'] = "<script>
            alert('Dados não foram gravados!');</script>";
            header("Location: index.php"); 
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <div id="logo">
            <img src="img/Logo.svg" alt="">
        </div>
        <form method="post">
            <label>Nome Completo</label>
            <input type="text" name="nome" id="name" class="input" maxlength="30" required >
            <label>E-mail</label>
            <input type="email" name="userEmail" id="email" class="input" maxlength="30" required>
            <label>Senha</label>
            <input type="password" name="userSenha" id="password" class="input" maxlength="15" required>
            <input type="submit" id="cadastrar" value="Cadastrar">
            <div>
                <span>Tem uma conta?</span>
                <a href="#">Entre</a>
            </div>
        </form>
    </main>
</body>

</html>
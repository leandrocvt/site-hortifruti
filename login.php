<?php
    session_start();
    if(isset($_POST['userEmail'])){

        include("conexao.php");
        $email = $_POST['userEmail'];
        $senha = $_POST['userSenha'];

        $sql_code = "SELECT * FROM tb_usuario WHERE email = '$email' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])){
            echo "<script>alert('Login feito com sucesso!');</script>";
        }else{  
            echo "<script>alert('Senha ou E-mail incorretos!');</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <main>
        <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <div id="logo">
            <img src="img/Logo.svg" alt="">
        </div>
        <form method="post">
            <label>E-mail</label>
            <input type="email" name="userEmail" id="name" class="input" maxlength="30" required>
            <label>Senha</label>
            <input type="password" name="userSenha" id="password" class="input" maxlength="30" required>
            <input type="submit" id="login" value="Entrar">
            <p>Esqueceu a senha?</p>
            <div>
                <span>Novo no Hortifruti?</span>
                <a href="#">Cadastre-se</a>
            </div>
        </form>
    </main>
</body>

</html>
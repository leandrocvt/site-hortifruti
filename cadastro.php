<?php
session_start();
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
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <div id="logo">
            <img src="img/Logo.svg" alt="">
        </div>
        <form method="POST" action="processa.php">
            <label>Nome Completo</label>
            <input type="text" name="nome" id="name" class="input" maxlength="30" required >
            <label>E-mail</label>
            <input type="email" name="useremail" id="email" class="input" maxlength="30" required>
            <label for="usersenha">Senha</label>
            <input type="password" name="usersenha" id="password" class="input" maxlength="15" required>
            <input type="submit" id="cadastrar" value="Cadastrar">
            <div>
                <span>Tem uma conta?</span>
                <a href="#">Entre</a>
            </div>
        </form>
    </main>
</body>

</html>
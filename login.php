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
        <div id="logo">
            <img src="img/Logo.svg" alt="">
        </div>
        <form action="#">
            <label for="useremail">E-mail</label>
            <input type="email" name="useremail" id="name" class="input" maxlength="30" required>
            <label for="userpassword">Senha</label>
            <input type="password" name="userpassword" id="password" class="input" maxlength="30" required>
            <input type="button" id="login" value="Entrar">
            <p>Esqueceu a senha?</p>
            <div>
                <span>Novo no Hortifruti?</span>
                <a href="#">Cadastre-se</a>
            </div>
        </form>
    </main>
</body>

</html>
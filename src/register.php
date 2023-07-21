<!-- <?php
        include 'connect.php';
        ?> -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoveLOL - Registro</title>
    <link rel="stylesheet" href="./css/loginAndRegister.css" />
</head>

<body>
    <main class="backgroundContainer">
        <h1>¡Bienvenido a LoveLOL!</h1>
        <div class="loginOrRegister">
            <button id="loginButton">Inicia sesión</button>
            <button id="registerButton" disabled>Regístrate</button>
        </div>
        <h2>Regístrate</h2>
        <!-- <?php include 'controller.php'; ?> -->
        <form method="post" action="processSignUp.php">
            <div class="labelAndInput">
                <label for="user">Nombre de usuario</label>
                <input type="text" placeholder="User" name="user" id="user" />
                <span class="errorMessage"></span>
            </div>
            <div class="labelAndInput">
                <label for="email">Correo electrónico</label>
                <input type="email" placeholder="E-mail" name="email" id="email" />
                <span class="errorMessage"></span>
            </div>
            <div class="labelAndInput">
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Password" name="password" id="password" />
                <span class="errorMessage"></span>
            </div>
            <div class="labelAndInput">
                <label for="confPassword">Confirma tu contraseña</label>
                <input type="password" placeholder="Password" name="confPassword" id="confPassword" />
                <span class="errorMessage"></span>
            </div>
            <input type="submit" value="Entrar" />
        </form>
    </main>
</body>
<script src="./js/register.js" type="module"></script>

</html>
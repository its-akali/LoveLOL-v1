<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoveLOL - Login</title>
    <link rel="stylesheet" href="./css/loginAndRegister.css" />
</head>

<body>
    <main class="backgroundContainer">
        <h1>¡Bienvenido a LoveLOL!</h1>
        <div class="loginOrRegister">
            <button id="loginButton" disabled>Inicia sesión</button>
            <button id="registerButton">Regístrate</button>
        </div>
        <h2>Inicia sesión</h2>
        <form method="post">
            <div class="labelAndInput">
                <label for="user">Nombre de usuario</label>
                <input type="text" placeholder="User" name="user" id="user" />
                <span class="errorMessage"></span>
            </div>
            <div class="labelAndInput">
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Password" name="password" id="password" />
                <span class="errorMessage"></span>
            </div>
            <input type="submit" name="submit" value="Entrar" id="submitButton" />
        </form>
    </main>
</body>
<script src="./js/login.js" type="module"></script>

</html>
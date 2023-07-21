<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require "database.php";
    $sql = sprintf(
        "SELECT * FROM `users` WHERE user='%s'",
        $mysqli->real_escape_string($_POST['user'])
    ); // Avoid SQL injection

    $result = $mysqli->query($sql); // Execute query
    $user = $result->fetch_assoc(); // Return query result in assoc array

    if ($user) {
        if (password_verify($_POST['password'], $user["password_hash"])) { // Check pass hash

            session_start();
            $_SESSION["user_id"] = $user["id"];

            header('location: index.php');
            exit;
        }
    }

    $is_invalid = true;
}

?>

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
        <?php if ($is_invalid) : ?>
            <span class="errorMessage" style="display: block;">Credenciales incorrectas.</span>
        <?php endif; ?>
        <form method="post">
            <div class="labelAndInput">
                <label for="user">Nombre de usuario</label>
                <input type="text" placeholder="User" name="user" id="user" value="<?= htmlspecialchars($_POST['user'] ?? "") ?>" />
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
<?php
if (!empty($_POST['submit'])) {
    if (empty($_POST['user']) or empty($_POST['password'])) {
        echo '<span class="errorMessage" style="display: block;">Los campos están vacíos.</span>';
    } else {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $sql = $con->query("SELECT * FROM `users` WHERE user='$user' AND password='$password'");
        if ($data = $sql->fetch_object()) {
            header('location:home.php');
        } else {
            echo '<span class="errorMessage" style="display: block;">Los datos son erróneos.</span>';
        }
    }
}

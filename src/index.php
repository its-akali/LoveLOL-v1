<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoveLOL</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <header id="header">
        <div class="header__container">
            <img src="./img/logo.png" alt="logo-LoveLol" class="logo">
            <img src="./img/NombreEquipo.png" alt="title-img" class="title-logo">
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu-items">
            <li><a href="./login.php">Log In</a></li>
            <li><a href="./register.php">Sign Up</a></li>
            <!-- <li><a href="#">Profile</a></li> -->
        </ul>
    </header>
    <main id="main">
        <h1 class="main__title">Products</h1>

        <?php
        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($con, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $category = $row['category'];
                $description = $row['description'];
                $price = $row['price'];

                echo '
                <div class="main__post">
                <div class="main__img-container">
                    <img src="./img/' . $description . '.png" alt="' . $description . '">
                </div>
                <div class="main__text-container">
                    <h3>' . $name . '</h3>
                    <h3>' . $price . '€</h3>
                </div>
                <div class="main__buttons">
                    <div>
                        <button class="main__heart-button"><i class="fa-regular fa-heart"></i></button>
                        <button class="main__heart-button"><i class="fa-regular fa-eye"></i></button>
                    </div>
                    <button class="main__add-button">Add to cart</button>
                </div>
            </div>';
            }
        }
        ?>

    </main>
    <footer>
        <p>www.riotgames.com</p>
        <p>© 2023 Company, Inc. All rights reserved.</p>
    </footer>
    <script src="./home.js"></script>
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
</body>

</html>
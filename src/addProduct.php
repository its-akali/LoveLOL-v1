<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `products` (name, category, description, price) VALUES ('$name', '$category', '$description', '$price')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script language="javascript">alert("Data inserted successfully!");</script>';
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
</head>

<body>
    <main>
        <form method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Product name" required autocomplete="off">
            </div>
            <div>
                <label for="name">Category</label>
                <input type="text" name="category" id="category" placeholder="Product category" required autocomplete="off">
            </div>
            <div>
                <label for="name">Description</label>
                <input type="text" name="description" id="description" placeholder="Product description" required autocomplete="off">
            </div>
            <div>
                <label for="name">Price</label>
                <input type="number" name="price" id="price" step=".01" placeholder="Product price" required autocomplete="off">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
        <a href="./adminPanel.php">Admin Panel</a>
    </main>
</body>

</html>
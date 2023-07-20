<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `products` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$category = $row['category'];
$description = $row['description'];
$price = $row['price'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE `products` SET name='$name', category='$category', description='$description', price=$price WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:adminPanel.php');
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
                <input type="text" name="name" id="name" placeholder="Product name" value=<?php echo $name; ?> required autocomplete="off">
            </div>
            <div>
                <label for="name">Category</label>
                <input type="text" name="category" id="category" placeholder="Product category" value=<?php echo $category; ?> required autocomplete="off">
            </div>
            <div>
                <label for="name">Description</label>
                <input type="text" name="description" id="description" placeholder="Product description" value=<?php echo $description; ?> required autocomplete="off">
            </div>
            <div>
                <label for="name">Price</label>
                <input type="number" name="price" id="price" step=".01" placeholder="Product price" value=<?php echo $price; ?> required autocomplete="off">
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
        <a href="./adminPanel.php">Admin Panel</a>
    </main>
</body>

</html>
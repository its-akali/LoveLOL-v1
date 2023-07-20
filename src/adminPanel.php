<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoveLOL</title>
</head>

<body>
    <main>
        <a href="./addProduct.php">Add products</a>
        <table>
            <thead>
                <tr>
                    <th scope="1">ID</th>
                    <th scope="1">Name</th>
                    <th scope="1">Category</th>
                    <th scope="1">Description</th>
                    <th scope="1">Price</th>
                    <th scope="1">Operations</th>
                </tr>
            </thead>
            <tbody>
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
                        <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $category . '</td>
                            <td>' . $description . '</td>
                            <td>' . $price . '</td>
                            <td>
                                <button><a href="update.php?updateid=' . $id . '">Update</a></button>
                                <button><a href="delete.php?deleteid=' . $id . '">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>
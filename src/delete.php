<?php

include './connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `products` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:adminPanel.php');
    } else {
        die(mysqli_error($con));
    }
}

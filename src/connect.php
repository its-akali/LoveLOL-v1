<?php

$con = new mysqli('mysql_db', 'root', 'root', 'LoveLOL');
$con->set_charset("utf8");

if (!$con) {
    die(mysqli_error($con));
}

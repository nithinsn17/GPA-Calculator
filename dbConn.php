<?php

$server = "localhost";
$userName = "root";
$pwd = "1234";

$dbName = "DevOpsProject";

$conn = mysqli_connect($server, $userName, $pwd, $dbName);

if (!$conn) {
    echo "<script><alert>Connection Failed!</alert></script>";
}
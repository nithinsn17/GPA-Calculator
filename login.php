<?php
session_start();
include "dbConn.php";

if (isset($_POST['userName']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$user = validate($_POST['userName']);
$pass = validate($_POST['password']);

if (empty($user) || empty($pass)) {
    echo '<script>Fill in all the fields!</script>';
    header("Location: index.php");
}

$sql = "SELECT * FROM users WHERE email = '$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 0) {

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $insertSql = "INSERT INTO users (email, password) VALUES ('$user', '$hashedPassword')";
    mysqli_query($conn, $insertSql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script><alert>User created!</alert></script>";
        header("Location:examForm.php");
    } else {
        echo "<script><alert>Failed to create user!</alert></script>";
        header("Location:index.php");
    }
} else if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $user && password_verify($pass, $row['password'])) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header("Location: examForm.php");
        echo '<script><alert>Logged in!</alert></script>';
        // exit();
    } else {
        header("Location: index.php");
        echo "<script><alert>Incorrect details!</alert></script>";
        // exit();
    }
} else {
    header("Location:index.php");
    exit();
}

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

    $user = validate($_POST['userName']);
    $pass = validate($_POST['password']);

    if (empty($user) || empty($pass)) {
        echo '<script>alert("Fill in all the fields!");</script>';
        header("Location: index.php");
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = '$user'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 0) {
        // User does not exist, create a new user
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        $insertSql = "INSERT INTO users (email, password) VALUES ('$user', '$hashedPassword')";
        mysqli_query($conn, $insertSql);

        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('User created!');</script>";
            $_SESSION['email'] = $user;
            header("Location: examForm.php");
            exit();
        } else {
            echo "<script>alert('Failed to create user!');</script>";
            header("Location: index.php");
            exit();
        }
    } else if ($result && mysqli_num_rows($result) === 1) {
        // User exists, verify the password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['password'])) {
            $_SESSION['email'] = $user;
            header("Location: examForm.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!');</script>";
            header("Location: index.php");
            exit();
        }
    } else {
        echo "<script>alert('Error occurred while accessing user data!');</script>";
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($username, $mail, $hash) = explode('|', $user);
        if ($mail == $email && password_verify($password, $hash)) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $mail;
            header("Location: dashboard.php");
            exit();
        }
    }
    header("Location: index.php");
    exit();
}
?>

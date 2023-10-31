<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $user = "$username|$email|$password\n";
    file_put_contents("users.txt", $user, FILE_APPEND);
    header("Location: index.php");
    exit();
}
?>

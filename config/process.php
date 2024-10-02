<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'MangaHinogCreate');
define('DB_PASS', 'mangahinog');
define('DB_NAME', 'mangahinog');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    if ($action == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $user['username'];

                header("Location: ../index.php");
                exit();
            } else {
                echo "Invalid email or password!";
            }
        } else {
            echo "No user found with this email!";
        }
    }

    if ($action == 'signup') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password != $confirm_password) {
            die("Passwords do not match!");
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../signup_success.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}

$conn->close();
?>

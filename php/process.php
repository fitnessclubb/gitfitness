<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    if ($action == "register") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = $conn->query($sql);

        if ($result) {
            header("Location: login.php");
        } else {
            echo "Ошибка при регистрации: " . $conn->error;
        }
    } elseif ($action == "login") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($password == $row["password"]) {
                $_SESSION['is_log'] = $row["username"];
                header('Location: ../index.php');
                exit(); // Важно добавить exit() после использования header()
            } else {
                echo "Неверный пароль";
            }
        } else {
            echo "Пользователь не найден";
        }
    }
}

$conn->close();

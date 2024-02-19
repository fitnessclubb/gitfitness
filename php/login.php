<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Авторизация</title>
</head>

<body>
    <div class="auth-block">

        <h2 class="auth-title">Авторизация</h2>
        <form action="process.php" method="post">
            <input type="hidden" name="action" value="login">
            <label class="inp" for="username">Имя</label>
            <input type="text" name="username" required>
            <label for="password">Пароль:</label>
            <input type="password" name="password" required>
            <button type="submit">Войти</button>
            <a href="reg.php">Ещё нет аккаунта?</a>
        </form>
    </div>


</body>

</html>
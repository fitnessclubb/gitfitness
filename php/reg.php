<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Регистрация</title>
</head>

<body>

    <div class="auth-block">
        <h2 class="auth-title">Регистрация</h2>

        <form action="process.php" method="post">
            <input type="hidden" name="action" value="register">
            <label for="username">Имя</label>
            <input type="text" name="username" required>
            <label for="password">Пароль:</label>
            <input type="password" name="password" required>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>


</body>

</html>
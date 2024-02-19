<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Профиль</title>
</head>

<body>
    <div class="profile-bg">
        <div class="container">
            <?php
            include('php/header.php');
            ?>
            <?php

            $username = $_SESSION['is_log']; // Если имя пользователя не найдено, используем 'Гость'

            // Получение пути к изображению профиля из базы данных
            $sql = "SELECT profile_picture FROM users WHERE username = '$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $profilePicture = $row['profile_picture'];
            } else {
                $profilePicture = ''; // Если изображение не найдено
            }
            $_SESSION['photo'] = $profilePicture;

            // Закрытие соединения с базой данных
            $conn->close();
            ?>
            <div class="info-block">

                <div class="photo-block">
                    <div class="photo-block-item">
                        <form id="uploadForm" action="php/photo-upl.php" method="post" enctype="multipart/form-data">
                            <input type="file" id="photoUpload" name="uploadedFile" style="display: none;" onchange="handleFileUpload(this)">
                            <img class="ava" onclick="openFileUploader()" src="<?php echo $profilePicture; ?>">
                        </form>
                    </div>
                    <div class="photo-block-item">
                        <h1 class="us-name-p">Имя пользователя: <?php echo $_SESSION['is_log'];?></h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/upl.js"></script>

</html>
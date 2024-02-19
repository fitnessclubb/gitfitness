<?php
// Подключение к базе данных
include("db.php");

session_start(); // Если сессии еще не были запущены

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["uploadedFile"]) && $_FILES["uploadedFile"]["error"] == UPLOAD_ERR_OK) {
        // Получение информации о файле
        $fileName = $_FILES["uploadedFile"]["name"];
        
        // Для сохранения
        $uploadDirSave = __DIR__ . '/../uploads/';
        $filePathSave = $uploadDirSave . $fileName;

        // Для вывода
        $uploadDirDisplay = './uploads/';
        $filePathDisplay = $uploadDirDisplay . $fileName;

        // Перемещение файла на сервер
        if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $filePathSave)) {
            // Получение имени пользователя из сессии
            $username = $_SESSION['is_log'] ?? 'Гость'; // Если имя пользователя не найдено, используем 'Гость'

            // Обновление записи в базе данных
            $sql = "UPDATE users SET profile_picture = '$filePathDisplay' WHERE username = '$username'";
            $result = $conn->query($sql);

            if ($result) {
                $_SESSION['photo'] = $filePathDisplay;
                echo "Фотография профиля успешно загружена.";
                header("Location: ../profile.php");
            } else {
                echo "Ошибка при обновлении записи в базе данных: " . $conn->error;
            }
        } else {
            echo "Ошибка при перемещении файла на сервер.";
        }
    } else {
        echo "Ошибка при загрузке файла.";
    }
}

// Закрытие соединения с базой данных
$conn->close();
?>

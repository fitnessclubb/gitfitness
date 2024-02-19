<?php
require '../vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Настройка транспорта (SMTP)
    $transport = new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl');
    $transport->setUsername('mooonnight@bk.ru'); // Укажите свой SMTP-логин
    $transport->setPassword('Pxmy95CHzSSS4dhmEnqu'); // Укажите свой SMTP-пароль

    // Создание объекта Swift Mailer с использованием транспорта
    $mailer = new Swift_Mailer($transport);

    try {
        // Создание объекта Swift Message
        $swiftMessage = new Swift_Message('Новое сообщение с формы'); // Тема письма
        $swiftMessage->setFrom(['mooonnight@bk.ru' => 'Bobik']); // Отправитель
        $swiftMessage->setTo(['mooonnight@bk.ru' => 'Bobik']); // Получатель
        $swiftMessage->setBody("Имя: $name<br>Телефон: $phone<br>Сообщение: $message", 'text/html'); // Тело письма

        // Отправка письма
        $result = $mailer->send($swiftMessage);

        if ($result) {
            echo '<script>alert("Письмо успешно отправлено!");</script>';
            header("Location: ../index.php");
        } else {
            echo '<script>alert("Ошибка при отправке письма.");</script>';
        }
    } catch (Exception $e) {
        echo '<script>alert("Ошибка при отправке письма: ' . $e->getMessage() . '");</script>';
    }
}
?>

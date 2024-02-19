<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>О нас</title>
</head>

<body>
    <div class="bg-1">
        <div class="container">
            <?php
            include('./php/header.php');
            ?>

            <h1 class="head-title">О клубе</h1>

        </div>
    </div>

    <div class="bg-2">
        <div class="container">
            <div class="time-block">
                <h1 class="time-title">FITNESS CLUB</h1>
                <p class="time-text"> Это современный фитнес-клуб, предоставляющий широкий спектр услуг для заботы о
                    вашем физическом здоровье и благополучии. Наш клуб оборудован современными тренажерами и предлагает
                    разнообразные групповые занятия по фитнесу, йоге, пилатесу и другим направлениям.</p>


                <div class="time-block-flex">
                    <div class="time-block-flex-item">
                        <h1 class="time-block-flex-item-title">Часы работы клуба </h1>
                        <span class="time-block-flex-item-span">Будние: 06:30 – 01:00, <br>
                            Выходные: 08:30 – 00:00</span>
                    </div>
                    <div class="time-block-flex-item-stick">
                        <img src="./images/stick.png" alt="" class="time-block-flex-item-stick">
                    </div>

                    <div class="time-block-flex-item">
                        <h1 class="time-block-flex-item-title">Часы работы отдела продаж </h1>
                        <span class="time-block-flex-item-span">Ежедневно: 10:00 – 21:00</span>
                    </div>
                    <div class="time-block-flex-item-stick">
                        <img src="./images/stick.png" alt="" class="time-block-flex-item-stick">
                    </div>

                    <div class="time-block-flex-item">
                        <h1 class="time-block-flex-item-title">Местоположение</h1>
                        <span class="time-block-flex-item-span">г. Москва, ул. Бауманская. д.22</span>
                    </div>
                    <div class="time-block-flex-item-stick">
                        <img src="./images/stick.png" alt="" class="time-block-flex-item-stick">
                    </div>

                </div>

                <h1 class="form-title">Остались вопросы?</h1>
                <div class="form-block">
                    <form action="" class="form-question">
                        <input type="text" class="form-input" placeholder="Имя" required>
                        <input id="phone" type="text" class="form-input" placeholder="Телефон" required>
                        <input type="text" class="form-input" placeholder="Сообщение" required>
                        <div class="button-form">
                            <button class="btn">Записаться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-3">
        <div class="container">
            <div class="dop-block">
                <div class="dop-block-flex">
                    <div class="dop-block-item">
                        <img src="./images/sword.png" alt="" class="dop-slide-btn">
                    </div>
                    <div class="dop-block-item">
                        <h1 class="dop-title">Дополнительные услуги</h1>
                        <p class="dop-text"> <span style="margin-left: 50px;"> Посетив нашу сауну или бассейн, вы можете
                                насладиться целым рядом </span>
                            дополнительных услуг. Вас ждут уютные массажные процедуры, возможность посещения солярия для
                            идеального загара, а также доступ к современному фитнес-залу для поддержания формы.</p>
                        <p class="dop-text">
                            <span style="margin-left: 50px;">Помимо этого, на территории есть ресторан или кафе, где вы
                                сможете насладиться вкусными </span>
                            блюдами и напитками. Также вас ожидают различные виды водных процедур, включая гидромассаж и
                            джакузи. Наше заведение также предлагает уютные зоны отдыха для полного расслабления после
                            сеансов в сауне или плавания в бассейне.
                        </p>
                        <div class="button-dop">
                            <button class="btn">Подробнее</button>
                        </div>
                    </div>
                    <div class="dop-block-item">
                        <img src="./images/sword-right.png" alt="" class="dop-slide-btn">
                    </div>
                </div>
                <div class="dop-elements">
                    <div class="dop-elements-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="12" viewBox="0 0 49 12" fill="none">
                            <path d="M6 6H43" stroke="white" stroke-width="11" stroke-linecap="round" stroke-linejoin="bevel" />
                        </svg>
                    </div>
                    <div class="dop-elements-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="12" viewBox="0 0 49 12" fill="none">
                            <path d="M6 6H43" stroke="white" stroke-opacity="0.32" stroke-width="11" stroke-linecap="round" stroke-linejoin="bevel" />
                        </svg>
                    </div>
                    <div class="dop-elements-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="12" viewBox="0 0 49 12" fill="none">
                            <path d="M6 6H43" stroke="white" stroke-width="11" stroke-linecap="round" stroke-linejoin="bevel" />
                        </svg>
                    </div>
                    <div class="dop-elements-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="12" viewBox="0 0 49 12" fill="none">
                            <path d="M6 6H43" stroke="white" stroke-width="11" stroke-linecap="round" stroke-linejoin="bevel" />
                        </svg>
                    </div>
                    <div class="dop-elements-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="12" viewBox="0 0 49 12" fill="none">
                            <path d="M6 6H43" stroke="white" stroke-width="11" stroke-linecap="round" stroke-linejoin="bevel" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="bg-4">
        <div class="container">
            <div class="reviews-block">
                <h1 class="reviews-title">Отзывы о клубе</h1>
                <form class="otz-block" action="php/otz.php" method="POST">
                    <input class="otz-in" type="text" name="reviewText" id="" placeholder="Введите отзыв">
                    <button value="submit">Отправить</button>
                </form>
                <div class="reviews-flex-block">
                        <?php
                        include("php/db.php");

                        $sql = "SELECT * FROM reviews";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // Вывод отзывов
                            while ($row = $result->fetch_assoc()) {
                                echo "
                        <div class='reviews-flex-item'>
                            <div class='reviews-flex-item-ava'>
                                <h1 class='reviews-flex-item-text-t'>{$row['username']}</p
                            </div>

                        <div class='reviews-flex-item-text'>
                            <p class='reviews-flex-item-text-t'>{$row['review']}</p
                        </div>
                        </div>
                                    ";
                            }
                        } else {
                            echo "Отзывов пока нет.";
                        }
                        ?>


                </div>
            </div>

            <footer>
                <div class="footer-logo">
                    <div class="footer-logo-flex">
                        <div class="footer-logo-item">
                            <img src="./images/logo-footer2.png" alt="" class="ft-logo">
                        </div>
                    </div>
                </div>
                <div class="footer-text">
                    <a href="./index.php" class="text-item">Главная</a>
                    <a href="./about.php" class="text-item">О клубе</a>
                    <a href="./contact.php" class="text-item">Контакты</a>
                </div>
                <div class="footer-social">
                    <img src="./images/vk-social-network-logo.png" alt="" class="social-item">
                    <img src="./images/youtube.png" alt="" class="social-item">
                    <img src="./images/twitter.png" alt="" class="social-item">
                </div>
            </footer>
        </div>
    </div>



</body>

</html>
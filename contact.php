<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Контакты</title>
</head>

<body>
    <div class="bg-1">
        <div class="container">
            <?php
            include('./php/header.php');
            ?>

            <h1 class="head-title">Контакты</h1>

        </div>
    </div>
    <div class="bg-2">
        <div class="container">
            <div class="social-block">
                <h1 class="social-title">Социальные сети</h1>

                <div class="social-block-flex">
                    <div class="social-block-flex-item">
                        <img src="./images/vk2.png" alt="" class="social-image">
                        <p class="social-flex-span">Vkontakte</p>
                    </div>

                    <div class="social-block-flex-item">
                        <img src="./images/yt2.png" alt="" class="social-image">
                        <p class="social-flex-span">YouTube</p>
                    </div>

                    <div class="social-block-flex-item">
                        <img src="./images/tw2.png" alt="" class="social-image">
                        <p class="social-flex-span">Twitter</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-3">
        <div class="container">
            <div class="mesto-block">
                <h1 class="mesto-title">Местоположение</h1>
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
                <div class="map-block">
                    <img src="./images/map.png" alt="" class="map-image">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-4">
        <div class="container">
            <div class="faq-block">
                <h1 class="faq-title">FAQ</h1>

                <div class="faq-flex">

                    <div class="faq-flex-item">
                        <div class="faq-flex-item-flex">
                            <div class="faq-flex-item-l">
                                <h1 class="faq-flex-title">Что входит в абонемент?</h1>
                            </div>
                            <div class="faq-flex-item-l">
                                <img src="./images/arrowqir.png" alt="" class="faq-flex-itm">
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="faq-flex-item">
                        <div class="faq-flex-item-flex">
                            <div class="faq-flex-item-l">
                                <h1 class="faq-flex-title">Есть ли гостевой визит в клубе?</h1>
                            </div>
                            <div class="faq-flex-item-l">
                                <img src="./images/arrowqir.png" alt="" class="faq-flex-itm">
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="faq-flex-item">
                        <div class="faq-flex-item-flex">
                            <div class="faq-flex-item-l">
                                <h1 class="faq-flex-title">С какого возраста можно посещать клуб?</h1>
                            </div>
                            <div class="faq-flex-item-l">
                                <img src="./images/arrowqir.png" alt="" class="faq-flex-itm">
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="faq-flex-item">
                        <div class="faq-flex-item-flex">
                            <div class="faq-flex-item-l">
                                <h1 class="faq-flex-title">Можно ли заморозить абонемент?</h1>
                            </div>
                            <div class="faq-flex-item-l">
                                <img src="./images/arrowqir.png" alt="" class="faq-flex-itm">
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="faq-flex-item">
                        <div class="faq-flex-item-flex">
                            <div class="faq-flex-item-l">
                                <h1 class="faq-flex-title">Что взять с собой в клуб?</h1>
                            </div>
                            <div class="faq-flex-item-l">
                                <img src="./images/arrowqir.png" alt="" class="faq-flex-itm">
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
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
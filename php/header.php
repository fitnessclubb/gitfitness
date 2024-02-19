<?php
session_start();
include("db.php");
$is_log = isset($_SESSION['is_log']) ? $_SESSION['is_log'] : '';
$profilephoto = isset($_SESSION['photo']) ? $_SESSION['photo'] : '';
?>

<header>
    <nav class="navbar">
        <div class="nav-logo-block">
            <a href="./index.php"><img src="./images/logosnow.png" alt="logotype" class="logo"></a>
        </div>
        <div class="nav-links">
            <a href="./index.php" class="nav-item underline-one">Главная</a>
            <a href="./about.php" class="nav-item underline-one">О клубе</a>
            <a href="./contact.php" class="nav-item underline-one">Контакты</a>
        </div>
        <div class="nav-profile">
            <?php
            if (empty($is_log)) {
            ?>
                <a href="./php/login.php" class="nav-item"><img src="./images/profile.png" alt="" class="profile-img"></a>
            <?php
            } else {
            ?>
                <div class="user-menu-container" onmouseover="showMenu()" onmouseout="hideMenu()">
                    <div class="menu-flex">
                        <div class="menu-flex-item">
                            <img class="menu-ava" src="<?php echo $_SESSION['photo']; ?>" alt="fds">

                        </div>
                        <div class="menu-flex-item">
                            <h1 class="us-name"><?php echo $is_log; ?></h1>

                        </div>
                    </div>
                    <div class="user-menu" id="userMenu">
                        <ul>
                            <a href="profile.php">
                                <li>Профиль</li>
                            </a>
                            <a href="./php/exit.php">
                                <li>Выход</li>
                            </a>
                        </ul>
                    </div>
                </div>



            <?php
            }
            ?>
        </div>
    </nav>
</header>
<script src="./js/menu.js"></script>
<!DOCTYPE html>
<html lang="ru">

<?php
session_start();
$auth = $_SESSION['auth'] ?? null;
include_once('function.php');

?>

<head>
    <title>Демо версия SPA-салона</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <p> г.Зеленоград, к 1504 Тел.: 8 (495) 562-58-69</p>
    </header>

    <section class="title">
        <nav class="header__menu">
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
        <h2 class='header_user'>
            <?php
            if (!getCurrentUser()) {
                echo 'Здравствуйте, гость!';
            } else {
                echo 'Здравствуйте, ' . getCurrentUser() . '!';
                echo '</br>';
            }
            ?>
            <!-- время входа на сайт -->
            <?php
            session_start();
            if (getCurrentUser()) {
                if (empty($_SESSION['time'])){
                $_SESSION['time'] = time();
                }
                // echo time() - $_SESSION['time'];
            }

            $discount_time = $_SESSION['time'] + 86400;
            $discount = $discount_time - time();
            $h = $discount / 3600;
            $m = ($discount % 3600) / 60;
            $s = $discount % 60;
            $discount_str = sprintf('%02d:%02d:%02d',$h,$m,$s); 
            ?>
            <!-- ввод даты рождения -->
            <?php
            // if (getCurrentUser()) {?>
            <!-- <div>
                <label>Введите дату рождения:</label>
                <input type="date" name="birthday">
                <button type="submit"> Отправить </button>
            </div>  -->
            <?php //} ?>
        </h2>
        <div class='user_name'>
            <?php
            if (!getCurrentUser()) {
                echo '<a href="login.php">Войти</a>';
            } else {
                echo '<a href="exit.php">Выйти</a>';
            }
            ?>
        </div>
    </section>
    <h2 class="action">
        <?php
        if (getCurrentUser()) {
            echo 'До конца персональной скидки осталось:' . $discount_str;?>

            <section class="news">
                <article>
                    <a href="#">
                        <h3>Акция 24 часа</h3>
                    </a>
                    <img
                        src="https://i.ytimg.com/vi/M-gDYgiM9GQ/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgZShlMA8=&rs=AOn4CLBWGnFJ2lvZCHxmRQyV-zRqly_SDg">
                    <ul class="info">
                        <h4>В течении 24 часов вы можете получить сертификат на массаж</h4>

                        <li>Только сегодня и только сейчас</li>

                    </ul>
                </article>
            </section>
        <?php } ?>
    </h2>

    <h2 class="services">Услуги</h2>

    <section class="news">
        <article>
            <a href="#">
                <h2>Традиционный тайский массаж</h2>
            </a>
            <div class="article-meta">
                Мастер <a href="#">Мария Рюрикова</a>
            </div>
            <img
                src="https://catherineasquithgallery.com/uploads/posts/2023-01/1674272735_catherineasquithgallery-com-p-massazh-serii-fon-foto-10.jpg">
            <ul class="info">
                <h4>Основными терапевтическими действиями – и для мужчин, и для женщин – считаются:</h4>

                <li>Приток жизненной силы, энергии, бодрости;</li>
                <li>Укрепление иммунной системы, в том числе, в рамках борьбы с вирусами, бактериями, грибком;</li>
                <li>Снижение или полное исчезновение головных, суставных, мышечных болей, мигреней;</li>
                <li>Улучшение кровотока и лимфотока, что ведет к снятию застоев, отечностей, онемений;</li>
                <li>Улучшение состояния кожных покровов, мышечной ткани, работы внутренних органов;</li>
                <li>Общая глубокая релаксация, успокоение, благотворное влияние на мозг и нервную систему в целом –
                    полная перезагрузка организма.</li>
            </ul>
            <ul class='pricelist'>
                <p>Стоимость</p>
                <li>60 минут — 3600₽</li>
                <li>90 минут — 5400₽</li>
                <li>120 минут — 7200₽</li>
            </ul>
        </article>
    </section>

    <section class="news">
        <article>
            <a href="#">
                <h2>Хаммам</h2>
            </a>
            <div class="article-meta">
                Мастер <a href="#">Майя Пономаренко</a>
            </div>
            <img src="https://st12.stpulscen.ru/images/product/437/811/933_big.jpg">
            <ul class="info">
                <h3>Польза и преимущества посещения хаммама</h3>
                <li>Очищение и омолаживание кожи </li>
                <li>Обновление легочной ткани </li>
                <li>Ускорение метаболизма </li>
                <li>Стимуляция сердечно-сосудистой системы</li>
                <li>Благоприятное влияние на мозг и нервную систему </li>
                <h3>Противопоказания</h3>
                <li>При острой сердечной недостаточности</li>
                <li>Острая гипертония</li>
                <li>почечных заболеваниях,</li>
                <li>болезнях щитовидной железы,</li>
                <li>при плохом самочувствии,</li>
                <li>лихорадке,</li>
                <li>ознобе.</li>
                <li>Крайне не рекомендуется баня и астматикам.</li>

            </ul>
            <ul class='pricelist'>
                <p>Стоимость</p>
                <li>60 минут — 3600₽</li>
                <li>90 минут — 5400₽</li>
                <li>120 минут — 7200₽</li>
            </ul>
        </article>
    </section>

    <footer>
        <div class="links">
            <a href="#">Вакансии</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
            <a href="#">Реклама</a>
        </div>
        <div class="copyright">Copyright Ⓒ Демо версия SPA-салона</div>
    </footer>

</body>

</html>
<?php
    require_once('./serv/MAIN.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="KOSHELENKOV_M_YU_VD50-1-19.css">
    <title>Bauzer</title>
</head>
<body>
    <div class="container">
       <?php require('./Nav.php'); ?>

       
        <main>
            <section class="banner">
                <p class="banner__welcome">Добро пожаловать в спортзал bauzer</p>
                <p class="banner__desc">Найди себя в спорте</p>
            </section>
            <section class="program">
                <hr class="orange__line">
                <p class="program__title">Популярная программа</p>
                <div class="container__program">
                    <div class="sport">
                        <img class="sport__img" src="img/img_4.png" alt="">
                        <p class="sport__title">Пауэрлифтинг</p>
                        <p class="sport__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы</p>
                        <button class="sport__about">Узнать больше</button>
                    </div>
                    <div class="sport">
                        <img class="sport__img" src="img/img_3.jpg" alt="">
                        <p class="sport__title">Кроссфит</p>
                        <p class="sport__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы</p>
                        <button class="sport__about">Узнать больше</button>
                    </div>
                    <div class="sport">
                        <img class="sport__img" src="img/img_2.jpg" alt="">
                        <p class="sport__title">Бой с телом</p>
                        <p class="sport__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы</p>
                        <button class="sport__about">Узнать больше</button>
                    </div>
                </div>
            </section>
            <section class="about">
                <div class="about__banner"></div>
                <div class="about__desc">
                    <hr class="orange__line1">
                    <p class="about__title">Спортзал</p>
                    <blockquote class="about__quote">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. Ясность нашей позиции очевидна: существующая теория требует анализа существующих финансовых и административных условий. Вот вам яркий пример современных тенденций — высокое качество позиционных исследований в значительной степени обусловливает важность переосмысления внешнеэкономических политик!</blockquote>
                    <button class="about__about">Узнать больше</button>
                </div>
            </section>
            <section class="trener">
                <hr class="orange__line">
                <p class="trener__title">Лучший тренер</p>
                <div class="trener__img"></div>
                <p class="trener__name">Анастасия мельникова</p>
                <p class="trener__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. </p>
                <button class="trener__ready">Сделать меня своим тренером</button>
            </section>
            <section class="type__sport">
                <hr class="orange__line">
                <p class="type__titleh">Виды занятий</p>
                <div class="container__type">
                    <div class="type">
                        <img class="type__1" src="img/image1.png" alt="" center>
                        <p class="type__title">Работа с весом</p>
                        <p class="type__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                        <a class="type__about" href="#">Узнать больше</a>
                    </div>
                    <div class="type">
                        <img class="type__2" src="img/image2.png" alt="" center>
                        <p class="type__title">Работа с весом</p>
                        <p class="type__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                        <a class="type__about" href="#">Узнать больше</a>
                    </div>
                    <div class="type">
                        <img class="type__3" src="img/image3.png" alt="" center>
                        <p class="type__title">Работа с весом</p>
                        <p class="type__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                        <a class="type__about" href="#">Узнать больше</a>
                    </div>
                    <div class="type">
                        <img class="type__4" src="img/image4.png" alt="" center>
                        <p class="type__title">Работа с весом</p>
                        <p class="type__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                        <a class="type__about" href="#">Узнать больше</a>
                    </div>
                    <div class="type">
                        <img class="type__5" src="img/image5.png" alt="" center>
                        <p class="type__title">Работа с весом</p>
                        <p class="type__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                        <a class="type__about" href="#">Узнать больше</a>
                    </div>
                    <div class="type">
                        <img class="type__6" src="img/image6.png" alt="" center>
                        <p class="type__title">Работа с весом</p>
                        <p class="type__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                        <a class="type__about" href="#">Узнать больше</a>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer__about">
                <p class="footer__header">О нас</p>
                <p class="footer__desc">Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы</p>
                <button class="footer__next">Узнать больше</button>
            </div>
            <div class="footer__menu">
                <p class="menu__header">Быстрое меню</p>
                <ul class="menu__nav">
                    <li><a href="#">Главная страница</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Политика</a></li>
                </ul>
            </div>
            <div class="foooter__social">
                <p class="social__title">Социальные сети</p>
                <img class="instagram" src="img/instagram.svg" alt="">
                <img class="youtube" src="img/youtube.svg" alt="">
                <img class="telegram" src="img/telegram.svg" alt="">
            </div>
        </footer>
    </div>
</body>
</html>
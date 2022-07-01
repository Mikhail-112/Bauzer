<?php
    require_once('./serv/MAIN.php');
    $query = $pdo->prepare("SELECT * from News");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);   


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
           <section class="container__news">
               <?php foreach($result as $news) :?>
                <div class="news__item" style="position: relative;">
                    <a href="./changeNews.php?news=<?= $news['id_news'] ;?>" style="position:absolute;right: 10px; top: 10px">Редактировать </a>
                    <a href="./serv/deketeNews.php?news=<?= $news['id_news'] ;?>" style="position:absolute;left: 10px; top: 10px">X </a>
                    <img class="news__img" src="./ServImages/<?= $news['file'] ;?>" alt="">
                    <p class="news__header"><?= $news['title'] ;?></p>
                    <p class="news__date"><?= $news['news_date'] ;?></p>
                    <p class="news__desc"><?= $news['content'] ;?></p>
                </div>
               <?php endforeach; ?>
              
                
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
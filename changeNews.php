<?php
    require_once('./serv/MAIN.php');

    if (!isset($_GET['news'])){
        header('Location: ./KOSHELENKOV_M_YU_VD50-1-19_news.php');
        

    }
    $query = $pdo->prepare("SELECT * FROM `News` WHERE `id_news`=?");
    $query->execute(array($_GET['news']));
    $result = $query->fetch();

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
        
            <section class="zayavka">
          
                <form class="anketa" action="./serv/updateNews.php">
                    <input type="hidden" name="news" value="<?= $_GET['news'];?>">
                    <h2 style="margin-bottom: 30px">Изменение новости</h2>
                    <p class="anketa__title">Логин</p>
                    <input value="<?= $result['title'] ;?>" type="text" value=""  placeholder="Заголовок" name="title" id="" class="anketa__input">
                    <p class="anketa__title">Контент</p>
                    <textarea name="content" id="" cols="30" rows="10" class="anketa__input_1"><?= $result['content'] ;?></textarea>
                 

                    <a href="./sign_in.php" style="margin-right: 30px; color: gray;">Еще не зарегестрированы?</a>
                    <button type="submit" class="sport__about_1">Отправить</button>
                </form>
                <div class="information">
                    <p class="information__title">Контактная информация</p>
                    <p class="information__header">Адрес</p>
                    <p class="information__desc">Климентовский пер., 75, Москва, 151112</p>
                    <p class="information__header">Почта</p>
                    <p class="information__desc">bauzer@gmail.com</p>
                    <p class="information__header">Телефон</p>
                    <p class="information__desc">+7 999 883 74 32</p>
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
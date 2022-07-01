<?php
    require_once('./serv/MAIN.php');

    // $_SESSION['AUTH'] = NULL;

    $query = $pdo->prepare("SELECT * FROM `Users_trains` 
    JOIN GymMasters ON GymMasters.id_gym_master=Users_trains.id_gym_master
    join Train on Train.ID_train=Users_trains.ID_train
    WHERE ID_user=?");
    $query->execute(array($AUTH['ID_user']));
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
           <section class="profile">
              <h2 style="padding-bottom: 30px"><?= $AUTH['name'];?>, это Ваш профиль - <a style="color: green" href="./serv/exit.php">Выйти</a></h2> 

            <?php if(count($result)) :?>
                <h3>Тренировки, на которые вы записаны</h3>
              <div class="profile__trains">
                  <?php foreach($result as $userTrain) :?>
                    <div class="profile__train-item">
                        <form class="profile__train-delete" action="./serv/leaveTrain.php">
                            <button name="id-train" value="<?= $userTrain['ID_user_train'] ;?>">X</button>
                        </form>
                        <div class="profile__train-name">
                            <?= $userTrain['train_name'] ;?>
                        </div>
                        <div class="profile__train-date">
                           Дата окончания абонемента:         <?= $userTrain['dateEnd'] ;?>
                        </div>
                        <div class="profile__train-trener">
                            Тренер:     <?= $userTrain['name'] ;?>
                        </div>
                    </div>
                  <?php endforeach; ?>
            <?php else :?>      <h3>Вы еще не записывались на тренировки</h3>
            <?php endif; ?>
            
                  
                   
              </div>
           </section>

           <style>
              
           </style>
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
<?php

echo 1;
    var_dump($_GET);
    require_once('./MAIN.php');


    $query = $pdo->prepare("UPDATE `News` SET `title`= ? ,`content`=? WHERE `id_news`= ? ");
    $query->execute(array(
        $_GET['title'],
        $_GET['content'],
        $_GET['news'],
    ));

    header('Location: ../KOSHELENKOV_M_YU_VD50-1-19_news.php');


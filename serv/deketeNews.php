<?php
 
    require_once('./MAIN.php');
    $query = $pdo->prepare("DELETE FROM `News` WHERE `id_news`=?");
    $query->execute(array($_GET['news']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    header('Location: ../KOSHELENKOV_M_YU_VD50-1-19_news.php');

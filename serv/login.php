<?php
    require_once('./MAIN.php');

    $query = $pdo->prepare("SELECT * FROM `Users` WHERE login=? and password=?");
    $query->execute(array($_GET['login'], $_GET['password']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($result)){
        $_SESSION['AUTH'] = $result[0];
        header('Location: ../KOSHELENKOV_M_YU_VD50-1-19_index.php');
    } else{
        echo 'Неверный данные аккаунта';
    }



?>
<?php
    require_once('./MAIN.php');


    $query = $pdo->prepare("SELECT * FROM `Users` WHERE login=? ");
    $query->execute(array($_GET['login']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($result)){
       echo 'Аккаунт с таким логином уже есть';
    } else{
        $query = $pdo->prepare("INSERT INTO `Users`(`login`, `password`, `name`) VALUES (?,?,?)");
        $query->execute(array(
            $_GET['login'],
            $_GET['password'],
            $_GET['name'],

        ));
        header('Location: ../KOSHELENKOV_M_YU_VD50-1-19_index.php');
    }

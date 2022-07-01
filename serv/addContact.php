<?php
    require_once('./MAIN.php'); 
    var_dump($_GET);

    $query = $pdo->prepare("INSERT INTO `Contacts`( `fio`, `email`, `phone`, `about`) VALUES (?, ?, ?, ?)");
    $query->execute(array(
        $_GET['fio'],
        $_GET['email'],
        $_GET['phone'],
        $_GET['about'],

    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    header('Location: ../KOSHELENKOV_M_YU_VD50-1-19_index.php');

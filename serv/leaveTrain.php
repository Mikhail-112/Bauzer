<?php
    require_once('./MAIN.php');
    var_dump($_GET);

    $query = $pdo->prepare("DELETE FROM `Users_trains` WHERE `ID_user_train`=?");
    $query->execute(array($_GET['id-train']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    header('Location: ../profile.php');
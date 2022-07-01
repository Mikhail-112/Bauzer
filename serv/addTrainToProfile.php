<?php
    require_once('./MAIN.php');

    if (!$AUTH){
        header('Location: ../KOSHELENKOV_M_YU_VD50-1-19_index.php');
    }



    $query = $pdo->prepare("INSERT INTO `Users_trains`( `ID_user`, `ID_train`, `dateEnd`,id_gym_master) VALUES (?, ?, DATE_ADD( CURRENT_DATE(), INTERVAL 1 MONTH), ?)");
    try {
        $query->execute(array(
            $AUTH['ID_user'],
            $_GET['train'],
            $_GET['trener'],
    
    
    
        ));
    } catch (\Throwable $th) {
       echo 'Вы записаны на данную тренировку';
    }
  
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
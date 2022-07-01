<?php
    require_once('./MAIN.php');
    echo 1;

    var_dump($_POST);

    if (!count($_FILES)){
        header('Location: ../admin.php');
    }

    $name = upload_image($_FILES['file'], '../ServImages');
   $query = $pdo->prepare("INSERT INTO `News`(`title`, `content`,  `file`, news_date) VALUES (?,?,?, current_date())");
   $query->execute(
       array(
           $_POST['title'],
           $_POST['content'],
           $name,
       )

   );
   header('Location: ../admin.php');


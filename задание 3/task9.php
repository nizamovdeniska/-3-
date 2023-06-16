<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      session_save_path('./');
      session_start();
      if (!isset($_SESSION['counter'])) 
      $_SESSION['counter'] = 0;
      $message ="m";
      if($_SESSION['counter'] == 0){
          echo "Вы не обновляли страницу!";
        echo "Кол-во обновлений 0";
        
        
          $_SESSION['counter']++;
      }
      else{
        
        
          echo "Страницу обновляли - " . $_SESSION['counter'] . " раз!";
          $_SESSION['counter']++;
      }
      
    ?>
</body>
</html>

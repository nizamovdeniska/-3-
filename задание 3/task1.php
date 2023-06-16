<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         function isNumberInRange($number){
            if ($number > 0 && $number < 10) {
              return true;
            } else {
              return false;
            }
        }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       require("count.txt");

       $fs = fopen("count.txt","r+");
       
       file_put_contents("count.txt",file_get_contents("count.txt") + 1);
       
       fclose($fs);
    ?>
</body>
</html>

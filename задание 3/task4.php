<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function cut($string, $length = 10){
            return substr($string, 0, $length);
        }
        //Задача 5
        $arr = array('1' => 1,'2' => 2);
        function arrayNum($arr){
            echo array_shift($arr);
            if(!empty($arr)) arrayNum($arr);
            else return;
        }
        arrayNum($arr)."<br>";
    ?>
</body>
</html>

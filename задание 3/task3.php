<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function isEven($num){
            return $num % 2 == 0;
        }
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $newArray = [];
        foreach($numbers as $num) {
            if(isEven($num)) {
                $newArray[] = $num;
            }
        }
        print_r($newArray);
    ?>
</body>
</html>

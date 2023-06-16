<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function printArrayRec($arr){
            echo $arr[0] . "<br>";
            $newArr = array_slice($arr,1);
            if(count($newArr) > 0) printArrayRec($newArr);
            else echo "done";
        }
        
        $arr = range(-100, 100);
        shuffle($arr );
        $arr = array_slice($arr ,0,rand(2,10));
        $arrStr = implode(",",$arr);
        echo "массив чисел - [$arrStr] <br>";
        $test = [1];
        printArrayRec($arr);
    ?>
</body>
</html>

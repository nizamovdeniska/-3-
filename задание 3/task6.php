<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("test.txt");

        $fs = fopen("test.txt","r");
        readfile("test.txt");
        echo "<br>";
        
        while ( $line = fgets($fs) ){
          echo $line . "<br>";
        }
        fclose($fs);
    ?>
</body>
</html>

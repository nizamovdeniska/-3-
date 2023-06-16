<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $fileNames = ["1.txt","2.txt","3.txt"];
       foreach ($fileNames as $fileName) {
           file_put_contents($fileName, "!", FILE_APPEND);
       }
       foreach ($fileNames as $fileName) {
           readfile($fileName);
           echo "<br>";
       }
    ?>
</body>
</html>

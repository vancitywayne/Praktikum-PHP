<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Kontrol Do While</title>
</head>
<body>
    <h2>Penggunaan Kontrol Do While</h2>
    Kelipatan 3 adalah
    <?php
    $i=0;
    $var=0;
    do{
        $var+=3;
        echo("$var,");
        $i++;
    }while($i<=4)
    ?>
</body>
</html>
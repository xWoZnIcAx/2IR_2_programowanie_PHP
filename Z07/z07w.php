<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z07w</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $kelwin = $a + 273.15;
    $farenheit = ($a * 1.8) + 32;


    echo "Temperatura w celcjuszach: $a<br>
          Temperatura w kelwinach: $kelwin<br>
          Temperatura w farenheitach: $farenheit";

    ?>
</section>
</body>
</html>
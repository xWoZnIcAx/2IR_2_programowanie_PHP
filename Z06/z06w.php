<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z05w</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $p = ($a + $b + $c)/2;

    $S = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));


    echo "Liczba a: $a<br>
          Liczba b: $b<br>
          Liczba c: $c<br>
          Wynik: $S ";
    ?>
</section>
</body>
</html>
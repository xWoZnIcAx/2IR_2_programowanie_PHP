<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z02w</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">

    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    $srednia = ($a + $b + $c + $d)/4;
    $srednia_zaokrąglona = round(($a + $b + $c + $d)/4);

    echo "Liczba a: $a<br>
          Liczba b: $b<br>  
          Liczba c: $c<br> 
          Liczba d: $d<br> 
          Średnia: $srednia<br>
          Średnia zaokrąglona: $srednia_zaokrąglona ";


    ?>
</section>
</body>
</html>
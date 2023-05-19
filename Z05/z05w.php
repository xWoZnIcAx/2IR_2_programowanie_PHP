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

    $suma = $a + $b;
    $roznica = $a - $b;
    $iloczyn = $a * $b;
    $iloraz = $a / $b;



    echo "Liczba a: $a<br>
          Liczba b: $b<br>
          Suma: $suma<br>
          Różnica: $roznica<br>
          Iloczyn: $iloczyn<br>
          Iloraz: $iloraz";
    ?>
</section>
</body>
</html>

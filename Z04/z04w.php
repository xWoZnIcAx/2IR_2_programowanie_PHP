<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z04w</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    $liczba = $a / $b;

    $iloraz = round($liczba, 2);

    echo "Liczba a: $a<br>
          Liczba b: $b<br>
          Iloraz: $iloraz";
    ?>
</section>
</body>
</html>
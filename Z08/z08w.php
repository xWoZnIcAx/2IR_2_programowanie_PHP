<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z08w</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $godziny = floor($a / 3600);
    $minuty = floor(($a % 3600) / 60);
    $sekundy = $a % 60;

    $wynik = "";
    if ($godziny > 0) {
        $wynik .= $godziny . "g";
    }
    if ($minuty > 0) {
        $wynik .= $minuty . "m";
    }
    if ($sekundy > 0) {
        $wynik .= $sekundy . "s";
    }

    echo "Wynik: $wynik"
    ?>
</section>
</body>
</html>
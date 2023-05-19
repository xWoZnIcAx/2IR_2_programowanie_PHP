<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z12w</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    function generujLiczby($a, $b) {
        $liczby = [];
        for ($i = 0; $i < 5; $i++) {
            $liczba = rand($a, $b);
            $liczby[] = $liczba;
        }
        return $liczby;
    }

    function obliczSume($liczby) {
        return array_sum($liczby);
    }

    function obliczIloczyn($liczby) {
        $iloczyn = 1;
        foreach ($liczby as $liczba) {
            $iloczyn *= $liczba;
        }
        return $iloczyn;
    }

    function obliczSrednia($liczby) {
        $suma = obliczSume($liczby);
        $srednia = $suma / count($liczby);
        return $srednia;
    }

    $wygenerowaneLiczby = generujLiczby($a, $b);
    echo "Wygenerowane liczby: " . implode(", ", $wygenerowaneLiczby) . "<br>";
    echo "Suma: " . obliczSume($wygenerowaneLiczby) . "<br>";
    echo "Iloczyn: " . obliczIloczyn($wygenerowaneLiczby) . "<br>";
    echo "Średnia: " . obliczSrednia($wygenerowaneLiczby) . "<br>";




    ?>
</section>
</body>
</html>

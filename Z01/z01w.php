<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 01 - powitanie z imieniem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $imie = $_POST['imie'] ;
    echo "<h1>Witaj $imie!!!<br>Miło cię widziec na naszej stronie";
    ?>
</section>

</body>
</html>

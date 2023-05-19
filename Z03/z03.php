<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 03</h1>
    <h2>Autor: Krystian Woźnica 2_Ir</h2><hr>
</header>
<section>
    <form action="z03w.php" method="post">
        <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
        <label for="a">Podaj a:</label>
        <input type="number" id="a" step="any" name="a">
        <label for="b">Podaj b:</label>
        <input type="number" id="b" step="any" name="b">
        <label for="c">Podaj c:</label>
        <input type="number" step="any" id="c" name="c">
        <label for="d">Podaj d:</label>
        <input type="number" step="any" id="d" name="d">
        <input type="submit" value="wyslij">
    </form>
</section>
</body>
</html>

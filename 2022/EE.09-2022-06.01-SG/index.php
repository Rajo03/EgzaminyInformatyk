<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Forum miłośników psów</h1>
    </div>
    <div id="lewy">
        <img src="Avatar.png" alt="Użytkownik forum">
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'forumpsy');
            $zapytanie1 = "SELECT konta.nick, konta.postow, pytania.pytanie FROM konta, pytania WHERE konta.id=pytania.konta_id AND pytania.id=1";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while($wiersz1 = mysqli_fetch_row($wynik1)){
                echo "<h4>Użytkownik: $wiersz1[0]</h4>";
                echo "<p>$wiersz1[1] postów na forum</p>";
                echo "<p>$wiersz1[2]</p>";
            }
        ?>
        <video controls loop>
            <source src="video.mp4" type="video/mp4">
        </video>
    </div>
    <div id="prawy">
        <form action="index.php" method="get">
            <textarea name="odp" cols="40" rows="4"></textarea> <br>
            <input type="submit" value="Dodaj odpowiedź">
        </form>
        <?php
            if(!empty($_GET['odp'])){
                $odp = $_GET['odp'];
                $zapytanie2 = "INSERT INTO odpowiedzi VALUES (NULL, '1', '5', '$odp')"; 
                $wynik2 = mysqli_query($polaczenie, $zapytanie2);   
            }
        ?>
        <h2>Odpowiedź na pytanie</h2>
        <?php
            //skrypt 3
            $zapytanie3 = "SELECT odpowiedzi.id, odpowiedzi.odpowiedz, konta.nick FROM konta, odpowiedzi WHERE konta.id=odpowiedzi.konta_id AND odpowiedzi.Pytania_id=1";
            $wynik3 = mysqli_query($polaczenie, $zapytanie3); 
            echo "<ol>"; 
            while($wiersz3 = mysqli_fetch_row($wynik3)){
                echo "<li>$wiersz3[1] <em>$wiersz3[2]</em><hr></li>";
            }
            echo "</ol>"; 
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
        Autor: PESEL <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>
    </div>
</body>
</html>
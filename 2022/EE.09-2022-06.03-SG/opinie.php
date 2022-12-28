<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="baner">
        <h1>Hurtownia spożywcza</h1>
    </div>
    <div id="glowny">
        <h2>Opinie naszych klientów</h2>
        <?php
            //skrypt 1
            $polaczenie = mysqli_connect('localhost', 'root', '', 'hurtownia');
            $zapytanie1 = "SELECT klienci.zdjecie, klienci.imie, opinie.opinia FROM klienci, opinie WHERE klienci.id=opinie.Klienci_id AND klienci.Typy_id in(2,3)";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while($wiersz1 = mysqli_fetch_row($wynik1)){
                echo "
                    <div class='opinie'>
                        <img src='$wiersz1[0]' alt='klient'>
                        <blockquota>$wiersz1[2]</blockquota>
                        <h4>$wiersz1[1]</h4>
                    </div>
                ";
            }
        ?>
    </div>
    <div id="stopka1">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </div>
    <div id="stopka2">
        <h3>Nasi top klienci</h3>
        <?php
            //skrypt 2
            $zapytanie2 = "SELECT imie, nazwisko, punkty FROM klienci ORDER by punkty DESC limit 3";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);echo "<ol>";
            while($wiersz2 = mysqli_fetch_row($wynik2)){
                    echo "<li>$wiersz2[0] $wiersz2[1], $wiersz2[2]</li>"; 
            }
            echo "</ol>";
        ?>
    </div>
    <div id="stopka3">
        <h3>Skontaktuj się</h3>
        <p>telefon: 1112222333</p>
    </div>
    <div id="stopka4">
        <h3>Autor: PESEL</h3>
    </div>
</body>
</html>
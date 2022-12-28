<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Wynajmujemy samochody</title>
</head>
<body>
	<div id="cont">
		<div id="baner">
			<h1>Wynajem Samochodów</h1>			
		</div>
		<div id="pl">
			<h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
			<?php
				$host="localhost";
				$user="root";
				$passwd="";
				$dbname="wynajem";
				$polaczenie=mysqli_connect($host,$user,$passwd,$dbname);
				$sql="SELECT id,marka,kolor FROM samochody WHERE marka LIKE 'Toyota' AND  rocznik = 2014";
				$wynik=mysqli_query($polaczenie,$sql);
				while($wiersz=mysqli_fetch_assoc($wynik))
				{		
					echo '<ol>'.$wiersz['id'].' '.$wiersz['marka'].' '.$wiersz['kolor'].'</ol>';
				}
				mysqli_close($polaczenie);
			?>
			<h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
			<?php
				$host="localhost";
				$user="root";
				$passwd="";
				$dbname="wynajem";
				$polaczenie=mysqli_connect($host,$user,$passwd,$dbname);
				$sql="SELECT id,marka,model,rocznik FROM samochody";
				$wynik=mysqli_query($polaczenie,$sql);
				while($wiersz=mysqli_fetch_assoc($wynik))
				{		
					echo '<ol>'.$wiersz['id'].' '.$wiersz['marka'].' '.$wiersz['model'].' '.$wiersz['rocznik'].' ' .'		</ol>';
				}
				mysqli_close($polaczenie);
			?>
		</div>
		<div id="ps">
			<h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
			<?php
				$host="localhost";
				$user="root";
				$passwd="";
				$dbname="wynajem";
				$polaczenie=mysqli_connect($host,$user,$passwd,$dbname);
				$sql="SELECT samochody.id, samochody.model, zamowienia.telefon FROM zamowienia, samochody WHERE samochody.id= zamowienia.id";
				$wynik=mysqli_query($polaczenie,$sql);
				while($wiersz=mysqli_fetch_assoc($wynik))
				{		
					echo '<ol>'.$wiersz['id'].' '.$wiersz['model'].' '.$wiersz['telefon'].' '.'</ol>';
				}
				mysqli_close($polaczenie);
			?>
		</div>	
		
		<div id="pp">
			<h2>NASZA OFERTA</h2>
			<li>Fiat</li>
			<li>Toyota</li>
			<li>Opel</li>
			<li>Mercedes</li>
	<p>Tu pobierzesz naszą <a href="komis.sql">bazę danych </a></p>
	<p>Autor strony</p>
		</div>
		
	</div>

</body>
</html>
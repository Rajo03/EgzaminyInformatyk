<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Komis Samochodowy</title>
</head>
<body>
	<div id="cont">
		<div id="baner">
			<h1>SAMOCHODY</h1>			
		</div>
		<div id="pl">
			<h2>Wykaz samochodów</h2>
			<?php
				$host="localhost";
				$user="root";
				$passwd="";
				$dbname="komis";
				$polaczenie=mysqli_connect($host,$user,$passwd,$dbname);
				$sql="SELECT id,marka,model FROM samochody";
				$wynik=mysqli_query($polaczenie,$sql);
				while($wiersz=mysqli_fetch_assoc($wynik))
				{		
					echo '<li>'.$wiersz['id'].' '.$wiersz['marka'].' '.$wiersz['model'].'</li>';
				}
				mysqli_close($polaczenie);
			?>
			<h2>Zamówienia</h2>
			<?php
				$host="localhost";
				$user="root";
				$passwd="";
				$dbname="komis";
				$polaczenie=mysqli_connect($host,$user,$passwd,$dbname);
				$sql="SELECT Samochody_id,Klient FROM zamowienia";
				$wynik=mysqli_query($polaczenie,$sql);
				while($wiersz=mysqli_fetch_assoc($wynik))
				{		
					echo '<li>'.$wiersz['Samochody_id'].' '.$wiersz['Klient'].' ' .'		</li>';
				}
				mysqli_close($polaczenie);
			?>
		</div>
		<div id="pp">
			<h2>Pełne dane: Fiat</h2>
			<?php
				$host="localhost";
				$user="root";
				$passwd="";
				$dbname="komis";
				$polaczenie=mysqli_connect($host,$user,$passwd,$dbname);
				$sql="SELECT id,marka,model,rocznik,kolor,stan FROM samochody WHERE marka LIKE 'Fiat'";
			$wynik=mysqli_query($polaczenie,$sql);
			while($wiersz=mysqli_fetch_assoc($wynik))
			{		
			echo $wiersz['id'].' / '.$wiersz['marka'].' / '.$wiersz['model'].' / '.$wiersz['rocznik'].' / '.$wiersz['kolor'].' / '.$wiersz['stan'].'</br>';
		}
		mysqli_close($polaczenie);
	?>
		</div>
		<section>
  			<table style="width:100%">
  				<tr>
    			<th><a href="kwerendy.txt">Kwerendy</a></th>
    			<th>Autor:</th>
    			<th><img src="auto.png"></th>
  				</tr>
  			</table>
		</section>
	</div>

</body>
</html>
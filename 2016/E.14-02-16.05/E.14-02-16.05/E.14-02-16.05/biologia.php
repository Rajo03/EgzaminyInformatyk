<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl.css">
	<title>Szkoła Podstawowa</title>
</head>
<body>
	<header>
		<h1>Oceny uczniów: biologia</h1>
	</header>
	<nav>
		<h2>Uczeń: 
			<?php 
				$connect = mysqli_connect('localhost','root','','szkola');
				$ask = "SELECT `uczen`.`imie`, `uczen`.`nazwisko` FROM `uczen` WHERE `uczen`.`id`=1";
				$result = mysqli_query($connect,$ask);
				while ($line=mysqli_fetch_row($result)) 
				{
					echo $line[0].' '.$line[1];
				}


				mysqli_close($connect);
			 ?>
		</h2>
		<p>Najwyższa ocena z biologii: 
			<?php 			 
				$connect = mysqli_connect('localhost','root','','szkola');
				$ask = "SELECT MAX(`ocena`.`ocena`) FROM `ocena` INNER JOIN `uczen` On `uczen`.`id`= `ocena`.`uczen_id` Where `uczen`.`id` = 1 AND `ocena`.`przedmiot_id`= 4";
				$result = mysqli_query($connect,$ask);
				while ($line=mysqli_fetch_row($result)) 
				{
					echo $line[0];
				}


				mysqli_close($connect);			 
			?>
		</p>
	</nav>
	<main>
		<h3>Nazwiska i numery PESEL uczniów: </h3>
		<ul>
			<?php 				 
				$connect = mysqli_connect('localhost','root','','szkola');
				$ask = "SELECT `uczen`.`nazwisko`, `uczen`.`PESEL` FROM `uczen`";
				$result = mysqli_query($connect,$ask);
				while ($line=mysqli_fetch_row($result)) 
				{
					echo '<li>'.$line[0].' '.$line[1].'</li>';
				}


				mysqli_close($connect);			
			?>
		</ul>
	</main>
	<footer>
		<h3>Szkoła Podstawowa</h3>
		<p>Stronę opracował: </p>
	</footer>
</body>
</html>
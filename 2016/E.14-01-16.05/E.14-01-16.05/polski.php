<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styl.css">
	<meta charset="utf-8">
	<title>Szkoła Ponadgimnazjalna</title>
</head>
<body>
	<header>
		<h1>Oceny uczniów: język polski</h1>
	</header>
	<nav>
		<h2>Lista uczniów: </h2>
		<ol>
		<?php 
			$connect=mysqli_connect("localhost","root","","szkola");
			$ask="SELECT `uczen`.`imie`, `uczen`.`nazwisko` FROM `uczen`";
			$result=mysqli_query($connect,$ask);			
			while($line=mysqli_fetch_row($result))
			{
				echo '<li>'.$line[0].' '.$line[1].'</li>';
			}
			
			mysqli_close($connect);
		 ?>
		</ol>
	</nav>
	<main>
		<h2>Uczeń: 
		<?php 
			$connect=mysqli_connect('localhost','root','','szkola');
			$ask="SELECT `uczen`.`imie`, `uczen`.`nazwisko` FROM `uczen` WHERE `uczen`.`id` = 2;";
			$result=mysqli_query($connect,$ask);
			while($line=mysqli_fetch_row($result))
			{
				echo $line[0].' '.$line[1];
			}

			mysqli_close($connect);
		 ?>
		 </h2>
		<p>Średnia ocen z języka polskiego:
		<?php 
			$connect=mysqli_connect('localhost','root','','szkola');
			$ask="SELECT AVG(`ocena`.`ocena`) FROM `ocena` WHERE `ocena`.`uczen_id` = 2 AND `ocena`.`przedmiot_id` = 1;";
			$result=mysqli_query($connect,$ask);
			while($line=mysqli_fetch_row($result))
			{
				echo $line[0];
			}

			mysqli_close($connect);
		 ?>
		 </p>
	</main>
	<footer>
		<h3>Zespół Szkół Ponadgimnazjalnych</h3>
		<p>Stronę opracował: </p>
	</footer>
</body>
</html>
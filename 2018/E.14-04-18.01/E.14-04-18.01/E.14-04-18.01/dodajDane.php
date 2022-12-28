<?php 
	$connect = mysqli_connect('localhost','root','','ogloszenia');
	$name = $_POST['name'];
	$nazw = $_POST['nazw'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$ask = "INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (NULL, '$name', '$nazw', '$tel', '$mail')";

	if (isset($name) || isset($nazw) || isset($tel) || isset($mail))
	{ 
		mysqli_query($connect, $ask);
		echo "Dodano dane";
	}

	mysqli_close($connect);
?>


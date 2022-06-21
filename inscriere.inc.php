<?php

	include 'dbh.inc.php';
	
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$email = $_POST['email'];
	$telefon = $_POST['telefon'];
	
	$test = "INSERT INTO users (nume, prenume, email, telefon)
	VALUES ('$nume', '$prenume', '$email', '$telefon');";
	
	if(empty($nume)){
		$eroare_nume = 'Eroare nume';
	}
	
	mysqli_query($conexiune, $test);
	header("Location: participanti.php");	
?>


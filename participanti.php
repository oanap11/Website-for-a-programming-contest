<?php
 include 'dbh.inc.php';
?>

<!DOCTYPE HTML>

<html lang="ro">
 
 <head>
  <title>Participanti</title>
  <meta charset="utf-8"> 
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/jpg" href="imagini/logo3.jpg">
  
  <script src="validare.js" type="text/javascript"></script>
  <script type="text/javascript">
	function validezaForma() {
		var frm = document.formaInscriere;
		var valid = true;
		if (frm.nume.value.length < 2) {
			alert("Numele trebuie sa aiba minim 2 caractere");
			frm.nume.focus();
			valid = false;
		} else if (frm.nume.value.length > 20) {
			alert("Numele trebuie sa aiba maxim 20 caractere");
			frm.nume.focus();
			valid = false;
	}

	if (valid && !esteNumar(frm.telefon.value)) {
		alert("Introduceti un telefon valid!");
		frm.telefon.focus();
		valid = false;
	}

	if (valid && !esteEmail(frm.email.value)) {
		alert("Introduceti o adresa de mail valida!");
		frm.email.focus();
		valid = false;
	}

	return valid;
}
</script>
 </head>
 
 <body>

   
  <div class="header">  
   <img src="imagini/logo3.jpg" alt="Logo">
   <h1>Participanti</h1>
  </div>
  
  <div id="meniu_nav">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="regulament.html">Regulament</a></li>
    <li><a href="organizatori.html">Organizatori</a></li>
    <li><a href="sponsori.html">Sponsori</a></li>
    <li><a href="noutati.html">Noutati</a></li>
    <li><a href="participanti.php">Participanti</a></li>
    <li><a href="subiecte.html">Subiecte</a></li>
    <li><a href="rezultate.html">Rezultate</a></li>
    <li><a href="contact.html">Contact</a></li>
   </ul>  
  </div>
  
  <div>  
  <img class="panou_img" src="imagini/test.gif" alt="Computer gif">
  </div>
  
  <div class="panou">
   <h5 style="color:white">Resurse utile pentru programare</h5>
   <ul>
    <li><a href="https://infoarena.ro/" target="_blank">inforarena</a></li>
    <li><a href="http://www.cplusplus.com/doc/tutorial/" target="_blank">C++</a></li>
    <li><a href="https://info64.ro/" target="_blank">info64</a></li>
    <li><a href="https://www.nesoacademy.org/" target="_blank">Neso Academy</a></li>
    <li><a href="https://www.freecodecamp.org/" target="_blank">freeCodeCamp</a></li>
    <li><a href="https://www.w3schools.com/" target="_blank">W3Schools Online Web Tutorials</a></li>    
   </ul>  
  </div>
  
  <div class="main"> 
   <h2>Ce mai astepti? Inscrie-te la concurs!</h2>
   <h3>Formular de inregistrare</h3>
   
   <form name="formaInscriere" onsubmit="return validezaForma()"  action="inscriere.inc.php" method="POST">
    <input type="text" name="nume" placeholder="Nume" size="20">
    <br>
    <input type="text" name="prenume" placeholder="Prenume">
    <br>
    <input type="text" name="email" placeholder="E-mail" value="">
    <br>
    <input type="text" name="telefon" placeholder="Telefon"
onkeyup="limitareLungime(this, 10)"
onkeypress="return filtreazaNumere(event)" />
    <br>
    <button type="submit" name="submit">Submit</button>
   </form>
   
   <h3>Participantii inscrisi pana la data de <?php echo date('d-m-Y'); ?>: </h3>
   <?php
     $sql = "SELECT * FROM users;";
     $result = mysqli_query($conexiune, $sql);
     $resultCheck = mysqli_num_rows($result);
     
     if($resultCheck > 0){
     	while($row = mysqli_fetch_assoc($result)){
     		echo $row['nume'] . " ";  
     		echo $row['prenume'] . "</br>";  		 
     	}
     }
    ?>
    
  </div>
  
  <div id="footer">
  Copyright &copy; 2021 Code Wars. All Rights Reserved
  </div>
	
 </body>
</html>

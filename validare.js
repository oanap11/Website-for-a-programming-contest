function limitareLungime(input, length){
	var lungime=length
	if (input.value.length>lungime)
	input.value=input.value.substring(0, lungime)
}

function filtreazaNumere(e){
	var unicode=e.charCode? e.charCode : e.keyCode
	if (unicode!=8){ //daca tasta apasata nu e backspace
	if (unicode<48||unicode>57) //si nu e nici numar
		return false //nu se poate apasa
	}
	return true;
}

function esteEmail(strMail){
	var regExpEmail = /^.+\@.+\..+$/ ;
	return regExpEmail.test(strMail);
}

function esteNumar(strNr){
	var regExpNumber = /^\d+$/; // expresia regulata pentru verificare numar
	return regExpNumber.test(strNr);
}


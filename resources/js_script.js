function validarForm_contact() {
	if(document.contact.name.value == "") {
		return false;
		alert(" O campo Nome está vazio! \\n Por favor preencha!");
	}	
else {
	if(document.contact.tel.value == "") {
		return false;
		alert(" O campo Telefone está vazio! \\n Por favor preencha!");
	}
else {
	if(document.contact.mail.value == "") {
		return false;
		alert("O campo E-mail está vazio! \\n Por favor preencha!");
	}
else {
	if(document.contact.msg.value == "") {
		return false;
		alert("O campo Mensagem está vazio! \\n Por favor preencha!");
	}	
else {
	return true;
}}}}}	
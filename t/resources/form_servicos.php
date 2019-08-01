<div id="form_main" class="form_main">
<form action="action.php" method="POST" onsubmit="return validaCampoForm(); return false;">
<table border="0" frameborder="0">
<tr><td><input name="name" type="text" id="name" value="Nome" onfocus="if(this.value=='Nome') { this.value = ''; }"  onblur="if(this.value=="") { this.value = 'Nome'; }" class="form_input" style="width:970px; height: 100px; margin-top:20px;"></td></tr>
<tr><td><input name="tele" type="text" id="tele" value="Telefone" onfocus="if(this.value=='Telefone') { this.value = ''; ); }" onblur="if(this.value=="") { this.value = 'Telefone'; }" class="form_input" style="width:970px; height: 100px; margin-top:20px;"></td></tr>
<tr><td><input name="mail" type="text" id="mail" value="E-mail" onfocus="if(this.value=='E-mail') { this.value = '';); }" onblur="if(this.value=="") { this.value = 'E-mail'; }" class="form_input" style="width:970px; height: 100px; margin-top:20px;"></td></tr>
<tr><td><input name="msg" type="text" id="msg" value="Mensagem" onfocus="if(this.value=='Mensagem') { this.value = ''; }" onblur="if(this.value=="") { this.value= 'Mensagem'; }" class="form_input" style="width:970px; height: 100px; margin-top:20px;"></td></tr>
<input type="hidden" name="redirect" value="servicos">
<tr><td align="right"><input type="submit" value="Enviar" class="form_submit" style="width: 200px; height: 80px; margin-top: 10px;"></td></tr>
</table>
</form>
</div>
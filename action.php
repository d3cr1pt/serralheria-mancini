<?php
$nome = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST,'mail', FILTER_SANITIZE_EMAIL);
$tele = filter_input(INPUT_POST,'tel', FILTER_SANITIZE_STRING);
$msgs = filter_input(INPUT_POST,'msg', FILTER_SANITIZE_STRING);
$acts = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);

$to = "contato@serralheriamancini.com.br";

$headers = "From: " . $mail . "\r\n";
$headers .= "Reply-To: ". $mail . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if($acts == "contato") {
	$subject = "Novo Contato de";
	$subject .= $nome;
	$tipo_os = "contato";
}

if($acts == "orcamento") {
	$subject = "Novo Pedido de";
	$subject .= $nome;
	$tipo_os = "orçamento";
}

$mensage  = "<html>";
$mensage .= "<body>";
$mensage .= "Olá, Você recebeu um novo";
$mensage .= $tipo_os;
$mensage .= ".<br>";
$mensage .= "<b>Nome do Cliente:</b>";
$mensage .= $nome;
$mensage .= "<br>";
$mensage .= "<b>Telefone de Contato:</b>";
$mensage .= $tele;
$mensage .= "<br>";
$mensage .= "<b>Email de Contato:</b>";
$mensage .= $mail;
$mensage .= "<br>";
$mensage .= "<b>Mensagem do Cliente:</b>";
$mensage .= $msgs;
$mensage .= "<br>";
$mensage .= "</body></html>";

mail($to, $subject, $mensage, $headers);

echo "<script>history.go(-1);</script>";
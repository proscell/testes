<?php

//Formul�rio de Contato | Vers�o 7.5 (klebrr)<br>
//Autor Original: Autor Original: Apoena
//http://www.phpbrasil.com
// adaptado em 05/09/2005 - kleber (klebrr em klebrr.com)
// n�o funcionava com php 5.0.1 e 5.0.4	 (Testado apenas no Linux)
// dispensei o include (config.php) pra ficar num s� arquivo	

echo "<html>
<head>
<title> Processando... </title>
<link rel=\"stylesheet\" href=\"class.css\" type=\"text/css\">
</head>";
// Variaveis originadas no email_form.php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$equipamento = $_POST['equipamento'];
$modelo = $_POST['modelo'];
$defeito = $_POST['defeito'];
$emgarantia = $_POST['emgarantia'];
// adicionei a captura do ip do remetente 
$ip = $_SERVER['REMOTE_ADDR'];
//Seu email, para onde irao as informa��es do formul�rio
$mail_destino = "tecnico02@proscell.com.br";
echo "<body bgcolor=\"#FFFFFF\" leftmargin=\"10\" topmargin=\"10\" marginwidth=\"0\" marginheight=\"0\">
<center><font class=\"texto\">";
//Mensagem de cabe�alho do email
$mail_header = "Mensagem do Web Site.";
//Mensagem para o email de resposta
$msg_reply = "Ol� $nome,\nRecebemos o seu email com o defeito: $defeito.\n\nObrigado pelo seu contato!\n\n Esta � uma mensagem autom�tica de confirma��o.\n Por Favor n�o responda este e-mail.\n $ip";
//Mensagem de Erro
$msg_erro = "Aten��o!! Os campos (Nome, E-mail e Defeito ) n�o podem estar em branco.";
//Endere�o do seu SMTP (para se conectar no SMTP)	(acho que � s� para windows afinal n�o tem postfix ou sendmail)
//$msg_smtp_url = "<p>smtp.prov.com.br</p>";
//Login do seu SMTP (para se conectar no SMTP)
//$msg_smtp_login = "";
//Senha do seu SMTP (para se conectar no SMTP)
//$msg_smtp_senha = "";

//Obrigatoriedade
if ($nome!="" and $defeito and $email!="")
	{
	$msg.="$mail_header\n\n";
	$msg.="Nome: $nome\n";
	$msg.="Email: $email\n";
	$msg.="Telefone: $telefone\n";
	$msg.="Equipamento: $equipamento\n";
	$msg.="Modelo: $modelo\n";
	$msg.="Defeito: $defeito\n";
	$msg.="Em Garantia: $emgarantia\n";
	$msg.="IP da origem: $ip";

	if (mail($mail_destino, "Or�amento ProSCell: $equipamento", $msg, "From:$nome<$email>"))
		{
		//Imprimindo confirma��o de envio
		echo 
			" </font></center>
			<html>
			<meta http-equiv=refresh content=10;URL=./></html>";
			echo "<font class=\"texto\">";
			echo "<b>Ol�! $nome</b>,<br><br>sua mensagem:<br> <font color=\"#FF0000\"><b>$defeito </b></font><br>Foi enviada com sucesso!<br><br>";
			echo "Obrigado!<br>vc receber� um e-mail de confirma��o desta mensagem<br><br>endere�o ip: <b>$ip</b></font> 
			";
		//Enviando mensagem de confirma��o para o email do internauta
		 mail("$nome<$email>", "Re:Formul�rio enviado: $equipamento", $msg_reply, "From:<$mail_destino>");
		}
		else
		
		echo
			"
			<meta http-equiv=refresh content=3;URL=../>
			</html><center><br><br><font color=red>
			<b>Erro ao enviar e-mail!</b>
			</font></center>
			";
	}
	else
	{
		echo 
		"
		<br><br><center>
		$msg_erro <br><br>
		<a href=\"javascript:window.history.go(-1)\" class=\"links\">Por favor, volte e preencha corretamente.</a>
		</center>
		";
	}
?>


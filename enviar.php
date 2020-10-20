<?php
if (isset($_POST['BTEnvia'])) {
 
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $endereco = $_POST['endereco'];
 $telefone = $_POST['telefone']; 
 $servico = $_POST['servico'];
 $mensagem = $_POST['mensagem'];

 $email_remetente = "contato@decorlimp.com.br"; 

 $email_destinatario = "contato@decorlimp.com.br";
 $email_reply = "$email"; 
 $email_assunto = "Decorlimp - Nova Solicitação de Orçamento via Site"; 

 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Endereço = $endereco \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 $email_conteudo .= "Serviço = $servico \n";
 $email_conteudo .= "Mensagem = $mensagem \n"; 
 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>E-mail enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
} 
?>
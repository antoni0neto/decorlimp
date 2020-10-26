<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Somos especialistas em lavagem e limpeza de sofás e estofados. Trabalhamos no conforto de sua residência ou empresa. Confira!">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lavagem e Limpeza de Sofás e Estofados, ligue: 11 964891638 | Decorlimp</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180084854-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-180084854-1');
    </script>
</head>

<body>
	
    <div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=5511964891638&text=Quero%20solicitar%20o%20a%20servi%C3%A7o%20de%20voc%C3%AAs." target="_blank" data-toggle="tooltip" data-placement="bottom" title="CLIQUE PARA SOLICITAR OR�AMENTO VIA WHATSAPP"><img src="img/core-img/whatsapp.png" alt="Decorlimp | Ligue: (11) 96489-1638" /></a>
	</div>
			
<?php

$mensagemHTML = 
"
Você tem uma nova mensagem:\n
Via: http://www.decorlimp.com.br/\n
Detalhes da Mensagem:\n
Nome: ".$nome.
"\n\n E-mail: ".$email.
"\n\n Telefone: ".$telefone.
"\n\n Assunto: ".$assunto.
"\n\n Mensagem: ".$message."
\n\n Este e-mail foi enviado automaticamente através do site da Decorlimp. Não responda.";
			$emailsender='decorlimp.brasil@gmail.com';
			$emaildestinatario='decorlimp.brasil@gmail.com';
			$assunto = "Nova mensagem atraves do seu site, de: ".$email;
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/plain; charset=utf-8\n";
			$headers .= "From: no-reply@decorlimp.com.br\r\n"; //E-mail do remetente
			$headers .= "Return-Path: Decorlimp <decorlimp.brasil@gmail.com>\r\n"; //E-mail do remetente 
			/*$headers .= "Reply-To: decorlimp.brasil@gmail.com\n" */
			$headers .= "X-Priority: 1\n";
	if($email !=""){
		
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
		
		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
			
		$headers .= "From: Nova mensagem através do seu site <decorlimp.brasil@gmail.com>\n";
		
		}
			
	}
?>
    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Sua mensagem foi enviada com êxito. Agradeçemos o contato.</h2>
						<h6> Em breve retornaremos!</h6>
						<div class="cta-btn"><br>
                            <a href="index" class="btn credit-btn box-shadow">Voltar para home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->

    <?php include 'footer.php'; ?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>
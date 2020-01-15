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
	
</head>

<body>
	
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=5511964891638&text=Quero%20solicitar%20o%20a%20servi%C3%A7o%20de%20voc%C3%AAs." target="_blank" data-toggle="tooltip" data-placement="bottom" title="CLIQUE PARA SOLICITAR ORÇAMENTO VIA WHATSAPP"><img src="img/core-img/whatsapp.png" alt="Decorlimp | Ligue: (11) 96489-1638" /></a>
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
"\n\n Endereço: ".$endereco.
"\n\n Serviço: ".$servico.
"\n\n Assunto: ".$assunto.
"\n\n Mensagem: ".$message."\n";
			$emailsender='comercial@decorlimp.com.br';
			$emaildestinatario='comercial@decorlimp.com.br';
			$assunto = "Nova mensagem através do seu site, de: ".$emaildestinatario;
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/plain; charset=utf-8\n";
			$headers .= "From: no-reply@decorlimp.com.br\r\n"; //E-mail do remetente
			$headers .= "Return-Path: Decorlimp <comercial@decorlimp.com.br>\r\n"; //E-mail do remetente 
			/*$headers .= "Reply-To: comercial@decorlimp.com.br\n" */
			$headers .= "X-Priority: 1\n";
	if($email !=""){
		
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
		
		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
			
		$headers .= "From: Nova mensagem através do seu site <comercial@decorlimp.com.br>\n";
		
		}
			
	}
		
?>
    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Sua mensagem foi enviada com êxito. Agradeçemos o contato.</h2>
						<h6> Em breve retornaremos!</h6>
						<div class="cta-btn"><br>
                            <a href="index.html" class="btn credit-btn box-shadow">Voltar para home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Mapa do Site</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Quem Somos</a></li>
                                <li><a href="contact.php">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

				<!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Serviços</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/sofas-e-estofados.html"><img src="img/bg-img/sofa100.jpg" alt="Somos especializados em lavagem e limpeza de sofás e estofados em geral. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Sofás</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/estofados.html"><img src="img/bg-img/estofados100.jpg" alt="Somos especializados em lavagem e limpeza de sofás e estofados em geral. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Estofados</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/colchoes.html"><img src="img/bg-img/colchao100.jpg" alt="Somos especializados em lavagem e limpeza de sofás, colchões e estofados em geral. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Colchões</a>
                            </div>
                        </div>
						
                    </div>
                </div>
				
				<!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Serviços</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/tapetes.html"><img src="img/bg-img/tapete100.jpg" alt="Somos especializados em lavagem e limpeza de sofás, tapetes e estofados em geral. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Tapetes</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/automoveis.html"><img src="img/bg-img/automoveis100.jpg" alt="Somos especializados em lavagem e limpeza de automóveis. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Automóveis</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/carpete.html"><img src="img/bg-img/carpete100.jpg" alt="Somos especializados em lavagem e limpeza de carpete. Vamos até sua empresa! Confira!">
                            </div>
                            <div class="news-content">
                                Carpete</a>
                            </div>
                        </div>
						
                    </div>
                </div>
				
				<!-- Redes Sociais - Facebook -->
                <div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Redes Sociais</h5>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdecorlimp%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=697398553796716" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				</div>
				
				  </div>
                </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="index.html" class="logo"><img src="img/core-img/logo.png" alt="Lavagem e Limpeza de Sofás e Estofados, ligue: 11 964891638 | Decorlimp"></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Site desenvolvido <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://www.solutioncloud.com.br/" target="_blank">Solution Cloud</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

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
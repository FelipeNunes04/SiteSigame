<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Siga-me Sistemas - Tecnologia e Inovaçao ao seu Alcance</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>

<body>
	<!-- header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/logo2.png" alt="logotipo da empresa" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Início</a></li>
					        <li><a class="menu" href="#service">Serviços</a></li>
					        <li><a class="menu" href="#portfolio">Portfólio</a></li>
					        <li><a class="menu" href="#team">Quem Somos</a></li>
					        <li><a class="menu" href="#contact">Contato</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">

			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Desenvolvimento</h1>
		               			<p>as tecnologias mais recentes do mercado</p>
		               			<button><a href="#service">saiba mais</a></button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Auditoria</h1>
		               			<p>Mais Segurança para o seu sistema</p>
		               			<button><a href="#service">saiba mais</a></button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Suporte</h1>
		               			<p>rolsolva os bugs do seu sistema</p>
		               			<button><a href="#service">saiba mais</a></button>
			                </div>
			            </div>
			        </div>

			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>

			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- service section -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row espaco_topo">
				<h2>NOSSOS SERVIÇOS</h2>
				<h4>Tem uma nova ideia? Nós faremos ela acontecer.</h4>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="single-service-detail clearfix">
								<div class="service-img">
									<img src="img/service1.jpg" alt="">
								</div>

								<div class="service-details">
									<div class="pentagon-text">
										<h1>W</h1>
									</div>

									<h3>Desenvolvimento de Sites e Sistemas</h3>
									<p class="text-justify">Quer colocar sua marca na internet? Quer controlar toda a dinâmica dos processos da sua empresa sem sair de casa? Então venha para a Siga-me e descubra o que as nossas soluções sob demanda tem a oferecer.</p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="single-service-detail">
								<div class="service-img">
									<img class="img-responsive" src="img/service2.jpg" alt="">
								</div>

								<div class="service-details">
									<div class="pentagon-text">
										<h1>M</h1>
									</div>

									<h3>Desenvolvimento de Aplicativos Mobile</h3>
									<p class="text-justify">Que tal ter todo o controle gerencial da sua empresa na tela do seu celular a qualquer hora e lugar? Nosso time tem as melhores técnicas e ferramentas para desenvolvimento de aplicativos prontas para tornar o seu projeto realidade.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container" id="container-service-2">
					<div class="row">
						<div class="col-md-6">
							<div class="single-service-detail clearfix">
								<div class="service-img">
									<img src="img/service3.jpg" alt="">
								</div>

								<div class="service-details">
									<div class="pentagon-text">
										<h1>A</h1>
									</div>

									<h3>Auditoria de Sistemas</h3>
									<p class="text-justify">Gostaria de analisar a segurança do seu sistema? Deixar seu site nas primeiras página do Google? Contate-nos e saiba como funciona o serviço de auditoria da Siga-me.</p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="single-service-detail">
								<div class="service-img">
									<img class="img-responsive" src="img/service4.jpg" alt="">
								</div>

								<div class="service-details">
									<div class="pentagon-text">
										<h1>S</h1>
									</div>

									<h3>Suporte em Geral</h3>
									<p class="text-justify">Seu sistema possui bugs? Gostaria de fazer pequenas alterações? Desenvolver novas funcionalidades no seu sistema? Contate-nos e saiba como funciona o serviço de suporte da Siga-me.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- portfolio section starts here -->
	<section class="portfolio text-center" id="portfolio">
		<div class="container">
			<div class="row">
				<h2>Portfólio</h2>
				<h4>Conheça aqui alguns dos nossos trabalhos.</h4>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sivepem.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/myclass.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cardapio.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sxcom.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sip.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabe.png" class="img-responsive" alt="">
                    </a>
                </div>
			</div>
		</div>
	</section><!-- end of portfolio section -->


	<!-- team section -->

	<section class="team" id="team">
		<div class="container">
			<div class="row espaco_topo">
				<div class="team-heading text-center">
					<h2>Nossa Empresa</h2>
					<h4></h4>
				</div>


	            <div class="row">
					<div class="col-md-6">
	                    <h3><p class="text-justify">A Siga-me é uma empresa embasada no modelo de trabalho home office, voltada ao ramo de tecnologia da informação. Criada sob a visão de dois analistas de sistemas, a empresa é destaque na criação de soluções inteligentes para atender as necessidades de seus clientes.</p></h3>
	                </div>
					
					<div class="col-md-6 ">
	                    <h3><p class="text-justify">Missão: Conhecer e entender as demandas dos nossos clientes e desenvolver, com a máxima eficiência e eficácia, ferramentas que auxiliem no gerenciamento das suas informações e, por consequência, ampliem sua capacidade de competição dentro do mercado em que atuam.</p></h3>
	                </div>
					
					<div class="col-md-6 ">
	                    <h3><p class="text-justify">Visão: Atingir o conceito de referencial do mercado de tecnologia da informação na área de desenvolvimento de sistemas web e mobile, buscando sempre a inovação, a dinâmica da comunicação e a excelência em cada novo projeto.</p></h3>
	                </div>
					
					<div class="col-md-6 ">
	                    <h3><p class="text-justify">Valores: A Siga-me considera como valores primordiais da sua atuação diária a ética, a responsabilidade, a eficiência, a eficácia, a transparência, a excelência, a efetividade e o profissionalismo.</p></h3>
	                </div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<section class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</section><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
					<div class="contact-caption clearfix">
						<div class="contact-heading text-center">
							<h2>Contato</h2>
						</div>

						<div class="col-md-5 contact-info text-left">
							<h3>Informações</h3>
							<div class="info-detail">
								<ul><li><i class="fa fa-map-marker"></i><span>Endereço:</span> Rua R, Picos, PI, Cep 64604580</li></ul>
								<ul><li><i class="fa fa-skype"></i><span>Telefone/Skype:</span> (89) 99907-7606</li></ul>
								<ul><li><i class="fa fa-phone"></i><span>Telefone/Whatsapp:</span> (89) 98125-7687</li></ul>
								<ul><li><i class="fa fa-envelope"></i><span>E-mail:</span> <a href="mailto:fabioluzti@hotmail.com" style="color:#fff">fabioluzti@hotmail.com</a></li></ul>
							</div>
						</div>


						<div class="col-md-6 col-md-offset-1 contact-form" ng-app="validaForm">
							<h3>Solicite seu orçamento</h3>
					
							<form name="form" action="enviar.php" method="post">
								<input name="name" ng-class="{'error': !name && form.name.$dirty}" ng-model="name" type="text" placeholder="*Nome Completo" ng-required="true">
								<input name="email" ng-model="email"  type="email" ng-class="{'error': !email && form.email.$dirty}" ng-required="true" placeholder="*Digite seu E-mail">
								<select name="subject" ng-model="subject" ng-class="{'error': !subject && form.subject.$dirty}" ng-required="true">
								<option value="">*Serviço Solicitado</option>
								  <optgroup label="Desenvolvimeto">
								    <option value="site">Site</option>
								    <option value="sistema">Sistema Web</option>
								    <option value="mobile">Mobile</option>
								  </optgroup>
								  <optgroup label="Suporte">
								    <option value="ajustes">Pequenos Ajustes</option>
								    <option value="bugs">Correção de Bugs</option>
								    <option value="nova-funcionalidade">Nova Funcionalidade</option>
								  </optgroup>
								  <optgroup label="Auditoria">
								    <option value="seo">SEO</option>
								    <option value="vulnerabilidade">Verificação de Vulnerabilidades</option>
								  </optgroup>
								</select>
								<textarea name="message" ng-model="message" ng-class="{'error': !message && form.message.$dirty}" ng-required="true" cols="30" rows="10" placeholder="*Descreva aqui um pouco o seu problema para podermos ajuda-lo..."></textarea>
								<div class="g-recaptcha" data-sitekey="6Lf3Iw8UAAAAAMD5rbg0DlZ8liP6l8aMN2TBz-TC"></div>
								<input class="submit-btn margin-top" ng-disabled="form.$invalid" type="submit" value="Solicitar Orçamento">
							</form>
						</div>
					</div>
			</div>
		</div>
	</section><!-- end of contact section -->


	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Siga-me Sistemas. Todos os direitos reservados.</p>
				</div>

				<div class="col-xs-6 text-right">
					<p>"Cada sonho que você deixa pra trás, é um pedaço do seu futuro que deixa de existir." - Steve Jobs</p>
				</div>
			</div>
		</div>
	</footer>


    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>SIVEPEM</h2>
                            <hr class="star-primary">

							<div class="container-fluid">
								<div class="row">
								    <div id="carouselportfolio1" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="header-backup"></div>
								        <!-- Wrapper for slides -->
								        <div class="carousel-inner" role="listbox">
								            <div class="item active">
								            	<img src="img/portfolio/sivepem1.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Tax</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sivepem2.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Financial</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sivepem3.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Consulting</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sivepem4.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sivepem5.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sivepem6.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								        </div>

								        <!-- Controls -->
								        <a class="left carousel-control" href="#carouselportfolio1" role="button" data-slide="prev">
								            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								            <span class="sr-only">Previous</span>
								        </a>
								        <a class="right carousel-control" href="#carouselportfolio1" role="button" data-slide="next">
								            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								            <span class="sr-only">Next</span>
								        </a>
								    </div>

								</div>
							</div>

                            <p>O <a href="http://felipe.pythonanywhere.com/" target="blank">SIVEPEM - Sistema de Vendas para Pequenos Empreendedores</a> é um sistema completo para a prestação de serviços. Dentre as suas funcionalidades, destacam-se o cadastro de clientes, cadastro de serviços, pagamentos, saldos e extratos.</p>
                            <ul class="list-inline item-details">
                                <li>Cliente:
                                    <strong><a href="http://felipe.pythonanywhere.com/" target="blank">Luis Rudinele</a>
                                    </strong>
                                </li>
                                <li>Data:
                                    <strong><a href="#">Abril de 2016</a>
                                    </strong>
                                </li>
                                <li>Serviço:
                                    <strong><a href="#">Desenvolvimento Web</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>MyClass</h2>
                            <hr class="star-primary">

							<div class="container-fluid">
								<div class="row">
								    <div id="carouselportfolio2" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="header-backup"></div>
								        <!-- Wrapper for slides -->
								        <div class="carousel-inner" role="listbox">
								            <div class="item active">
								            	<img src="img/portfolio/myclass1.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Tax</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/myclass2.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Financial</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/myclass3.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Consulting</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/myclass4.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/myclass5.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								        </div>

								        <!-- Controls -->
								        <a class="left carousel-control" href="#carouselportfolio2" role="button" data-slide="prev">
								            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								            <span class="sr-only">Previous</span>
								        </a>
								        <a class="right carousel-control" href="#carouselportfolio2" role="button" data-slide="next">
								            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								            <span class="sr-only">Next</span>
								        </a>
								    </div>

								</div>
							</div>

                            <p>A startup MyClass é um serviço que permite ao professor o acompanhamento de seus alunos em sala de aula, nossa empresa desenvolveu o <a href="http://www.myclassapp.com.br" target="blank">Site Oficial</a> da mesma.</p>
                            <ul class="list-inline item-details">
                                <li>Cliente:
                                    <strong><a href="http://www.myclassapp.com.br/">MyClass</a>
                                    </strong>
                                </li>
                                <li>Data:
                                    <strong><a href="#">Junho de 2015</a>
                                    </strong>
                                </li>
                                <li>Serviço:
                                    <strong><a href="#">Desenvolvimento Web</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Cardápio Click</h2>
                            <hr class="star-primary">

							<div class="container-fluid">
								<div class="row">
								    <div id="carouselportfolio3" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="header-backup"></div>
								        <!-- Wrapper for slides -->
								        <div class="mobile carousel-inner" role="listbox">
								            <div class="item active">
								            	<img src="img/portfolio/cardapio1.jpg" alt="">
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/cardapio2.jpg" alt="">
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/cardapio3.jpg" alt="">
								            </div>
								        </div>

								        <!-- Controls -->
								        <a class="left carousel-control" href="#carouselportfolio3" role="button" data-slide="prev">
								            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								            <span class="sr-only">Previous</span>
								        </a>
								        <a class="right carousel-control" href="#carouselportfolio3" role="button" data-slide="next">
								            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								            <span class="sr-only">Next</span>
								        </a>
								    </div>

								</div>
							</div>

							<p>O projeto <a href="https://goo.gl/sk1T93" target="blank">Cardápio Click</a> foi desenvolvido por um dos nossos Freelancers para ser o aplicativo do site <a href="http://www.cardapioclick.com.br/" target="blank">Cardápio Click</a>, onde os clientes possam ter mais comodidade para acessar o sistema do site.</p>
                            <ul class="list-inline item-details">
                                <li>Cliente:
                                    <strong><a href="http://www.cardapioclick.com.br/" target="blank">Cardápio Click</a>
                                    </strong>
                                </li>
                                <li>Data:
                                    <strong><a href="#">Dezembro de 2016</a>
                                    </strong>
                                </li>
                                <li>Serviço:
                                    <strong><a href="#">Desenvolvimento Mobile</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Sistema Sxcom</h2>
                            <hr class="star-primary">
							
							<div class="container-fluid">
								<div class="row">
								    <div id="carouselportfolio4" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="header-backup"></div>
								        <!-- Wrapper for slides -->
								        <div class="carousel-inner" role="listbox">
								            <div class="item active">
								            	<img src="img/portfolio/sxcom1.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Tax</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sxcom2.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Financial</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sxcom3.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Consulting</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sxcom4.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sxcom5.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sxcom6.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								        </div>

								        <!-- Controls -->
								        <a class="left carousel-control" href="#carouselportfolio4" role="button" data-slide="prev">
								            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								            <span class="sr-only">Previous</span>
								        </a>
								        <a class="right carousel-control" href="#carouselportfolio4" role="button" data-slide="next">
								            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								            <span class="sr-only">Next</span>
								        </a>
								    </div>

								</div>
							</div>
								
                            <p class="text-justify">Sistema integrado de controle gerencial para plataformas desktop criado para atender as necessidades dos mais variados tipos de clientes. Desenvolvido em conjunto com a equipe da Sysflex, nós participamos da criação de módulos do sistema e na implantação do mesmo em algumas empresas da região.</p>
                            <ul class="list-inline item-details">
                                <li>Cliente:
                                    <strong>Sysflex - Soluções em TI
                                    </strong>
                                </li>
                                <li>Período:
                                    <strong>Janeiro 2012 - Dezembro 2013
                                    </strong>
                                </li>
                                <li>Tipo de Serviço:
                                    <strong>Desenvolvimento Desktop
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Sistema de Controle de Atividades Publicitárias</h2>
                            <hr class="star-primary">

							<div class="container-fluid">
								<div class="row">
								    <div id="carouselportfolio5" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="header-backup"></div>
								        <!-- Wrapper for slides -->
								        <div class="carousel-inner" role="listbox">
								            <div class="item active">
								            	<img src="img/portfolio/sip1.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Tax</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sip2.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Financial</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sip3.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Consulting</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sip4.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sip5.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sip6.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/sip7.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								        </div>

								        <!-- Controls -->
								        <a class="left carousel-control" href="#carouselportfolio5" role="button" data-slide="prev">
								            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								            <span class="sr-only">Previous</span>
								        </a>
								        <a class="right carousel-control" href="#carouselportfolio5" role="button" data-slide="next">
								            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								            <span class="sr-only">Next</span>
								        </a>
								    </div>

								</div>
							</div>

                            <p class="text-justify">Sistema integrado de controle gerencial para plataformas web criado para atender as necessidades da empresa TalkBox(ramo de locuções radialistas). Desenvolvido na linguagem php integrada ao framework codeigniter, com um grande diferencial nos quesitos de usabilidade e rapidez de acesso.</p>
                            <ul class="list-inline item-details">
                                <li>Cliente:
                                    <strong>TalkBox Ltda
                                    </strong>
                                </li>
                                <li>Período:
                                    <strong>Junho 2016 - Julho 2016
                                    </strong>
                                </li>
                                <li>Tipo de Serviço:
                                    <strong>Desenvolvimento Web
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Sistema de Controle Acadêmico</h2>
                            <hr class="star-primary">

							<div class="container-fluid">
								<div class="row">
								    <div id="carouselportfolio6" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="header-backup"></div>
								        <!-- Wrapper for slides -->
								        <div class="carousel-inner" role="listbox">
								            <div class="item active">
								            	<img src="img/portfolio/cabe1.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Tax</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/cabe2.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Financial</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/cabe3.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Consulting</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/cabe4.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								            <div class="item">
								            	<img src="img/portfolio/cabe5.png" alt="">
								                <!--<div class="carousel-caption">
							               			<h1>Money</h1>
							               			<p>good business consulting service</p>
							               			<button>learn more</button>
								                </div>-->
								            </div>
								        </div>

								        <!-- Controls -->
								        <a class="left carousel-control" href="#carouselportfolio6" role="button" data-slide="prev">
								            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								            <span class="sr-only">Previous</span>
								        </a>
								        <a class="right carousel-control" href="#carouselportfolio6" role="button" data-slide="next">
								            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								            <span class="sr-only">Next</span>
								        </a>
								    </div>

								</div>
							</div>

                            <p class="text-justify">Sistema integrado de controle gerencial para plataformas web criado para atender as necessidades da empresa Colégio Antares. Desenvolvido na linguagem php integrada ao framework codeigniter, com um grande diferencial nos quesitos de usabilidade e rapidez de acesso.</p>
                            <ul class="list-inline item-details">
                                <li>Cliente:
                                    <strong>Colégio Antares
                                    </strong>
                                </li>
                                <li>Período:
                                    <strong>Março 2016 - Abril 2016
                                    </strong>
                                </li>
                                <li>Tipo de Serviço:
                                    <strong>Desenvolvimento Web
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/layout.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="js/app.js"></script>
</body>
</html>
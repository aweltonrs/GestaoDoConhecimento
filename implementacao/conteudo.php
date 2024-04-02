<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8"\>
			
			<link rel="stylesheet" type="text/css" href="css/inicio.css"/>
			
			<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
			<link type="text/css" rel="stylesheet" href="css/conteudo.css"/>
			<script lang="javascript" src="js/efeitos.js"></script>
			<script src="https://kit.fontawesome.com/5fa47ea405.js"></script>
			<title></title>
			
		</head>
		<body>
			<nav id="navbar">
				<ul>
					<li onmousemove="mudaIcone('imagens/icone01.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="#"> Inicio </a> </li>
					<li onmousemove="mudaIcone('imagens/icone02.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="produtos.php"> Produtos </a>
						<ul>
							<li><a href="#" id="eletronicos"> Eletrônicos </a></li>
							<li><a href="#" id="softwares"> Softwares </a></li>
							<li><a href="#" id="games"> Games </a></li>
							<li><a href="#" id="ferramentas"> Ferramentas </a></li>
							
						</ul>
					</li>
					
					<li onmousemove="mudaIcone('imagens/icone03.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="#"> Educação </a> </li>
					<li onmousemove="mudaIcone('imagens/icone04.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="#"> Suporte </a> </li>
				</ul>	
			</nav>
		<img src="imagens/icone.jpg" id="icon">
			<div id="cabecalho">
				<h1> Orgnização Interna De um Computador</h1>
			</div>
			<div id="corpo">
				<section id="conteudo">
					<img src="imagens/pc-por-dentro.jpg" id="mapa" usemap="infoMap" name="PC Por Dentro"/>
					<!--Mapa da imagem Pc Por Dentro-->
					<map name="infoMap">
						<area type="rect" coords="165, 7, 220, 21" href="infoMapa.php#artGabinete" target="tela"/>
						<area type="circle" coords="79, 143, 14" href="infoMapa.php#artProcessador" target="tela"/>
					</map>
					<iframe id="tela-interna" src="infoMapa.php" name="tela"></iframe>
					<button type="button">Iniciar Ciclo de Estudo</button>
				</section>				
			</div>
		</body>
	</html>	
			
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="src/css/global.css"></link>
    <link rel="stylesheet" type="text/css" href="../../../css/estilo.css"/>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>LPSTemp</title>
</head>
<body class="corpo full">
    
    <header id="cabecalho">
        <img src="../../../imagens/icone.jpg" id="icon">
		<nav id="navbar">
			<ul>
				<li onmousemove="mudaIcone('../../../imagens/icone01.jpg')" onmouseout="mudaIcone('../../../imagens/icone.jpg')"> <a href="#"> Inicio </a> </li>
				<li onmousemove="mudaIcone('../../../imagens/icone02.jpg')" onmouseout="mudaIcone('../../../imagens/icone.jpg')"> <a href="ciencias.php"> Ciências </a>
					<ul>
						<li><a href="#" id="eletronicos">Exatas </a></li>
						<li><a href="#" id="softwares"> Humanas </a></li>
						<li><a href="#" id="games"> Tecnologia </a></li>
						<li><a href="#" id="ferramentas"> Quimica </a></li>
						<li><a href="#" id="ferramentas"> Biologia </a></li>
						<li><a href="#" id="ferramentas"> Pesquisas Espaciais </a></li>
						
					</ul>
				</li>
				
				<li onmousemove="mudaIcone('../../../imagens/icone03.jpg')" onmouseout="mudaIcone('../../../imagens/icone.jpg')"> <a href="#"> Gestão do Conhecimento </a> </li>
				<li onmousemove="mudaIcone('../../../imagens/icone04.jpg')" onmouseout="mudaIcone('../../../imagens/icone.jpg')"> <a href="../../../suporte.php"> Suporte </a> </li>
				<li onmousemove="mudaIcone('../../../imagens/icone04.jpg')" onmouseout="mudaIcone('../../../imagens/icone.jpg')"> <a href="tempo_avulso.php"> Tempo Avulso </a> </li>
			</ul>	
		</nav>
    </header>

    <div id="stopwatch">
        <div class="secao">
            <h2 id="timer" class="sub">
                00:00:00:00
            </h2>
            <div id="actions" class="sub">
                <button id="reset">
                    <i class="fa-solid fa-rotate-right"></i>
                </button>
                <button id="power" action="start">
                    <i class="fa-solid fa-play"></i>
                </button>
                <button id="mark">
                    <i class="fa-solid fa-flag"></i>
                </button>

            </div>
            <div id="marks-list" class="sub">
            
            </div>
        </div>
    </div>

    <script lang="javascript" src="src/js/global.js"></script>
    <script lang="javascript" src="../../../js/efeitos.js"></script>
</body>
</html>
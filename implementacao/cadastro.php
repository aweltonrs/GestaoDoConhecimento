<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" \>

	<title>DadosPessoais</title>


	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<script lang="javascript" src="js/efeitos.js"></script>
	<script src="https://kit.fontawesome.com/5fa47ea405.js"></script>

</head>

<body>

	<img src="imagens/icone.jpg" id="icon">
	<nav id="navbar">
		<ul>
			<li onmousemove="mudaIcone('imagens/icone01.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a
					href="home.php"> Inicio </a> </li>
			<li onmousemove="mudaIcone('imagens/icone02.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="">
					Tipo de Informações </a>
				<ul>
					<li><a href="cadastro.php" id="infoPess">Pessoais </a></li>
					<li><a href="bd_conhecimento.php" id="infoBd_conhecimento"> Banco de Conhecimento </a></li>
					<li><a href="#" id="infoBd_conhecimento"> Banco de Talentos </a></li>
					<li><a href="#" id="infoProdutos"> Produtos </a></li>

				</ul>
			</li>

			<li onmousemove="mudaIcone('imagens/icone04.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a
					href="suporte.php"> Suporte </a> </li>
			<li onmousemove="mudaIcone('imagens/icone04.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a
					href="org/conhecimento.php"> Institucional</a> </li>

		</ul>
	</nav>

	<form class="formulario">
		<fieldset>
			<legend>Dados Pessoais</legend>
			<fieldset>
				<div class="bloco" id="divInformacoesPrincipais">
					<div class="componente">
						<label for="nome">Nome:</label>
						<input type="text" id="nome" name="nome" size="50">
					</div>
					<div class="componente">
						<label for="nasc"> Nascimento: </label>
						<input type="date" id="nasc" name="nasc" />
					</div>
				</div>

				<div class="bloco" id="divDocs">
					<div class="componente">
						<label for="rg">Rg:</label>
						<input type="text" id="rg" name="rg" size="10">
					</div>
					<div class="componente">
						<label for="cpf">CPF:</label>
						<input type="text" id="cpf" name="cpf">
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Sexo</legend>
				<div class="bloco componente" id="divSexo">
					<input type="radio" id="masc" name="sexo" /> <label for="masc">Masculino: </label>
					<input type="radio" id="fem" name="sexo" /> <label for="fem">Feminino: </label>
				</div>
			</fieldset>
			<fieldset>
				<legend>Qual sua posição na instituição</legend>
				<div class="bloco camposOcultos" id="divPessoasEspecificas">
					<!--Aluno-->
					<div class="componente">
						<input type="checkbox" id="aluno" name="tipo" onchange="mostrarOcultarCampos()"
							onclick="alerta()">
						<label for="aluno" onclick="alerta()">Aluno</label><br><br>
					</div>

					<div id="matricula" class="escondido componente">
						<label for="matricula">Matrícula:</label>
						<input type="text" id="matricula" name="matricula"><br><br>
					</div>
					<!--Pofessor-->
					<div class="componente">
						<input type="checkbox" id="professor" name="tipo" onchange="mostrarOcultarCampos()"
							onclick="alerta()">
						<label for="professor" onclick="alerta()">Professor</label><br><br>
					</div>

					<div id="formacao" class="escondido componente">
						<label for="formacao">Formação:</label>
						<input type="text" id="formacao" name="formacao"><br><br>
					</div>
					<div id="contrato" class="escondido componente">
						<label for="txtContrato">Tipo de Contrato:</label>
						<input type="text" id="txtContrato" name="txtContrato"><br><br>
					</div>
					<div id="salario" class="escondido componente">
						<label for="txtSalario">Salario:</label>
						<input type="number" id="txtSalario" name="txtSalario"><br><br>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend> Endereço </legend>
				<div class="bloco" id="divEndereco">

					<div class="componente"><span> País: </span><input type="text" id="nm" name="nome" /></div>
					<div class="componente"><span> Unidade Federal: </span><input type="date" id="nm" name="nome" />
					</div>
					<div class="componente"><span> Cidade: </span><input type="text" id="nm" name="nome" /></div>
					<div class="componente"><span> Bairro: </span><input type="text" id="nm" name="nome" /></div>
					<div class="componente"><span> Rua e Casa: </span><input type="text" id="nm" name="nome" /></div>
					<div class="componente"><span> Complemento: </span><input type="text" id="nm" name="nome" /></div>

				</div>
			</fieldset>
			<fieldset>
				<legend>Informações de Contato</legend>
				<div class="bloco" id="divInfoContatos">

					<div class="componente"><span> Telefone: </span><input type="tel" id="nm" name="nome" /></div>
					<div class="componente"><span> Telefone(Local de Trabalho): </span><input type="tel" id="nm"
							name="nome" /></div>
					<div class="componente"><span> Celular: </span><input type="date" id="nm" name="nome" /></div>
					<div class="componente"><span> Email: </span><input type="text" id="nm" name="nome" /></div>

			</fieldset>
			</div>
		</fieldset>
	</form>

	<div class="clock">
		<h1 class="time" id="data-hora"></h1>
	</div>

	<script>
		function alerta() {
			alert(`Marque as duas opções se for aluno e professor. `)
		}
		function atualizarRelogio() {
			const relogio = document.getElementById('data-hora');
			const dataAtual = new Date().toLocaleString('pt-BR', {
				timeZone: 'America/Sao_Paulo' // Configuração do fuso horário de Brasília
			});

			relogio.textContent = dataAtual;
		}

		// Chama a função inicialmente para exibir a hora atual
		atualizarRelogio();

		// Atualiza o relógio a cada segundo
		setInterval(atualizarRelogio, 1000);


		// FUNÇÃO PARA MOSTRAR E OCULTAR CAMPOS
		function mostrarOcultarCampos() {
			const checkboxAluno = document.getElementById('aluno');
			const checkboxProfessor = document.getElementById('professor');
			const campoFormacao = document.getElementById('formacao');
			const campoMatricula = document.getElementById('matricula');
			const campoContrato = document.getElementById('contrato');
			const campoSalario = document.getElementById('salario');

			// Verifica se o checkbox do aluno está marcado e mostra/esconde o campo de matrícula
			if (checkboxAluno.checked) {
				campoMatricula.style.display = 'block';
			} else {
				campoMatricula.style.display = 'none';
			}

			// Verifica se o checkbox do professor está marcado e mostra/esconde o campo de formação
			if (checkboxProfessor.checked) {
				campoFormacao.style.display = 'block';
				campoContrato.style.display = 'block';
				campoSalario.style.display = 'block';
			} else {
				campoFormacao.style.display = 'none';
				campoContrato.style.display = 'none';
				campoSalario.style.display = 'none';
			}
		}
	</script>

	</form>
</body>

</html>
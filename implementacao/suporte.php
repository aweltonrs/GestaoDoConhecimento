<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Suporte</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<script lang="javascript" src="js/efeitos.js"></script>
	<script src="https://kit.fontawesome.com/5fa47ea405.js"></script>
</head>
<script src="cv-javascript/funcoes.js"></script>
<script>
    function calc_total() {
        var qtd = parseInt(document.getElementById('cQtd').value);
        tot = qtd * 1500;
        document.getElementById('cTot').value = tot;
    }
</script>

<body>
    <div id="interface">
        <header id="cabecalho">
			<img src="imagens/icone.jpg" id="icon">
            <nav id="navbar">
				<ul>
					<li onmousemove="mudaIcone('imagens/icone01.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="home.php"> Inicio </a> </li>
					<li onmousemove="mudaIcone('imagens/icone02.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="ciencias.php"> Ciências </a>
						<ul>
							<li><a href="#" id="eletronicos">Exatas </a></li>
							<li><a href="#" id="softwares"> Humanas </a></li>
							<li><a href="#" id="games"> Tecnologia </a></li>
							<li><a href="#" id="ferramentas"> Quimica </a></li>
							<li><a href="#" id="ferramentas"> Biologia </a></li>
							<li><a href="#" id="ferramentas"> Pesquisas Espaciais </a></li>
							
						</ul>
					</li>
					
					<li onmousemove="mudaIcone('imagens/icone03.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="#"> Gestão do Conhecimento </a> </li>
					<li onmousemove="mudaIcone('imagens/icone04.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="suporte.php"> Suporte </a> </li>
				</ul>	
			</nav>
        </header>
        <section id="corpo-full">
            <article id="noticia-principal">
                <header id="cabecalho-artigo">
                    <h3>Fale Conosco > Contato</h3>
                    <h1>Formulário de Contato</h1>
                    <h3 class="direita">Atualizado em 01/Maio/2013</h3>
                </header>
                <form method="POST" id="fContato" oninput="calc_total()" onsubmit="return validarFormulario()"
                action="https://formspree.io/xvowzopd">
                    <fieldset id="usuario">
                        <legend>Identificação do Usuário</legend>
                        <p><label for="cNome">Nome*:</label>
                            <input type="text" name="tNome" id="cNome" size="20" maxlength="30"
                                placeholder="Nome Completo" required /></p>
                        <p><label for="cCpf">CPF*:</label>
                            <input type="text" name="tCpf" id="cCpf" size="11" maxlength="11"
                                placeholder="" required /></p>

                        <p><label for="cSenha">Senha:</label>
                            <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8"
                                placeholder="Digita uma senha" /></p>

                        <p>
                            <label for="cEmail">E-mail:</label>
                            <input type="email" name="tEmail" id="cEmail" size="20" maxlength="40" />
                        </p>

                        <fieldset id="sexo">
                            <legend>Sexo</legend>
                            <input type="radio" name="tSexo" id="cMasc" checked /><label
                                for="cMasc">Masculino</label></br>
                            <input type="radio" name="tSexo" id="cFem" /> <label for="cFem">Feminino</label>
                        </fieldset>
                        <p><label for="cNasc">Data de Nascimento:</label><input type="date" name="tNasc" id="cNasc" />
                        </p>

                    </fieldset>

                    <fieldset id="endereco">
                        <legend>Endereço do Usuário</legend>
                        <p><label for="cRua">Logradouro:</label>
                            <input type="text" name="tRua" id="cRua" size="13" maxlength="80"
                                placeholder="Rua, Av, Trava, ..." /></p>

                        <p><label for="cNum">Número:</label>
                            <input type="number" name="tNum" id="cNum" min="0" max="99999" /></p>
                        <p><label for="cEst">Estado:</label>
                            <select id="cEst">
                                <optgroup label="Região Sudeste">
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP" selected>São Paulo</option>
                                    <option value="MG">Minas Gerais</option>
                                </optgroup>
                                <optgroup label="Sul">
                                    <option value="PR">Paraná</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                </optgroup>
                            </select> </p>
                        <p><label for="cCid">Cidade:</label>
                            <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade"
                                list="cidades" /></p>
                        <datalist id="cidades">
                            <option value="Rio de Janeiro"></option>
                            <option value="Nova Iguaçu"></option>
                            <option value="Niteroi"></option>
                            <option value="Belfort Roxo"></option>
                        </datalist>
                        </datalist>
                    </fieldset>

                    <fieldset id="mensagem">
                        <legend>Mensagem do Usuário</legend>
                        <p><label for="cUrg">Grau de Urgência:</label>
                            Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2" />Máx</p>
                        <p><label for="cMsg">Mensagem:</label>
                            <textarea name="tMsg" id="cMsg" cols="35" rows="5"
                                placeholder="Deixe aqui sua mensagem"></textarea></p>
                    </fieldset>

                    <input type="image" name="tEnviar" src="imagens/botao-enviar.png" />
                </form>

            </article>
        </section>


        <footer id="rodape">
            <p>Copyright 2024 - Project Catalog <br />
                <a href="" target="_blank">Facebook</a> | <a href="" target="_blank">Twitter</a></p>
        </footer>
    </div>
</body>

</html>
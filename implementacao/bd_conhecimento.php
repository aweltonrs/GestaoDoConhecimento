
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"\>
        
        <title>Formulario</title>
        
        
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
        <script lang="javascript" src="js/efeitos.js"></script>
        <script src="https://kit.fontawesome.com/5fa47ea405.js"></script>
        
    </head>
    <body>
    
        <img src="imagens/icone.jpg" id="icon">
        <nav id="navbar">
            <ul>
                <li onmousemove="mudaIcone('imagens/icone01.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="home.php"> Inicio </a> </li>
                <li onmousemove="mudaIcone('imagens/icone02.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href=""> Tipo de Informações </a>
                    <ul>
                        <li><a href="cadastro.php" id="infoPess">Pessoais </a></li>
                        <li><a href="bd_conhecimento.php" id="infoBd_conhecimento"> Banco de Conhecimento </a></li>
                        <li><a href="#" id="infoBd_conhecimento"> Banco de Talentos </a></li>
                        <li><a href="#" id="infoProdutos"> Produtos </a></li>
                        
                    </ul>
                </li>

                <li onmousemove="mudaIcone('imagens/icone04.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="suporte.php"> Suporte </a> </li>
                <li onmousemove="mudaIcone('imagens/icone04.jpg')" onmouseout="mudaIcone('imagens/icone.jpg')"> <a href="conhecimento.php"> Institucional </a> </li>
                
            </ul>	
        </nav>
        <form>
            <fieldset><legend>Banco de Conhecimento</legend>
                <fieldset><legend>Nivel de Curso</legend>
                    <span> Selecione: </span> 
                        <select>
                            <option>Fundamental</option>
                            <option>Médio</option>
                            <option>Superior</option>
                            <option>Pós</option>
                        </select>
                </fieldset>
            
                <fieldset><legend>Area de Conhecimento</legend>
                    <span> Denominação</span><input type="text" id="txtDenominacao" name="txtDenominacao"/>
                
                </fieldset>
            
                <fieldset><legend>Curso</legend>
                    <span> Assunto</span><input type="text" id="nm" name="nome"/>
                    <span> Area de conhecimento</span> 
                        <select>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                    <span> Nivel do Curso</span> 
                        <select>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                    
                    <span> Status</span> 
                        <select>
                            <option>Ativo</option>
                            <option>Inativo</option>
                        </select>
                    
                    
                    <span>	Nome do Curso: <span> <input type="text" id="nomeCurso" name="nomeCurso"/>
                    <span>	Carga Horária: <span> <input type="text" id="cargaHorariaCurso" name="cargaHorariaCurso"/>	
                    <span>  Inicio: </span><input type="date" id="inicioCurso" name="inicioCurso"/>
                    <span>  Previsao de Conclusão: </span><input type="date" id="previsaoCurso" name="previsaoCurso"/>
                    
                </fieldset>
            
                <fieldset><legend>Disciplina</legend>
                    <span> Nome</span><input type="text" id="txtNomeDisciplina" name="txtNomeDisciplina"/>
                    <span> Area de conhecimento</span> 
                        <select>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                </fieldset>
            
                <fieldset><legend>Assunto</legend>
                    <span> Nome: </span><input type="text" id="txtNomeAssunto" name="txtNomeAssunto"/>
                    <span> Descrição: </span><input type="text" id="txtDescricaoAssunto" name="txtDescricaoAssunto"/>
                    <span> Disciplina: </span> 
                        <select>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                </fieldset>
            </form>

            <div class="clock">
				<h1 class="time" id="data-hora"></h1>
			  </div>
			
<script>
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
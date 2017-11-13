<html>
	<?php
	session_start();
	include("conexao.php");
	include("funcoes.php");
	protegePagina();
	?>

	<head>
		<title>Painel de Controle</title>
		<meta meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
		<link rel="stylesheet" type="text/css" href="css/estilo_meu.css"/>
		<script language="javascript">
			function up(lstr){ // converte minusculas em maiusculas
				var str=lstr.value; //obtem o valor
				lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
				}
				function down(lstr){ // converte maiusculas em minusculas
				var str=lstr.value; //obtem o valor
				lstr.value=str.toLowerCase(); //converte as strings e retorna ao campo
			}
</script>
	</head>
	<body>
		<div align="center">
		<table width="100%" height="20%">
			<table>
				<tr>
					<td>
						<div class="header" align="center">
							<center><img src="./imagem/logo.jpg"></center>
							<span></span>	
						</div>
					</td>
				</tr>
				<tr>
					<td>
                    	<div class="topo">
							<span>
								<?php echo "Bem vindo, ".$_SESSION['nome']; ?> - <a href='?acao=sair'>Deslogar</a>
    
                                <?php
                                    if (isset($_GET['acao']) && $_GET['acao'] == 'sair') {
                                        sairPagina();
                                    }
                                ?>
							</span>	

						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="menu">
							<ul>
								<li><a href="cadastraCliente.php">Cadastrar Cliente</a></li>
								<li><a href="formFuncionario.php">Cadastrar Funcionário</a></li>
								<li><a href="modificaUsuario.php">Relatórios</a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="painel" align="center">
							<table width="600" cellspacing="5" cellpadding="5" class="tbl_mostraUsuarios" align="left">
								<tr>
									<td>
										<form name="frm_login" id="frm_login" method="post" action="cadastraFuncionario.php">
											<span>Nome do Funcionario: <input type="text" name="nome" OnKeyUp="up(this)"></span><br><br>
											<span>Setor: <input type="text" name="setor" OnKeyUp="up(this)"></span><br><br>
											<span>CPF: <input type="text" name="cpf" OnKeyUp="up(this)"></span><br><br>
											<span>Login: <input type="text" name="login" OnKeyUp="up(this)"></span><br><br>
											<span>Senha: <input type="password" name="senha" OnKeyUp="up(this)"></span><br><br>
											<input type="hidden" name="acao" value="cadastrar_funcionario"/>
											<input type='submit' value = 'Salvar'>
										</form>
									</td>
								</tr>	
							</table>
						</div>
					</td>	
				</tr>
			</table>
		</table>
		</div>
		</div>

	</body>
</html>
<html>
	<?php
		session_start();
		include("conexao.php");
		include("funcoes.php");
		protegePagina();
	?>
	<head>
		<title>Painel de Controle</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/estilo_meu.css"/>
	</head>
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
								<li><a href="relatorio.php">Relatórios</a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="painel">

						</div>
					</td>	
				</tr>
			</table>
		</table>
		</div>
	</body>
</html>
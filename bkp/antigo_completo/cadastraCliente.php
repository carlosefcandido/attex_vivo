<html>
<?php
	session_start();
	include("conexao.php");
	include("funcoes.php");
	protegePagina();
	
	$codigo = mysql_query("SELECT MAX(id) as max_codigo FROM clientes");
	
	?>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo_meu.css">
		<title>Cadastro Clientes</title>
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
						<div class="painel">
                        	<table border="1" width="900px" align="center">
			<tr>
				<td width="180px" colspan="2">
                <div align="center">
						<h1>Cadastro de Clientes</h1>
					</div>
				</td>
			</tr>
		</table>
		<table border="1" width="900px" align="center">
			<tr>
				<td>	
					<form method="post" action="cadastraCliente2.php">
						Código:<input type="text" name="codigo" value='<?php echo mysql_result($codigo,0)+1;?>' disabled size="10">
						Data da Venda:<input type="text" name="data_venda">
						Número Fixo Venda: <input type="text" name="numero_fixo_venda"><br><br>
						Cliente:<input type="text" name="cliente" size="80">
						CPF: <input type="text" name="cpf"><br><br>
						Telefone de Contato: <input type="text" name="telefone_contato">
						Data de Vencimento: <input type="text" name="data_de_vencimento" size="15">
						Vendedor: <input type="text" name="vendedor"><br><br>
						Supervisor:<input type="text" name="supervisor">
						Plano: <input type="text" name="plano">
						Valor do Chip: <input type="text" name="valor_chip"><br><br>
						Chip pago?<input type="text" name="chip_pago">
						Rua:<input type="text" name="rua">
						Bairro:<input type="text" name="bairro"><br><br>
						Cidade:<input type="text" name="cidade">
						Resposta Entrega de Chip:<input type="text" name="resposta_entrega"><br><br>
						Data Agendada para Entrega:<input type="text" name="data_agendada_entrega">
						Data da 2ª tentativa de Entrega:<input type="text" name="data_segunda_tentativa"><br><br>
						Data da 3ª tentativa de Entrega:<input type="text" name="data_terceira_tentativa">
						Status da Coleta do Contrato:<input type="text" name="status_coleta_contrato"><br><br>
						Data Entrega Contrato BO:<input type="text" name="data_entrega_contrato">
						Pré-Pago:<input type="text" name="pre_pago"><br><br>
						Portabilidade:<input type="text" name="portabilidade">
						Número Portador Migrado:<input type="text" name="numero_portador_migrado"><br><br>
						Análise de Crédito:<input type="text" name="analise_credito">
						Status da Ativação:<input type="text" name="status_ativacao"><br><br>
						Data da Ativação: <input type="text" name="data_ativacao">
						ICCD:<input type="text" name="iccd"><br><br>
						Número:<input type="text" name="numero">
						Status Atual:<input type="text" name="status_atual"><br><br>
						Resposta Ativação:<input type="text" name="resposta_ativacao">
						Base Vivo: <input type="text" name="base_vivo"><br><br>
						Dias de Atraso: <input type="text" name="dias_atraso">
						Farol: <input type="text" name="farol"><br><br>
						Divergência: <input type="text" name="divergencia">
						Cliente 2:<input type="text" name="cliente_2"><br><br>
						Vendas Novos: <input type="text" name="vendas_novos">
						Vendas Portabilidade:<input type="text" name="vendas_portabilidade"><br><br>
						Resposta Input:<input type="text" name="resposta_input">
						Possui Aparelho?<input type="text" name="possui_aparelho"><br><br>
						IMEI:<input type="text" name="imei">
						Valor do Aparelho:<input type="text" name="valor_aparelho"><br><br>
						Aparelho Pago? <input type="text" name="aparelho_pago">
						Número da Solicitação: <input type="text" name="numero_solicitacao"><br><br>
						Modelo do Aparelho: <input type="text" name="modelo_aparelho">
						Observação:<input type="text" name="observacao"><br><br>
                        <input type="hidden" name="acao" value="cadastrar_cliente"/>
				</td>
			</tr>
			<tr>
				<td align="right">
						<input type="submit" value="Cadastrar">
				</td>		
					</form>
				</td>
			</tr>
            						</div>
					</td>	
				</tr>
			</table>
		</table>
		</div>	
	</body>
</html>
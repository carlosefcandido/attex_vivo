<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
	session_start();
	include("conexao.php");
	include("funcoes.php");
	protegePagina();
	
	$codigo = mysql_query("SELECT MAX(id) as max_codigo FROM clientes");
	
	?>
	<head>
		<meta charset="UTF-8" />
	<title>Atitude Express</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
        <link rel="stylesheet" href="css/jmenu.css" type="text/css" />
        
        <script src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jMenu.jquery.js"></script>
        <style type="text/css">
			input[type=text] {
	font-family: 'Lato', Calibri, Arial, sans-serif;
	color: #000;
	outline: none;
	border: 1px solid  #E5E5E5;
	font-size:16px;
	padding-left: 10px;
	width: 220px;
	height: 30px;
	padding-left:20px;
	margin: 5px; float: left;
	background-color: #fff;
}
		</style>
        
        <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
	</head>
	<body>
    <div align="right">
    <span>
		<?php echo "Bem vindo, ".$_SESSION['nome']; ?>
    </span>
    </div>                   
   <div class="menu" align="center">
    <div class="menu-content" align="left">
    	<div class="menu-logo">
        </div>
        <div class="menu-menu" align="right">
                <ul id="jMenu">
            <li>
                <a href="landing.php">Página Inicial</a>
                </li>
                            <li>
                <a href="#">Cadastrar Cliente</a>
                </li>
                            <li>
                <a href="cadastrar-funcionario.php">Cadastrar Funcionário</a>
                </li>
                
                <li>
                <a href="relatorios.php">Relatório</a>
                </li>
                            <li>
                             <?php
                                    if (isset($_GET['acao']) && $_GET['acao'] == 'sair') {
                                        sairPagina();
                                    }
                                ?>
                <a href='?acao=sair'>Logout</a>
                </li>
                
        </ul>
        </div>
        </div>
    </div>

    <div align="center">
    <div class="content">
                                <div class="semi-bar" align="left">
				Cadastro de Clientes
            </div>
    	<div class="conteudo">
<div id="form" align="left">
<form method="post" action="cadastraCliente2.php">
<table width="1034" border="0">
  <tr>
    <td width="69">Código</td>
    <td width="252"><input type="text" name="codigo" value='<?php echo mysql_result($codigo,0)+1;?>' disabled size="10"></td>
    <td width="99">Data de Venda</td>
    <td width="255"><input type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" name="data_venda" value="" /></td>
    <td width="61">N° Fixo Venda</td>
    <td width="272"><input type="text" name="numero_fixo_venda" value="" /></td>
  </tr>
</table>
<table width="1020" border="0">
  <tr>
    <td width="69" >Cliente</td>
    <td width="252"><input type="text" name="cliente" class"cliente" value="" /></td>
    <td></td>
    <td width="101">CPF</td>
    <td width="580"><input type="text" name="cpf" value="" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" /></td>
  </tr>
</table>
<table width="980" border="0">
  <tr>
    <td>Tel. de Contato</td>
    <td><input type="text" name="telefone_contato" value=""  maxlength="12" OnKeyPress="formatar('##-####-####', this)"/></td>
    <td>Data de Vencimento</td>
    <td><input type="text" name="data_de_vencimento" maxlength="10" OnKeyPress="formatar('##/##/####', this)" value="" /></td>
    <td>Vendedor</td>
    <td><input type="text" name="vendedor" value="" /></td>
  </tr>
    <tr>
    <td>Supervisor</td>
    <td><input type="text" name="supervisor" value="" /></td>
    <td>Plano</td>
    <td><input type="text" name="plano" value="" /></td>
    <td>Valor do CHIP</td>
    <td><input type="text" name="valor_chip" value="" /></td>
  </tr>
    <tr>
    <td>CHIP Pago?</td>
    <td><input type="text" name="chip_pago" value="" /></td>
    <td>Rua</td>
    <td><input type="text" name="rua" value="" /></td>
    <td>Bairro</td>
    <td><input type="text" name="bairro" value="" /></td>
  </tr>
</table>
<table width="1012" border="0">
  <tr>
    <td width="229">Cidade</td>
    <td width="277"><input type="text" name="cidade" value="" /></td>
    <td width="227">Resposta Entregue do CHIP</td>
    <td width="261"><input type="text" name="resposta_entrega" value="" /></td>
  </tr>
  <tr>
  	<td>Data Agendada para Entrega</td>
    <td><input type="text" name="data_agendada_entrega"></td>
	<td>Data da 2ª tentativa de Entrega</td>
    <td><input type="text" name="data_segunda_tentativa"></td>
  <tr>
    <td>Data da 3ª tentativa de Entrega</td>
    <td><input type="text" name="data_terceira_tentativa" value="" /></td>
    <td>Status da Coleta do Contrato</td>
    <td><input type="text" name="status_coleta_contrato" value="" /></td>
  </tr>
  <tr>
    <td>Data Entrega Contrato BO</td>
    <td><input type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" name="data_entrega_contrato" value="" /></td>
    <td>Pré-Pago</td>
    <td><input type="text" name="pre_pago" value="" /></td>
  </tr>
  <tr>
    <td>Portabilidade</td>
    <td><input type="text" name="portabilidade" value="" /></td>
    <td>Número Portador Migrado</td>
    <td><input type="text" name="numero_portador_migrado" value="" /></td>
  </tr>
  <tr>
    <td>Análise de Crédito</td>
    <td><input type="text" name="analise_credito" value="" /></td>
    <td>Status da Ativação</td>
    <td><input type="text" name="status_ativacao" value="" /></td>
  </tr>
  <tr>
    <td>Data da Ativação</td>
    <td><input type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" name="data_ativacao" value="" /></td>
    <td>ICCD</td>
    <td><input type="text" name="iccd" value="" /></td>
  </tr>
  <tr>
    <td>Número</td>
    <td><input type="text" name="numero" value="" /></td>
    <td>Status Atual</td>
    <td><input type="text" name="status_atual" value="" /></td>
  </tr>
  <tr>
    <td>Resposta Ativação</td>
    <td><input type="text" name="resposta_ativacao" value="" /></td>
    <td>Base Vivo</td>
    <td><input type="text" name="base_vivo" value="" /></td>
  </tr>
  <tr>
    <td>Dias de Atraso</td>
    <td><input type="text" name="dias_atraso" value="" /></td>
    <td>Farol</td>
    <td><input type="text" name="farol" value="" /></td>
  </tr>
  <tr>
    <td>Divergência</td>
    <td><input type="text" name="divergencia" value="" /></td>
    <td>Cliente 2</td>
    <td><input type="text" name="cliente_2" value="" /></td>
  </tr>
  <tr>
    <td>Vendas Novos</td>
    <td><input type="text" name="vendas_novos" value="" /></td>
    <td>Vendas Portabilidade</td>
    <td><input type="text" name="vendas_portabilidade" value="" /></td>
  </tr>
  <tr>
    <td>Resposta Input</td>
    <td><input type="text" name="resposta_input" value="" /></td>
    <td>Possui Aparelho?</td>
    <td><input type="text" name="possui_aparelho" value="" /></td>
  </tr>
  <tr>
    <td>IMEI</td>
    <td><input type="text" name="imei" value="" /></td>
    <td>Valor do Aparelho</td>
    <td><input type="text" name="valor_aparelho" value="" /></td>
  </tr>
  <tr>
    <td>Aparelho Pago?</td>
    <td><input type="text" name="aparelho_pago" value="" /></td>
    <td>Número da Solicitação</td>
    <td><input type="text" name="numero_solicitacao" value="" /></td>
  </tr>
  <tr>
    <td>Modelo do Aparelho</td>
    <td><input type="text" name="modelo_aparelho" value="" /></td>
    <td>Observação</td>
    <td><input type="text" name="observacao" value="" /></td>
  </tr>
</table>
<input type="hidden" name="acao" value="cadastrar_cliente"/>
<br>
<table width="980" border="0">
    <td align="center"><input type="submit" class="send" id="submit" value="Cadastrar Cliente" /></td>
  </tr>
</table>
				</form>
			</div>
            </div>
            </div>
            </div>
  </div>
            </div>
            
            <script src="js/toucheffects.js"></script>
                    <script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu({
                    openClick : false,
                    ulWidth :'auto',
                     TimeBeforeOpening : 100,
                    TimeBeforeClosing : 11,
                    animatedText : false,
                    paddingLeft: 1,
                    effects : {
                        effectSpeedOpen : 150,
                        effectSpeedClose : 150,
                        effectTypeOpen : 'slide',
                        effectTypeClose : 'slide',
                        effectOpen : 'swing',
                        effectClose : 'swing'
                    }

                });
            });
        </script>
</body>
</html>
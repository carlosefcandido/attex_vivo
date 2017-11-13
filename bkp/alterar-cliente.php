<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

		session_start();
	include("conexao.php");
	include("funcoes.php");
	

$buscarCPF = $_POST['buscaCPF'];

					if(isset($buscarCPF)){
						$selectCliente = mysql_query("SELECT * FROM clientes WHERE cpf = '$buscarCPF'");
							if(mysql_num_rows($selectCliente) == 0){
												
											}else{
												$tabela = "<form method='post' action='alterarCliente2.php'><table width='1034' border='0'><tr>";
												while ($linha2 = mysql_fetch_array($selectCliente)) {

													$id= $linha2['id'];
													$data_venda = $linha2['data_venda'];
													$numero_fixo_venda = $linha2['numero_fixo_venda'];
													$cliente = $linha2['cliente'];
													$cpf = $linha2['cpf'];
													$telefone_contato = $linha2['telefone_contato'];
													$data_de_vencimento = $linha2['data_de_vencimento'];
													$vendedor = $linha2['vendedor'];
													$supervisor = $linha2['supervisor'];
													$plano = $linha2['plano'];
													$valor_chip = $linha2['valor_chip'];
													$chip_pago = $linha2['chip_pago'];
													$rua = $linha2['rua'];
													$bairro = $linha2['bairro'];
													$cidade = $linha2['cidade'];
													$resposta_entrega = $linha2['resposta_entrega'];
													$data_agendada_entrega = $linha2['data_agendada_entrega'];
													$data_segunda_tentativa = $linha2['data_segunda_tentativa'];
													$data_terceira_tentativa = $linha2['data_terceira_tentativa'];
													$status_coleta_contrato = $linha2['status_coleta_contrato'];
													$data_entrega_contrato = $linha2['data_entrega_contrato'];
													$pre_pago = $linha2['pre_pago'];
													$portabilidade = $linha2['portabilidade'];
													$numero_portador_migrado = $linha2['numero_portador_migrado'];
													$analise_credito = $linha2['analise_credito'];
													$status_ativacao = $linha2['status_ativacao'];
													$data_ativacao = $linha2['data_ativacao'];
													$iccd = $linha2['iccd'];
													$numero = $linha2['numero'];
													$status_atual = $linha2['status_atual'];
													$resposta_ativacao = $linha2['resposta_ativacao'];
													$base_vivo = $linha2['base_vivo'];
													$dias_atraso = $linha2['dias_atraso'];
													$farol = $linha2['farol'];
													$divergencia = $linha2['divergencia'];
													$cliente_2 = $linha2['cliente_2'];
													$vendas_novos = $linha2['vendas_novos'];
													$vendas_portabilidade = $linha2['vendas_portabilidade'];
													$resposta_input = $linha2['resposta_input'];
													$possui_aparelho = $linha2['possui_aparelho'];
													$imei = $linha2['imei'];
													$valor_aparelho = $linha2['valor_aparelho'];
													$aparelho_pago = $linha2['aparelho_pago'];
													$numero_solicitacao = $linha2['numero_solicitacao'];
													$modelo_aparelho = $linha2['modelo_aparelho'];
													$observacao = $linha2['observacao'];


													//$dataEvolucao2 = implode("/", array_reverse(explode("-",$dataEvolucao)));

													$tabela .= "
															<tr>
    <td width='69'>Código</td>
    <td width='252'><input type='text' name='codigo' value='$id' /></td>
    <td width='99'>Data de Venda</td>
    <td width='255'><input type='text' name='data_venda' OnKeyPress='formatar('##/##/####', this)' value='$data_venda' /></td>
    <td width='61'>N° Fixo Venda</td>
    <td width='272'><input type='text' name='numero_fixo_venda' value='$numero_fixo_venda' /></td>
  </tr>
</table>
<table width='1020' border='0'>
  <tr>
    <td width='69' >Cliente</td>
    <td width='252'><input type='text' name='cliente' class'cliente' value='$cliente' /></td>
    <td></td>
    <td width='101'>CPF</td>
    <td width='580'><input type='text' name='cpf' value='$cpf' maxlength='14' OnKeyPress='formatar('###.###.###-##', this)' /></td>
  </tr>
</table>
<table width='980' border='0'>
  <tr>
    <td>Tel. de Contato</td>
    <td><input type='text' name='telefone_contato' value='$telefone_contato'  maxlength='12' OnKeyPress='formatar('##-####-####', this)'/></td>
    <td>Data de Vencimento</td>
    <td><input type='text' name='data_de_vencimento' maxlength='10' OnKeyPress='formatar('##/##/####', this)' value='$data_de_vencimento' /></td>
    <td>Vendedor</td>
    <td><input type='text' name='vendedor' value='$vendedor' /></td>
  </tr>
    <tr>
    <td>Supervisor</td>
    <td><input type='text' name='supervisor' value='$supervisor' /></td>
    <td>Plano</td>
    <td><input type='text' name='plano' value='$plano' /></td>
    <td>Valor do CHIP</td>
    <td><input type='text' name='valor_chip' value='$valor_chip' /></td>
  </tr>
    <tr>
    <td>CHIP Pago?</td>
    <td><input type='text' name='chip_pago' value='$chip_pago' /></td>
    <td>Rua</td>
    <td><input type='text' name='rua' value='$rua' /></td>
    <td>Bairro</td>
    <td><input type='text' name='bairro' value='$bairro' /></td>
  </tr>
</table>
<table width='1012' border='0'>
  <tr>
    <td width='229'>Cidade</td>
    <td width='277'><input type='text' name='cidade' value='$cidade' /></td>
    <td width='227'>Resposta Entregue do CHIP</td>
    <td width='261'><input type='text' name='resposta_entrega' value='$resposta_entrega' /></td>
  </tr>
  <tr>
  	<td>Data Agendada para Entrega</td>
    <td><input type='text' name='data_agendada_entrega' value='$data_agendada_entrega'></td>
	<td>Data da 2ª tentativa de Entrega</td>
    <td><input type='text' name='data_segunda_tentativa' value='$data_segunda_tentativa'></td>
  <tr>
    <td>Data da 3ª tentativa de Entrega</td>
    <td><input type='text' name='data_terceira_tentativa' value='$data_terceira_tentativa' /></td>
    <td>Status da Coleta do Contrato</td>
    <td><input type='text' name='status_coleta_contrato' value='$status_coleta_contrato' /></td>
  </tr>
  <tr>
    <td>Data Entrega Contrato BO</td>
    <td><input type='text' maxlength='10' OnKeyPress='formatar('##/##/####', this)' name='data_entrega_contrato' value='$data_entrega_contrato' /></td>
    <td>Pré-Pago</td>
    <td><input type='text' name='pre_pago' value='$pre_pago' /></td>
  </tr>
  <tr>
    <td>Portabilidade</td>
    <td><input type='text' name='portabilidade' value='$portabilidade' /></td>
    <td>Número Portador Migrado</td>
    <td><input type='text' name='numero_portador_migrado' value='$numero_portador_migrado' /></td>
  </tr>
  <tr>
    <td>Análise de Crédito</td>
    <td><input type='text' name='analise_credito' value='$analise_credito' /></td>
    <td>Status da Ativação</td>
    <td><input type='text' name='status_ativacao' value='$status_ativacao' /></td>
  </tr>
  <tr>
    <td>Data da Ativação</td>
    <td><input type='text' maxlength='10' OnKeyPress='formatar('##/##/####', this)' name='data_ativacao' value='$data_ativacao' /></td>
    <td>ICCD</td>
    <td><input type='text' name='iccd' value='$iccd' /></td>
  </tr>
  <tr>
    <td>Número</td>
    <td><input type='text' name='numero' value='$numero' /></td>
    <td>Status Atual</td>
    <td><input type='text' name='status_atual' value='$status_atual' /></td>
  </tr>
  <tr>
    <td>Resposta Ativação</td>
    <td><input type='text' name='resposta_ativacao' value='$resposta_ativacao' /></td>
    <td>Base Vivo</td>
    <td><input type='text' name='base_vivo' value='$base_vivo' /></td>
  </tr>
  <tr>
    <td>Dias de Atraso</td>
    <td><input type='text' name='dias_atraso' value='$dias_atraso' /></td>
    <td>Farol</td>
    <td><input type='text' name='farol' value='$farol' /></td>
  </tr>
  <tr>
    <td>Divergência</td>
    <td><input type='text' name='divergencia' value='$divergencia' /></td>
    <td>Cliente 2</td>
    <td><input type='text' name='cliente_2' value='$cliente_2' /></td>
  </tr>
  <tr>
    <td>Vendas Novos</td>
    <td><input type='text' name='vendas_novos' value='$vendas_novos' /></td>
    <td>Vendas Portabilidade</td>
    <td><input type='text' name='vendas_portabilidade' value='$vendas_portabilidade' /></td>
  </tr>
  <tr>
    <td>Resposta Input</td>
    <td><input type='text' name='resposta_input' value='$resposta_input' /></td>
    <td>Possui Aparelho?</td>
    <td><input type='text' name='possui_aparelho' value='$possui_aparelho' /></td>
  </tr>
  <tr>
    <td>IMEI</td>
    <td><input type='text' name='imei' value='$imei' /></td>
    <td>Valor do Aparelho</td>
    <td><input type='text' name='valor_aparelho' value='$valor_aparelho' /></td>
  </tr>
  <tr>
    <td>Aparelho Pago?</td>
    <td><input type='text' name='aparelho_pago' value='$aparelho_pago' /></td>
    <td>Número da Solicitação</td>
    <td><input type='text' name='numero_solicitacao' value='$numero_solicitacao' /></td>
  </tr>
  <tr>
    <td>Modelo do Aparelho</td>
    <td><input type='text' name='modelo_aparelho' value='$modelo_aparelho' /></td>
    <td>Observação</td>
    <td><input type='text' name='observacao' value='$observacao' /></td>
  </tr>
</table>
<input type='hidden' name='id_funcionario' value=''/>
<input type='hidden' name='acao' value='alterar_cliente'/>
<br>
<table width='980' border='0'>
    <td align='center'><input type='submit' class='send' id='submit' value='Alterar Cliente' /></td>
  </tr>

															
													
														";
														
												}
												$tabela .= "</table>
				</form>";
												
											}
										}
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(function data() {

$( "#data" ).datepicker();

});

</script>

    
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
                <a href="cadastrar-cliente.php">Cadastrar Cliente</a>
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
				Alterar Clientes
            </div>
            <div class="conteudo">
<?php echo $tabela; ?>

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
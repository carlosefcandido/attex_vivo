<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

		session_start();
	include("conexao.php");
	include("funcoes.php");
	

$buscarCPF = $_POST['buscaCPF'];

					if(isset($buscarCPF)){
						$selectCliente = mysql_query("SELECT clientes.id, clientes.data_venda, clientes.numero_fixo_venda, clientes.cliente, clientes.cpf, clientes.nome_mae, clientes.telefone_contato, clientes.email, clientes.data_de_vencimento, clientes.vendedor, clientes.supervisor, clientes.produto1, clientes.produto2, clientes.produto3, clientes.valor_chip, clientes.chip_pago, clientes.rua, clientes.bairro, clientes.cidade, clientes.resposta_entrega, clientes.data_agendada_entrega, clientes.data_segunda_tentativa, clientes.data_terceira_tentativa, clientes.status_coleta_contrato, clientes.data_entrega_contrato, clientes.pre_pago, clientes.portabilidade, clientes.numero_portador_migrado, clientes.analise_credito, clientes.status_ativacao, clientes.data_ativacao, clientes.iccd, clientes.numero, clientes.status_atual, clientes.resposta_ativacao, clientes.base_vivo, clientes.dias_atraso, clientes.farol, clientes.divergencia, clientes.cliente_2, clientes.vendas_novos, clientes.vendas_portabilidade, clientes.resposta_input, clientes.possui_aparelho, clientes.imei, clientes.valor_aparelho, clientes.aparelho_pago, clientes.numero_solicitacao, clientes.modelo_aparelho, clientes.observacao, clientes.id_usuario, usuarios.codigo, usuarios.nome from clientes inner join usuarios where clientes.cpf='$buscarCPF' and usuarios.codigo = clientes.id_usuario");
							if(mysql_num_rows($selectCliente) == 0){
												echo "<script>alert('Nenhum cliente cadastrado com esse CPF!'); location.href='BuscarCliente.php'</script>";
											}else{
												$tabela = "<form method='post' action='alterarCliente2.php'><table width='1034' border='0'><tr>";
												while ($linha2 = mysql_fetch_array($selectCliente)) {

													$id= $linha2['id'];
													$data_venda = $linha2['data_venda'];
													$numero_fixo_venda = $linha2['numero_fixo_venda'];
													$cliente = $linha2['cliente'];
													$cpf = $linha2['cpf'];
													$nome_mae = $linha2['nome_mae'];
													$telefone_contato = $linha2['telefone_contato'];
													$email = $linha2['email'];
													$data_de_vencimento = $linha2['data_de_vencimento'];
													$vendedor = $linha2['vendedor'];
													$supervisor = $linha2['supervisor'];
													$produto1 = $linha2['produto1'];
													$produto2 = $linha2['produto2'];
													$produto3 = $linha2['produto3'];
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
													$id_usuario = $linha2['id_usuario'];
													$codigo = $linha2['codigo'];
													$nome = $linha2['nome'];


													//$dataEvolucao2 = implode("/", array_reverse(explode("-",$dataEvolucao)));

													$tabela .= "
															<tr>
    <td width='69'>Código</td>
    <td width='252'><input type='text' name='codigo' value='$id' /></td>
    <td width='99'>Data de Venda</td>
    <td width='255'><input type='text' name='data_venda' value='$data_venda' /></td>
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
    <td width='252'><input type='text' name='cpf' value='$cpf' maxlength='14' OnKeyPress='formatar('###.###.###-##', this)' /></td>
	 <td width='69'>Nome da Mãe</td>
    <td><input type='text' name='nome_mae' value='$nome_mae' /></td>
  </tr>
</table>
<table width='980' border='0'>
  <tr>
    <tr>
    <td>Tel. de Contato</td>
    <td><input type='text' name='telefone_contato' value='$telefone_contato'  maxlength='12' OnKeyPress='formatar('##-####-####', this)'/></td>
    <td>E-mail</td>
    <td><input type='text' name='email' value='$email' /></td>
    <td>Data de Vencimento</td>
    <td><input type='text' name='data_de_vencimento' maxlength='10' OnKeyPress='formatar('##/##/####', this)' value='$data_de_vencimento' /></td>
    
  </tr>
    <tr>
    <td>Vendedor</td>
    <td><input type='text' name='vendedor' value='$nome' /></td>
    <td>Supervisor</td>
    <td><input type='text' name='supervisor' value='$supervisor' /></td>
    <td>Valor do CHIP</td>
    <td><input type='text' name='valor_chip' value='$valor_chip' /></td>
  </tr>
  <tr>
  	<td>Produto</td>
  </tr>
  <tr>
  	<td>Fixo</td>
    <td><input type='text' name='produto1' value='$produto1' /></td>
    <td>Controle</td>
    <td><input type='text' name='produto2' value='$produto2' /></td>
    <td>Modem</td>
    <td><input type='text' name='produto3' value='$produto3' /></td>
  </tr>
    <tr>
    <td>Rua</td>
    <td><input type='text' name='rua' value='$rua' /></td>
    <td>Bairro</td>
    <td><input type='text' name='bairro' value='$bairro' /></td>
	<td width='229'>Cidade</td>
    <td width='277'><input type='text' name='cidade' value='$cidade' /></td>
  </tr>
</table>
<table width='1012' border='0'>
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
  	<td>Resposta Ativação</td>
    <td><input type='text' name='resposta_ativacao' value='$resposta_ativacao' /></td>
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
		<meta charset="UTF-8" />
	<title>Atitude Express</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
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
/* Reset CSS */
*, *:after, *:before{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
  font-size: 14px;
  line-height: 1.5;
}
/* Fundo do menu */
.menu{
  background: #fff;
}
/* Remove as bolinhas do lado das listas */
.menu .menu-list, .menu .sub-menu{
  list-style: none;
}
/* Configura todos os links do nosso menu */
.menu a{
  color: #000;
  text-decoration: none;
  display: block;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 700;
  letter-spacing:0.2em;
}
/* Faz os <li>s ficarem na horizontal */
.menu > .menu-list > li{
  float: left;
  position: relative;
}
/* Configura os links do menu principal */
.menu > .menu-list > li > a {
  padding: 20px;
  margin: 0 5px;
  background: #fff;
}
/* Configura o fundo do menu principal quando com mouse hover */
.menu > .menu-list > li:hover a {
  background: #fff;
}
/* Mostra o submenu no evento de mouse hover */
.menu > .menu-list > li:hover > .sub-menu {
  display: block;
}
/* Configura o estilo do submenu */
.menu > .menu-list > li > .sub-menu {
  position: absolute;
  top: 50px;
  left: 5px;
  background: #fff;
  min-width: 200px;
  z-index: 1000;
  display: none;
}
/* Configura os links do submenu */
.menu > .menu-list > li > .sub-menu > li > a {
	padding: 10px 20px;
}
/* Clearfix para o menu */
.menu:after {
  content: '.';
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
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
   <div class="menu-table" align="center">
    <div class="menu-content" align="left">
    	<div class="menu-logo">
        </div>
        <div class="menu-menu">
  <div class="menu">
  <ul class="menu-list">
    <li><a href="index.php">PÁGINA INICIAL</a></li>
    <li>
      <a href="#">CLIENTE</a>
       <ul class="sub-menu">
        <li><a href="cadastrar-cliente.php">Cadastrar Cliente</a></li>
        <li><a href="BuscarCliente.php">Editar Cliente</a></li>
      </ul>
    </li>
    <li>
      <a href="#">FUNCIONÁRIO</a>
       <ul class="sub-menu">
        <li><a href="cadastrar-funcionario.php">Cadastrar Funcionário</a></li>
        <li><a href="BuscarFuncionario.php">Editar Funcionário</a></li>
      </ul>
    </li>
    <li><a href="data.php">Relatório</a></li>
    <li><a href="#">Logout</a></li>
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
          
</body>
</html>
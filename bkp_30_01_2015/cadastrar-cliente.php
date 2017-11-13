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
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
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
   <div align="right">
    <span>
		<?php echo "Bem vindo, ".$_SESSION['nome']; ?>
    </span>
    </div> 
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
    <li><a href="#">Relatório</a></li>
    <li><?php
                                    if (isset($_GET['acao']) && $_GET['acao'] == 'sair') {
                                        sairPagina();
                                    }
                                ?>
                <a href='?acao=sair'>Logout</a></li>

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
    <td width="252"><input type="text" name="codigo" value='<?php echo mysql_result($codigo,0)+1;?>' disabled size="10" alt="Data no formato 11/11/1111"></td>
    <td width="99">Data de Venda</td>
    <td width="255"><input type="text" maxlength="10"  name="data_venda" OnKeyPress="formatar('##/##/####', this)"value="" /></td>
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
    <td width="252"><input type="text" name="cpf" value="" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" /></td>
    <td width="69">Nome da Mãe</td>
    <td><input type="text" name="nome_mae" value="" /></td>
  </tr>
</table>
<table width="980" border="0">
  <tr>
    <td>Tel. de Contato</td>
    <td><input type="text" name="telefone_contato" value=""  maxlength="12" OnKeyPress="formatar('##-####-####', this)"/></td>
    <td>E-mail</td>
    <td><input type="text" name="email" value="" /></td>
    <td>Data de Vencimento</td>
    <td><input type="text" name="data_de_vencimento" maxlength="10" OnKeyPress="formatar('##/##/####', this)" value="" /></td>
    
  </tr>
    <tr>
    <td>Vendedor</td>
    <td><input type="text" name="vendedor" value="" /></td>
    <td>Supervisor</td>
    <td><input type="text" name="supervisor" value="" /></td>
    <td>Valor do CHIP</td>
    <td><input type="text" name="valor_chip" value="" /></td>
  </tr>
  <tr>
  	<td>Produto</td>
  </tr>
  <tr>
  	<td>Fixo</td>
    <td><input type="text" name="pacote1" value="" /></td>
    <td>Controle</td>
    <td><input type="text" name="pacote2" value="" /></td>
    <td>Modem</td>
    <td><input type="text" name="pacote3" value="" /></td>
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
<input type="hidden" name="id_funcionario" value="<?php $_SESSION['codigo']; ?>"/>
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
</body>
</html>
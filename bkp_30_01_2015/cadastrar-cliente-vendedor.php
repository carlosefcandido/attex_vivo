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
<form method="post" action="cadastraCliente3.php">
<table width="970" border="0">
  <tr>
    <td width="47">Código</td>
    <td width="913"><input type="text" name="codigo" value='<?php echo mysql_result($codigo,0)+1;?>' disabled size="10" alt="Data no formato 11/11/1111"></td>
    
  </tr>
</table>
<table width="969" border="0">
  <tr>
    
    <td width="42" >Cliente</td>
    <td width="272"><input type="text" name="cliente" class"cliente" value="" /></td>
    <td width="28">CPF</td>
    <td width="250"><input type="text" name="cpf" value="" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" /></td>
    <td width="58">Nome da Mãe</td>
    <td width="293"><input type="text" name="nome_mae" value='' /></td>
  </tr>
</table>
<table width="969" border="0">
  <tr>
    <td width="72">Tel. de Contato</td>
    <td width="251"><input type="text" name="telefone_contato" value=""  maxlength="12" OnKeyPress="formatar('##-####-####', this)"/></td>
    <td width="53">E-mail</td>
    <td width="575"><input type="text" name="email" value="" /></td>
    </tr>
 </table>
 <table width="973">
    <tr>
    <td width="43">Rua</td>
    <td width="250"><input type="text" name="rua" value="" /></td>
    <td width="36">Bairro</td>
    <td width="250"><input type="text" name="bairro" value="" /></td>
    <td width="43">Cidade</td>
    <td width="314"><input type="text" name="cidade" value="" /></td>
  </tr>
</table>
   <br> 
  <table width="721">
    <tr>
    <td>Produto</td>
    </tr>
    <tr>
    <td width="48">Fixo</td>
    <td width="125"><select name="produto1" />
    		<option value=""></option>
    		<option value="R$ 21,20">R$ 21,20</option>
            <option value="R$ 29,90">R$ 29,90</option>
            <option value="R$ 59,90">R$ 59,90</option></td>
    <td width="55">Controle</td>
    <td width="134"><select name="produto2" />
    		<option value=""></option>
    		<option value="R$ 31,90">R$ 31,90</option>
            <option value="R$ 41,90">R$ 41,90</option>
            <option value="R$ 51,90">R$ 51,90</option></td>
    <td width="51">Modem</td>        
    <td width="280"><select name="produto3" />
    		<option value=""></option>
    		<option value="500MB R$ 36,90">500MB R$ 36,90</option>
            <option value="1GB R$ 59,90">1GB R$ 59,90</option>
            <option value="3GB R$ 69,90">3GB R$ 69,90</option>
            <option value="6GB R$ 99,90">6GB R$ 99,90</option>
            <option value="10GB R$ 129,90">10GB R$ 129,90</option>
            <option value="20GB R$ 159,90">20GB R$ 159,90</option></td>        
  </tr>
  </table>
<input type="hidden" name="id_funcionario" value='<?php echo $_SESSION['codigo']; ?>'/>
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
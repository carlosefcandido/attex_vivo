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

    
		<meta charset="UTF-8" />
	<title>Atitude Express</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
        <link rel="stylesheet" href="css/jmenu.css" type="text/css" />
        
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
  
  <ul class='menu-list'>
 
    <li><a href='index.php'>PÁGINA INICIAL</a></li>
    <li>
      <a href='#'>CLIENTE</a>
       <ul class='sub-menu'>
        <li><a href='cadastrar-cliente.php'>Cadastrar Cliente</a></li>
        <li><a href='BuscarCliente.php'>Editar Cliente</a></li>
      </ul>
    </li>
    <li>
      <a href='#'>FUNCIONÁRIO</a>
       <ul class='sub-menu'>
        <li><a href='cadastrar-funcionario.php'>Cadastrar Funcionário</a></li>
        <li><a href='BuscarFuncionario.php'>Editar Funcionário</a></li>
      </ul>
    </li>
    <li><a href='data.php'>Relatório</a></li>
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
				Buscar Clientes
            </div>
    	<div class="conteudo">
<div id="form" align="left">
<form method="post" action="alterar-cliente.php">
<table width="1034" border="0">
<tr>
	<td width="298">Digite o CPF do cliente para efetuar busca:</td>
    <td width="252"><input type="text" name="buscaCPF" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"></td>
    <td width="470"><input type="submit" value="Buscar"></td>
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
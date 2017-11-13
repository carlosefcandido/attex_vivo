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
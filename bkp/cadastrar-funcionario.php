<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
		session_start();
		include("conexao.php");
		include("funcoes.php");
		protegePagina();
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


	input[type=password] {
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
                <a href="#">Cadastrar Funcionário</a>
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
				Cadastro de Funcionários
            </div>
    	<div class="conteudo">
<div id="form" align="center">
<form name="frm_login" id="frm_login" method="post" action="cadastraFuncionario.php">
<table width="418" border="0">
  <tr>
    <td width="156">Nome do Funcionário</td>
    <td width="252"><input type="text" name="nome" value="" /></td>
  </tr>
  <tr>
    <td>Setor</td>
    <td><input type="text" name="setor" value="" /></td>
  </tr>
  <tr>
    <td>CPF</td>
    <td><input type="text" name="cpf" value=""  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"/></td>
  </tr>
  <tr>
    <td>Login</td>
    <td><input type="text" name="login" value="" /></td>
  </tr>
  <tr>
    <td>Senha</td>
    <td><input type="password" name="senha" value="" /></td>
  </tr>
</table>

<br>
<table width="356" border="0">
<input type="hidden" name="acao" value="cadastrar_funcionario"/>
    <td width="350" align="right"><input type="submit" class="send3" id="submit" value="Cadastrar Funcionário" /></td>
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
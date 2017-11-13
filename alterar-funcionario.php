<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

		session_start();
	include("conexao.php");
	include("funcoes.php");
	

$buscarCPF = $_POST['buscaCPF'];

					if(isset($buscarCPF)){
						$selectFuncionario = mysql_query("SELECT * FROM usuarios WHERE cpf = '$buscarCPF'");
							if(mysql_num_rows($selectFuncionario) == 0){
												echo "<script>alert('Nenhum funionário cadastrado com esse CPF!'); location.href='BuscarFuncionario.php'</script>";
											}else{
												$tabela = "<form method='post' action='alterarFuncionario2.php'><table width='418' border='0'><tr>";
												while ($linha2 = mysql_fetch_array($selectFuncionario)) {

													$id= $linha2['codigo'];
													$nome = $linha2['nome'];
													$cpf = $linha2['cpf'];
													$nivel = $linha2['nivel'];
													$usuario = $linha2['usuario'];
													$senha = $linha2['senha'];

													$tabela .= "
															<tr>
    <td width='156'>Nome do Funcionário</td>
    <td width='252'><input type='text' name='nome' value='$nome' /></td>
  </tr>
  <tr>
    <td>CPF</td>
    <td><input type='text' name='cpf' value='$cpf'  maxlength='14' OnKeyPress='formatar('###.###.###-##', this)'/></td>
  </tr>
  <tr>
    <td>Nível</td>
    <td width='252'><input type='text' name='nivel' value='$nivel'/>   	
    </td>
  </tr>
  <tr>
    <td>Login</td>
    <td><input type='text' name='login' value='$usuario' /></td>
  </tr>
  <tr>
    <td width='62'>Senha</td>
    <td width='252'><input type='password' name='senha' value='$senha' /></td>
  </tr>
  </table>
  <br>
<table width='356' border='0'>
<input type='hidden' name='codigo' value='$id'/>
<input type='hidden' name='acao' value='alterar_funcionario'/>
    <td width='350' align='right'><input type='submit' class='send3' id='submit' value='Alterar Funcionário' /></td>
  </tr>
</table>

															
													
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
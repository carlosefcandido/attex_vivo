<?php
	session_start();
	include("conexao.php");
	include("funcoes.php");
	protegePagina();
	
	$id= $_POST['codigo'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$nivel = $_POST['nivel'];
	$usuario = $_POST['login'];
	$senha = $_POST['senha'];
	
	if(isset($_POST['acao']) && $_POST['acao'] == "alterar_funcionario"){
	 	if($data_venda =! ""){
	 		$alterarCliente = mysql_query("UPDATE usuarios set nome = '$nome', cpf = '$cpf', nivel = '$nivel', usuario = '$usuario', senha = '$senha' WHERE codigo = '$id'");
	 		echo "<script>alert('Funcionário Alterado com Sucesso!!');location.href='landing.php'</script>";
	 	}
	 	
	 }

?>
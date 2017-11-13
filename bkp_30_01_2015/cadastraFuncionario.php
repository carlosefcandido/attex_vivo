<?php
	session_start();
	include("conexao.php");

	$nome = $_POST['nome'];
	$nivel = $_POST['nivel'];
	$cpf = $_POST['cpf'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$selectCliente = mysql_query("SELECT * from usuarios where cpf = '$cpf'");
	$consulta = mysql_fetch_array($selectCliente);

	 if(isset($_POST['acao']) && $_POST['acao'] == "cadastrar_funcionario"){
	 	if($nome == "" || $login == "" || $senha == ""){
	 		echo "<script>alert('Os campos não podem ficar vazios'); location.href='cadastrar-funcionario.php'</script>";
	 	}else if($cpf == $consulta['cpf']){
					echo "<script>alert('Existe Funcionário cadastrado com esse CPF!'); location.href='cadastrar-funcionario.php'</script>";
				}else{
	 				$inserirEvolucao = mysql_query("INSERT INTO usuarios (nome, cpf, nivel, usuario, senha) VALUES ('$nome', '$cpf', '$nivel', '$login', '$senha')");
	 				echo "<script>alert('Funcionario Cadastrado com Sucesso!!'); location.href='cadastrar-funcionario.php'</script>";
	 	}
	 	
	 }
?>
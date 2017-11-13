<?php
	session_start();
	include("conexao.php");

	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$cpf = $_POST['cpf'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	 if(isset($_POST['acao']) && $_POST['acao'] == "cadastrar_funcionario"){
	 	if($nome == "" || $setor == "" || $login == "" || $senha == ""){
	 		echo "<script>alert('Os campos não podem ficar vazios'); location.href='cadastraFuncionario.php'</script>";
	 	}else{
	 		$inserirEvolucao = mysql_query("INSERT INTO usuarios (nome, setor, cpf, usuario, senha) VALUES ('$nome', '$setor', '$cpf', '$login', '$senha')");
	 		echo "<script>alert('Funcionario Cadastrado com Sucesso!!'); location.href='painel.php'</script>";
	 	}
	 	
	 }
?>
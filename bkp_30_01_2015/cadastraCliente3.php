<?php
	session_start();
	include("conexao.php");

	
	$cliente = $_POST['cliente'];
	$cpf = $_POST['cpf'];
	$nome_mae = $_POST['nome_mae'];
	$telefone_contato = $_POST['telefone_contato'];
	$email = $_POST['email'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$produto1 = $_POST['produto1'];
	$produto2 = $_POST['produto2'];
	$produto3 = $_POST['produto3'];
	$id_usuario = $_POST['id_funcionario'];
	
	$selectCliente = mysql_query("SELECT * from clientes where cpf = '$cpf'");
	$consulta = mysql_fetch_array($selectCliente);
	

	 if(isset($_POST['acao']) && $_POST['acao'] == "cadastrar_cliente"){
	 	if($cpf == ""){
	 		echo "<script>alert('Os campos não podem ficar vazios'); location.href='cadastrar-cliente-vendedor.php'</script>";
	 	}else if($cpf == $consulta['cpf']){
					echo "<script>alert('Existe Cliente cadastrado com esse CPF!'); location.href='cadastrar-cliente-vendedor.php'</script>";
					
				}else{
					$inserirClientes = mysql_query("INSERT INTO clientes (cliente, cpf, nome_mae, telefone_contato, email, produto1, produto2, produto3, rua, bairro, cidade, status_atual, id_usuario) VALUES ('$cliente', '$cpf', '$nome_mae', '$telefone_contato', '$email', '$produto1', '$produto2', '$produto3', '$rua', '$bairro', '$cidade', 'Pendente', '$id_usuario')");
	 				echo "<script>alert('Cliente Cadastrado com Sucesso!!'); location.href='cadastrar-cliente-vendedor.php'</script>";
					}
	 	}
		
?>
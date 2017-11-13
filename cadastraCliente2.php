<?php
	session_start();
	include("conexao.php");

	$data_venda = $_POST['data_venda'];
	$numero_fixo_venda = $_POST['numero_fixo_venda'];
	$cliente = $_POST['cliente'];
	$cpf = $_POST['cpf'];
	$telefone_contato = $_POST['telefone_contato'];
	$data_de_vencimento = $_POST['data_de_vencimento'];
	$vendedor = $_POST['vendedor'];
	$supervisor = $_POST['supervisor'];
	$valor_chip = $_POST['valor_chip'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$portabilidade = $_POST['portabilidade'];
	$numero_portador_migrado = $_POST['numero_portador_migrado'];
	$analise_credito = $_POST['analise_credito'];
	$status_ativacao = $_POST['status_ativacao'];
	$data_ativacao = $_POST['data_ativacao'];
	$iccd = $_POST['iccd'];
	$numero = $_POST['numero'];
	$status_atual = $_POST['status_atual'];
	$resposta_ativacao = $_POST['resposta_ativacao'];
	$imei = $_POST['imei'];
	$valor_aparelho = $_POST['valor_aparelho'];
	$aparelho_pago = $_POST['aparelho_pago'];
	$numero_solicitacao = $_POST['numero_solicitacao'];
	$observacao = $_POST['observacao'];
	$nome_mae = $_POST['nome_mae'];
	$email = $_POST['email'];
	$produto1 = $_POST['produto1'];
	$produto2 = $_POST['produto2'];
	$produto3 = $_POST['produto3'];
	

	 if(isset($_POST['acao']) && $_POST['acao'] == "cadastrar_cliente"){
	 	if($data_venda == ""){
	 		echo "<script>alert('Os campos não podem ficar vazios'); location.href='cadastrar-cliente.php'</script>";
	 	}else{
	 		$inserirClientes = mysql_query("INSERT INTO clientes (data_venda, numero_fixo_venda, cliente, cpf, nome_mae, telefone_contato, email, data_de_vencimento, vendedor, supervisor, produto1, produto2, produto3, valor_chip, rua, bairro, cidade, portabilidade, numero_portador_migrado, analise_credito, status_ativacao, data_ativacao, iccd, numero, status_atual, resposta_ativacao, imei, valor_aparelho, aparelho_pago, numero_solicitacao, observacao) VALUES ('$data_venda', '$numero_fixo_venda', '$cliente', '$cpf', '$nome_mae', '$telefone_contato', 'email', '$data_de_vencimento', '$vendedor', '$supervisor', '$produto1', '$produto2', '$produto3', '$valor_chip', '$rua', '$bairro', '$cidade', '$portabilidade', '$numero_portador_migrado', '$analise_credito', '$status_ativacao', '$data_ativacao', '$iccd', '$numero', '$status_atual', '$resposta_ativacao', '$imei', '$valor_aparelho', '$aparelho_pago', '$numero_solicitacao', '$observacao')");
	 		echo "<script>alert('Cliente Cadastrado com Sucesso!!'); location.href='landing.php'</script>";
	 	}
	 	
	 }
?>
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
	$plano = $_POST['plano'];
	$valor_chip = $_POST['valor_chip'];
	$chip_pago = $_POST['chip_pago'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$resposta_entrega = $_POST['resposta_entrega'];
	$data_agendada_entrega = $_POST['data_agendada_entrega'];
	$data_segunda_tentativa = $_POST['data_segunda_tentativa'];
	$data_terceira_tentativa = $_POST['data_terceira_tentativa'];
	$status_coleta_contrato = $_POST['status_coleta_contrato'];
	$data_entrega_contrato = $_POST['data_entrega_contrato'];
	$pre_pago = $_POST['pre_pago'];
	$portabilidade = $_POST['portabilidade'];
	$numero_portador_migrado = $_POST['numero_portador_migrado'];
	$analise_credito = $_POST['analise_credito'];
	$status_ativacao = $_POST['status_ativacao'];
	$data_ativacao = $_POST['data_ativacao'];
	$iccd = $_POST['iccd'];
	$numero = $_POST['numero'];
	$status_atual = $_POST['status_atual'];
	$resposta_ativacao = $_POST['resposta_ativacao'];
	$base_vivo = $_POST['base_vivo'];
	$dias_atraso = $_POST['dias_atraso'];
	$farol = $_POST['farol'];
	$divergencia = $_POST['divergencia'];
	$cliente_2 = $_POST['cliente_2'];
	$vendas_novos = $_POST['vendas_novos'];
	$vendas_portabilidade = $_POST['vendas_portabilidade'];
	$resposta_input = $_POST['resposta_input'];
	$possui_aparelho = $_POST['possui_aparelho'];
	$imei = $_POST['imei'];
	$valor_aparelho = $_POST['valor_aparelho'];
	$aparelho_pago = $_POST['aparelho_pago'];
	$numero_solicitacao = $_POST['numero_solicitacao'];
	$modelo_aparelho = $_POST['modelo_aparelho'];
	$observacao = $_POST['observacao'];
	

	 if(isset($_POST['acao']) && $_POST['acao'] == "cadastrar_cliente"){
	 	if($data_venda == ""){
	 		echo "<script>alert('Os campos não podem ficar vazios'); location.href='cadastraCliente.php'</script>";
	 	}else{
	 		$inserirClientes = mysql_query("INSERT INTO clientes (data_venda, numero_fixo_venda, cliente, cpf, telefone_contato, data_de_vencimento, vendedor, supervisor, plano, valor_chip, chip_pago, rua, bairro, cidade, resposta_entrega, data_agendada_entrega, data_segunda_tentativa, data_terceira_tentativa, status_coleta_contrato, data_entrega_contrato, pre_pago, portabilidade, numero_portador_migrado, analise_credito, status_ativacao, data_ativacao, iccd, numero, status_atual, resposta_ativacao, base_vivo, dias_atraso, farol, divergencia, cliente_2, vendas_novos, vendas_portabilidade, resposta_input, possui_aparelho, imei, valor_aparelho, aparelho_pago, numero_solicitacao, modelo_aparelho, observacao) VALUES ('$data_venda', '$numero_fixo_venda', '$cliente', '$cpf', '$telefone_contato', '$data_de_vencimento', '$vendedor', '$supervisor', '$plano', '$valor_chip', '$chip_pago', '$rua', '$bairro', '$cidade', '$resposta_entrega', '$data_agendada_entrega', '$data_segunda_tentativa', '$data_terceira_tentativa', '$status_coleta_contrato', '$data_entrega_contrato', '$pre_pago', '$portabilidade', '$numero_portador_migrado', '$analise_credito', '$status_ativacao', '$data_ativacao', '$iccd', '$numero', '$status_atual', '$resposta_ativacao', '$base_vivo', '$dias_atraso', '$farol', '$divergencia', '$cliente_2', '$vendas_novos', '$vendas_portabilidade', '$resposta_input', '$possui_aparelho', '$imei', '$valor_aparelho', '$aparelho_pago', '$numero_solicitacao', '$modelo_aparelho', '$observacao')");
	 		echo "<script>alert('Cliente Cadastrado com Sucesso!!'); location.href='painel.php'</script>";
	 	}
	 	
	 }
?>
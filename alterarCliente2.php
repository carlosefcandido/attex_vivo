<?php
	session_start();
	include("conexao.php");
	include("funcoes.php");
	protegePagina();
	
	$id= $_POST['codigo'];
	$data_venda = $_POST['data_venda'];
	$numero_fixo_venda = $_POST['numero_fixo_venda'];
	$cliente = $_POST['cliente'];
	$cpf = $_POST['cpf'];
	$telefone_contato = $_POST['telefone_contato'];
	$data_de_vencimento = $_POST['data_de_vencimento'];
	$vendedor = $_POST['vendedor'];
	$supervisor = $_POST['supervisor'];
	$produto1 = $_POST['produto1'];
	$produto2 = $_POST['produto2'];
	$produto3 = $_POST['produto3'];
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
	
	if(isset($_POST['acao']) && $_POST['acao'] == "alterar_cliente"){
	 	if($data_venda != ""){
	 		$alterarCliente = mysql_query("UPDATE clientes set data_venda = '$data_venda', numero_fixo_venda = '$numero_fixo_venda', cliente = '$cliente', cpf = '$cpf', telefone_contato = '$telefone_contato', data_de_vencimento = '$data_de_vencimento', vendedor = '$vendedor', supervisor = '$supervisor', produto1 = '$produto1', produto2 = '$produto2', produto3 = '$produto3', valor_chip = '$valor_chip', rua = '$rua', bairro = '$bairro', cidade = '$cidade', portabilidade = '$portabilidade', numero_portador_migrado = '$numero_portador_migrado', analise_credito = '$analise_credito', status_ativacao = '$status_ativacao', data_ativacao = '$data_ativacao', iccd = '$iccd', numero = '$numero', status_atual = '$status_atual', imei = '$imei', valor_aparelho = '$valor_aparelho', aparelho_pago = '$aparelho_pago', numero_solicitacao = '$numero_solicitacao', observacao = '$observacao' WHERE id = '$id'");
	 		echo "<script>alert('Cliente Alterado com Sucesso!!');location.href='BuscarCliente.php'</script>";
	 	}
	 	
	 }

?>
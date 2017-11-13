lo<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<Meta http-equiv="refresh" content="3" />
<title>Atitude Express</title>

<?php
	session_start();
	include("conexao.php");
	include("funcoes.php");
	
	?>
   
  <style type="text/css">
  
  body {
	 background-color: #fff;
  }
  
  td { 
  background-color:#fff; 
  font-size: 18px;
  font-family: Arial, sans-serif;
  border: #999 1px;
  
  }
  
  .td-style { 
  background-color:#eee; 
  font-size: 18px;
  font-family: Arial, sans-serif;
  
  }
  
  </style> 
    
</head>

<body>
<table width="1400" align="center">
<tr>
<td>
<div class="semi-bar" align="left">
				Clientes Pendentes
            </div>
</td>
</tr>
</table>

<table border="1" width="1400" align="center">
 <tr>
    	<td class="td-style">
        	Cliente
        </td>
        <td class="td-style">
        	CPF
        </td>
        <td class="td-style">
        	Fixo
        </td>
        <td class="td-style">
        	Controle
        </td>
        <td class="td-style">
       		Modem
        </td>
		<td class="td-style">
        	Data
        </td>
        <td class="td-style">
        	Vendedor
        </td>
    </tr>
<?php $oResult = mysql_query( "SELECT clientes.id, clientes.data_venda, clientes.numero_fixo_venda, clientes.cliente, clientes.cpf, clientes.nome_mae, clientes.telefone_contato, clientes.email, clientes.data_de_vencimento, clientes.vendedor, clientes.supervisor, clientes.produto1, clientes.produto2, clientes.produto3, clientes.valor_chip, clientes.chip_pago, clientes.rua, clientes.bairro, clientes.cidade, clientes.resposta_entrega, clientes.data_agendada_entrega, clientes.data_segunda_tentativa, clientes.data_terceira_tentativa, clientes.status_coleta_contrato, clientes.data_entrega_contrato, clientes.pre_pago, clientes.portabilidade, clientes.numero_portador_migrado, clientes.analise_credito, clientes.status_ativacao, clientes.data_ativacao, clientes.iccd, clientes.numero, clientes.status_atual, clientes.resposta_ativacao, clientes.base_vivo, clientes.dias_atraso, clientes.farol, clientes.divergencia, clientes.cliente_2, clientes.vendas_novos, clientes.vendas_portabilidade, clientes.resposta_input, clientes.possui_aparelho, clientes.imei, clientes.valor_aparelho, clientes.aparelho_pago, clientes.numero_solicitacao, clientes.modelo_aparelho, clientes.observacao, clientes.id_usuario, date_format(clientes.data, '%d/%m/%Y - %H:%i:%s') as data, usuarios.codigo, usuarios.nome from clientes inner join usuarios where clientes.status_atual='pendente' and usuarios.codigo = clientes.id_usuario order by clientes.data DESC");
//Fazendo o looping para exibição de todos registros que contiverem em nome da tabela
while ($oRow = mysql_fetch_array($oResult)) {
	$cliente = $oRow['cliente'];
	$cpf = $oRow['cpf'];
	$produto1 = $oRow['produto1'];
	$produto2 = $oRow['produto2'];
	$produto3 = $oRow['produto3'];
	$data = $oRow['data'];
	$nome = $oRow['nome'];
	$table2 ="
    <tr>
    	<td>
        	$cliente
        </td>
        <td>
        	$cpf
        </td>
        <td>
        	$produto1
        </td>
        <td>
        	$produto2
        </td>
        <td>
       		$produto3
        </td>
		<td>
        	$data
        </td>
		<td>
			$nome
		</td>
    </tr>";	
	echo $table2;
	}
	
?>

</table>
</body>
</html>
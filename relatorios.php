<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div align="center">
<form method="post" action="relatorio-bairro.php">
  <select name="bairro" id="bairro" style="width: 400;">
	<?php
include("conexao.php");
//Criamos o comando que efetua a busca do banco
		$oResult = mysql_query( "SELECT bairro from clientes order by bairro ASC");
//Fazendo o looping para exibição de todos registros que contiverem em nome da tabela
while ($oRow = mysql_fetch_array($oResult)) {
echo("<option value='".$oRow['bairro']."'>".$oRow['bairro']."</option>");
}

?>
  </select>
  	<?php $oResult = mysql_query( "SELECT bairro from clientes order by bairro ASC");
//Fazendo o looping para exibição de todos registros que contiverem em nome da tabela
while ($oRow = mysql_fetch_array($oResult)) {
echo("<option value='".$oRow['bairro']."'>".$oRow['bairro']."</option>");
}
?>
  <input type="submit" class="send" id="submit" value="Cadastrar Cliente" />
  </form>
</div>
</body>
</html>
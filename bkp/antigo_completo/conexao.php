<meta charset="utf-8">
<?php
	
	$servidor = "localhost";
	$bd = "mpradoin_vivo";
	$usuario = "mpradoin_vivo";
	$senha = "vivo10121984";

	mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
	mysql_select_db($bd) or die(mysql_error());

?>
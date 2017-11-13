<?php
	session_start();
	include("conexao.php");

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if (isset($_POST['acao']) || $_POST['acao'] == 'fazer_login') {
		if ($usuario =="" && $senha =="") {
			echo "<script>alert('Os campos usuário e senha devem ser preenchidos!'); location.href='index.php'</script>";
		}else{
			$selectlogin = mysql_query("SELECT * from usuarios where usuario = '$usuario' and senha = '$senha'");
			$fetchLogin = mysql_fetch_array($selectlogin);
			if (mysql_num_rows($selectlogin) > 0) {
				$_SESSION['codigo'] = $fetchLogin['codigo'];
				$_SESSION['usuario'] = $fetchLogin['usuario'];
				$_SESSION['senha'] = $fetchLogin['senha'];
				$_SESSION['nome'] = $fetchLogin['nome'];
				$_SESSION['nivel'] = $fetchLogin['nivel'];
				echo $selectlogin['nome'];
				
			}else{
				echo "<script>alert('Usuário/Senha incorretos!'); location.href='index.php'</script>";
			}
		}
	}
	if($_SESSION['nivel'] == 'administrador'){
		echo "<script>location.href='landing.php'</script>";
	}else if($_SESSION['nivel'] == 'vendedor'){
		echo "<script>location.href='cadastrar-cliente-vendedor.php'</script>";
	}else{
		echo "<script>location.href='BuscarCliente.php'</script>";
	}
?>
<meta charset="utf-8"/>
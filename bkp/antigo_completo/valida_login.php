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
				$_SESSION['usuario'] = $fetchLogin['usuario'];
				$_SESSION['senha'] = $fetchLogin['senha'];
				$_SESSION['nome'] = $fetchLogin['nome'];
				echo $selectlogin['nome'];
				echo "<script>location.href='painel.php'</script>";
			}else{
				echo "<script>alert('Usuário/Senha incorretos!'); location.href='index.php'</script>";
			}
		}
	}
?>
<meta charset="utf-8"/>
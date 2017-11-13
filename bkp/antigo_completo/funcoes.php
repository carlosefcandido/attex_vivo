<?php
	function protegePagina(){
		if (!$_SESSION['nome']) {
			echo "<script>location.href='index.php'</script>";
		}
	}

	function sairPagina(){
		session_destroy();
		echo "<script>location.href='index.php'</script>";
	}
?>
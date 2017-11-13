<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
		session_start();
		include("conexao.php");
		include("funcoes.php");
		protegePagina();
	?>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Atitude Express</title>
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default2.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
    	<marquee scrollDelay=0  behavior="alternate"><img src="./images/logo.jpg" width="250" height="100"></marquee>
        
		<div class="container">	
			<header>
				<h1>Olá, <?php echo $_SESSION['nome']; ?> seja Bem vindo(a)! <span>Escolha o que deseja fazer no momento.</span></h1>	
			</header>
            
            
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Página Inicial</span>
							</a>
						</li>
						<li>
							<a href="cadastrar-cliente.php">
								<span class="icon"> 
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>Cliente</span>
							</a>   
						</li>
						<li>
							<a href="cadastrar-funcionario.php">
								<span class="icon">
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>Funcionário</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span>Relatórios</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-contact"></i>
								</span>
								<span>Suporte</span>
							</a>
						</li>
						<li>
							<a href='?acao=sair'>
								<span class="icon">
									
								</span>
								<span>Logout</span><?php
                                    if (isset($_GET['acao']) && $_GET['acao'] == 'sair') {
                                        sairPagina();
                                    }
                                ?>
							</a>
						</li>
					</ul>
				</nav>
			</div>
            <marquee scrollDelay=0  behavior="alternate"><font size="+6"> Atitude Express</font></marquee> 
		</div><!-- /container -->
		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
	</body>
</html>
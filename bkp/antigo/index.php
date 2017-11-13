<?php

?>
<html lang = "pt_BR">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body style="width:100%; height:100%; margin:0px;" class="bodyLogin" onLoad="document.frm_login.usuario.focus();">
           
<table width="100%" class="table_principal" height="100%" align="left" cellpadding="0" cellspacing="0" border="0">	
    <tr>
    	<td align="center" valign="middle" width="100%" style="border:0px; padding-bottom:40px">
        	<table width="560px" align="center" height="318" border="0" cellpadding="0" cellspacing="0" background="imagem/fundo-login3.jpg" style="background-repeat:no-repeat;">
<tr>
                	<td align="right" style=" padding-right:55px; padding-top:15px">
<div id="ajax" style="display: none;" align="center"></div>                  
                  </td>
</tr>                         

          
            	<tr>
                	<td align="right" style=" padding-right:55px; padding-top:0px">

                        <form name="frm_login" id="frm_login" method="post" action="cadastro.php">
                        <br />
                        <table cellpadding="0" cellspacing="0" width="152px" height="100px" border="0" style="border:1px solid #006600; background-color:#FDFFFD;">

                            <tr><td align="left" valign="bottom" style="color:#006600; padding-left:15px; padding-top:5px">Login:</td></tr>
                            <tr>
                                <td align="center"><input type="text" style="width:80px; border:1px solid #006600; font-size:10px;" name="usuario" id="login" onkeypress="handleEnter(event)" /></td>
                            </tr>
                            <tr><td align="left" valign="bottom" style="color:#006600; padding-left:15px">Senha:</td></tr>
                            <tr>
                                <td align="center"><input type="password" style="width:80px; border:1px solid #006600; font-size:10px" name="senha" id="senha" onkeypress="handleEnter(event)" /></td>
                            </tr>            
                            <tr>
                                <td height="12px"></td>
                            </tr>                            
                            <tr><td height="5px" align="center">
                            <input type="submit" value="Logar" class="botao" /></td></tr>
                            <input type="hidden" name="acao" value="fazer_login"/>
                            <tr>
                                <td height="15px"></td>
                            </tr>
                          </table>
                        </form>
                    </td>
                </tr>

                    <span style="position:relative; top:360px; text-align:center; font-size: 10px"></span>
            </table>
        </td>   
    </tr>
</table>            
</body>
</html>
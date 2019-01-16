<?php 
	include("auth.php");
	require('config/config.php');
	$chat = new Chat();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript"	src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript"	src="js/chat.js"></script>

</head>
<body>
<h1>Bem Vindo, <?php echo $_COOKIE['nome']?> ao nosso Chat</h1>

<div id="painel">
<?php 
	foreach($chat->listar() as $v){
				$ativo = ($v['nome'] == $_COOKIE['nome']) ? ' class="ativo"' : '';
				printf('<p%s>[%s] - %s</p>', $ativo, $v['nome'], $v['mensagem']);
			}
?>
</div>

<form action="" method="post" id="frm-msg">
	<fieldset>
		<label> 
			<span>Mensagem</span> 
			<textarea name="mensagem" id="mensagem" cols="70" rows="5"></textarea>
		</label> 
		<input type="button" id="submit" value="Enviar" />
	</fieldset>
</form>
</body>
</html>

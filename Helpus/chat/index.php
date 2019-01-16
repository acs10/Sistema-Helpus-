
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$nome = trim(filter_input(INPUT_POST, 'nome'));
			if(empty($nome)){
				$erro = 'Nome é obrigatório';				
			}else{
				require("config/config.php");
				$chat = new Chat();
				$chat->setNome($nome);
				if($chat->existeNome()){
					$erro = 'Já existe alguém usando esse nome';
				}else{
					setcookie('nome', $chat->getNome(), time()+3600*24*TEMPO_LIMITE);
					header('location:chat-index.php');
				}				
			}			
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Entrar no Sistema</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
<h1>Entre no Chat</h1>

<?php 
	if(isset($erro)){
		printf('<p id="erro">%s</p>', $erro);
	}
?>

<form action="" method="post" id="frm-login">
<?php 	if(isset($_COOKIE['nome'])): ?>
	<a href="chat-index.php">Caso deseje utilizar o mesmo nome, clique aqui</a>
<?php endif;?>
<fieldset>
<label> 
	<span>Nome</span> 
	<input type="text" name="nome"	id="nome" />
</label>
 
 <input type="submit" class="btn" value="Entrar" />
</fieldset>
</form>   
    <br> <br> <br>
    <table border="6" align="center">
<tr>
    <td><h3><i>*Por motivos de segurança. Você poderá participar anonimamente por qualquer nome de sua preferência!</i></h3></td>
</tr>

</table>
</body>
</html>

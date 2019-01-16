<?php
	require('config/config.php');
	$chat = new Chat();
	switch ($_POST['acao']){
		case 'inserir':
			$chat->excluir();
			$chat->setNome($_COOKIE['nome']);
			$chat->setMensagem(filter_input(INPUT_POST, 'mensagem'));
			if($chat->inserir()){
				printf('<p class="ativo">[%s] - %s</p>', $chat->getNome(), $chat->getMensagem());
			}
		break;
		
		case 'atualizar':
			foreach($chat->listar() as $v){
				$ativo = ($v['nome'] == $_COOKIE['nome']) ? ' class="ativo"' : '';
				printf('<p%s>[%s] - %s</p>', $ativo, $v['nome'], $v['mensagem']);
			}
		break;
	}
	
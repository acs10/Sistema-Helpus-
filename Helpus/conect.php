<?php
$sevidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "helpus";
//conectar ao servido de banco de dados.
$conecao = mysql_connect($sevidor,$usuario,$senha);
//conectar ao banco de dados

$sql=mysql_select_db($bd,$conecao);
$temp="teste passou isso";
?>

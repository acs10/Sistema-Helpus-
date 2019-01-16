<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$servidor = "localhost";
$usuario = "root";
$senhasrv = "";
$bd = "helpus";
$conexao = mysql_connect($servidor,$usuario,$senhasrv);
mysql_select_db($bd,$conexao);
$consulta = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
$resultado = mysql_query($consulta,$conexao);
$reg = mysql_fetch_array($resultado);
$count = mysql_num_rows($resultado);
if($count == 1){
     session_start();
echo "<script> location = 'index1.php'; </script>";
} else {
echo "<script>
alert ('Usuario nao Cadastrado ...');
 location = 'inicial.php'; </script>";
}
mysql_close($conexao);
?>
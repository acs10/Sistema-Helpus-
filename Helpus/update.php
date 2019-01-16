<?php 
$id=$_POST['id'];
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST["senha"];
$area = $_POST['area'];
$imagem = $_POST['imagem'];
include 'conect.php';
 if( (isset ($_POST["email"])) && (isset($_POST["login"])) && (isset($_POST["senha"])) && (isset($_POST["area"])) )
 {
 $id=$_POST['id'];
 
       $uploaddir = 'imagem2/';
        $variavel=  explode('/',$_FILES['userfile']['type']);
        $uploadfile = $uploaddir . basename($login.".".$variavel[1]);
        
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Arquivo válido e enviado com sucesso.\n";
        } else {
            echo "Possível ataque de upload de arquivo!\n";
            }
$insere = mysql_query("UPDATE `usuario` SET `imagem`='$uploadfile' WHERE `id_usuario` = '$id'");
   if($insere){
	   echo "<script> window.location = 'index1.php';	</script>";
   }
mysql_query($query) or die  (mysql_error());

if(mysql_affected_rows()>0)

{
    
        echo "<script>alert('alteraçõens realizadas com sucesso.'); 
	window.history.back();
	</script>"; 
	echo "<script> location='index1.php'; </script>";
        
}
else
{
	echo "<script>alert('Falha ao Realizar Mudancas'); 
	window.history.back();
	</script>"; 
}
}else{
echo "<script>alert('Por Favor Preencha todos os campos'); 
	window.history.back();
	</script>";
}
 
?> 


<?php 
include_once 'conect.php';
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST["senha"];
$area = $_POST['area'];
$imagem = $_POST["imagem"];

 if( (isset ($_POST["email"])) && (isset($_POST["login"])) && (isset($_POST["senha"])) && (isset($_POST["area"]))   )
     {
    
         $uploaddir = 'imagem2/';
        $variavel=  explode('/',$_FILES['userfile']['type']);
        $uploadfile = $uploaddir . basename($login.".".$variavel[1]);
        
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Arquivo válido e enviado com sucesso.\n";
        } else {
            echo "Possível ataque de upload de arquivo!\n";
            }
        
     
$query = "INSERT INTO usuario (login,email,senha,area,imagem) VALUES ('$login','$email','$senha','$area','$uploadfile')"; 
echo $query;
     
if(mysql_query($query,$conecao)) //ve se da falha ao cadastrar os login
{
	echo "<script> location='inicial.php?teste=$uploadfile'; </script>";
}
else
{
	echo "<script>alert('Falha ao Realizar cadastro'); 
	window.history.back();
	</script>"; //aparece se cadastro direito 
}

}else{
echo "<script>alert('Por Favor Preencha todos os campos'); 
	window.history.back();
	</script>";
}
     
?> 

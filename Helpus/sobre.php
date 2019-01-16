<?php
session_start();
?>
<?php
    include 'conect.php';
	$sql = mysql_query("SELECT * FROM usuario");
	while($linha = mysql_fetch_array($sql)){
		$login = $linha["login"];
                $senha = $linha["senha"];
                $email = $linha["email"];
                $area = $linha["area"];
                $imagem = $linha["imagem"];
			
	}
	
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><font size=6> Help Us </font></a>
            </div>

             <div class="header-right">

                <a href="sobre.php" class="btn btn-lg btn-primary" title="Sobre" ></b><i class="glyphicon glyphicon-info-sign"></i></a>
               <a href="menssages.php" class="btn btn-lg btn-warning"><span title="Contatos" ></b><i class="glyphicon glyphicon-book"></i></a>
				<a href="perfil.php" class="btn btn-lg btn-success"><span title="Editar_Perfil" ></b><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="inicial.php" class="btn btn-lg btn-danger"><span title="Sair" ></b><i class="glyphicon glyphicon-off"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                         <img src="<?php echo $imagem?>" class="img-thumbnail" />
                          
                         <div class="inner-text">
                               <?php echo $login?>
                            <br />
                                <small><?php echo $area?></small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index1.php"><i class=""></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Área </span></a>
                         
                            <li>
                                <a href="informatica.php"><i class=""></i>Informática</a>
                            </li>
                             <li>
                                <a href="agroindustria.php"><i class=""></i>Agrondustria</a>
                            </li>
                             <li>
                                <a href="meio-ambiente.php"><i class=""></i>Meio Ambiente</a>
                            </li>
                             <li>
                                <a href="matematica.php"><i class=""></i>Matemática</a>
                            </li>
							<li>
                                <a href="portugues.php"><i class=""></i>Português</a>
                            </li>
							<li>
                                <a href="geografia.php"><i class=""></i>Geografia</a>
                            </li>
							<li>
                                <a href="historia.php"><i class=""></i>História</a>
                            </li>
                           <li>
                                <a href="fisica.php"><i class=""></i>Fisíca</a>
                            </li>
							<li>
                                <a href="quimica.php"><i class=""></i>Quimica</a>
                            </li>
							<li>
                                <a href="biologia.php"><i class=""></i>Biólogia</a>
                            </li>
							<li>
                                <a href="ingles.php"><i class=""></i>Inglês</a>
                            </li>
							<li>
                                <a href="espanhol.php"><i class=""></i>Espanhol</a>
                            </li>
							
                        </ul>
                    </li>
                
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        
        //Necessario para ordem
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>

                        <div> </div>
                        <center> <h1>Sobre</h1></center>
                        </br>
  <center><h3 align="justify">&nbsp Help us é uma plataforma acadêmica com o propósito de promover a relação entre pessoas de varias áreas, para que troquem informações e conhecimentos. De tal maneira em que se ajudem uns aos outros de forma conjunta ou privada.</h3></center>
                            </br>
  <center><h1> Público</h1></center>
  <center><h3>&nbsp Nosso público alvo são as pessoas que querem compartilhar ou adquirirem o conhecimento.</h3></center>
  </br>
                            </br>
                             </br>
                            <div>
                                <center>
                                 <img width="700px" height="400px" src="assets/img/5.jpg"/>
                                </center>
                            </div>
                             </br>
							 <div align="center">
               <h3 align="justify">“&nbsp Bondosos corações daqueles que estendem a mão sem esperar nada em troca. Depende de nós semear a vontade de ajudar quem precisa, incerta é a nossa vez para precisar da ajuda dos outros”</h3>            
               <h5>Lupita Fernandez</h5>
            </div>
                    </div>
					
                  
    <div id="footer-sec">
         2016 YourCompany | Design By : <a href="" target="_blank">Equipe Informática [IFTO] </a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>

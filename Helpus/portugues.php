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
    <title>Portugues</title>

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
                <a class="navbar-brand">Help Us</a>
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
                                <a href="agroindustria.php"><i class=""></i>Agro-Industria</a>
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
            
            <div>
                    <center><h2>Português</h2></center>
                </div>
              <center> <img src="img/5.png" width="400" height="200"></center> 
                <div align="justify">
                   <justify> <h3>&nbsp;&nbsp;&nbsp;&nbsp; É a ciência que estuda as quantidades, o espaço, as relações abstratas e lógicas aplicadas aos símbolos. O matemático usa a lógica na formulação de teorias e no teste de hipóteses. Desenvolve aplicações dos cálculos na pesquisa pura e na ciência aplicada. Cria fórmulas e bancos de dados para interpretar e solucionar problemas de desenvolvimento de produtos, de produção e de logística em empresas. Esse profissional é bastante versátil e pode trabalhar nas áreas econômica, financeira, tecnológica, de física e pesquisa, entre outras. 
<br>
<br>
                </h3></justify>
            <div id="page-inner">
                <div class="row">
                </justify>
               
                <iframe src="chat5/index.php" width="100%" height="650" frameborder="no" style="border: 5px solid #000000; -moz-border-radius: 10px; -webkit-border-radius: 10px;"></iframe>
                  
            </div>
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

<?php
session_start();
?>
<?php
    include 'conect.php';
	$sql = mysql_query("SELECT * FROM usuario");
	while($linha = mysql_fetch_array($sql)){
                $id = $linha["id_usuario"];
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
    <title>Help US</title>

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
                <a class="navbar-brand"><font size=6>Help Us</font> </a>
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
                        <!--operação falue-->
                        <div class="user-img-div">
                         <img src="<?php echo $imagem?>" class="img-thumbnail" />
                          
                         <div class="inner-text"><font size=4>
                               <?php echo $login?>
                            <br />
							</font>
							<font size="3">
                                <small><?php echo $area?></small>
                            </div>
							</font>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index1.php"><i class=""></i>Home</a>
                    </li>
                    <li>
                                                <a href="#"><i class="fa fa-desktop "></i>Área</a>
                            <li>
                                <a href="informatica.php"><i class=""></i>Informática</a>
                            </li>
                             <li>
                                <a href="agroindustria.php"><i class=""></i>Agroindustria</a>
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
                <!-- /. ROW  -->
                        <hr />

                        <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img src="assets/img/slideshow/4.jpg" alt="" />

                                    </div>
									<div class="item">

                                        <img src="assets/img/slideshow/5.jpg" alt="" />

                                    </div>
									<div class="item ">

                                        <img src="assets/img/slideshow/6.jpg" alt="" />

                                    </div>
                                  <div class="item ">

                                        <img src="assets/img/slideshow/7.jpg" alt="" />

                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            </br>
                            <table border="1" width="900" bgcolor="#FFFDE4" align="center" cellpadding="4" cellspacing="0" bordercolor="#0067CE">                      <tr>              
         
                                <div>
                                    <center>
                                     
                                 <img width="1000px" height="70px" src="assets/img/HELP-US.jpg"/>
                                
                                    </center>
                                    <center>
                                    <h4>
                                        <font color='#F00000'><b>Não perca essa Oportunidade,</br> <center>aproveite!</center></font></b>
                                    </h4>
                                    </center>
                                </div>      
                                    </br>
                                    
           <div align="center" style="margin-left:10px; margin-right:10px">
               <h3 align="justify" >&nbsp Help Us um Sistema Comunicatico desenvolvido com o propósito de trazer as pessoas uma facilidade de comunicação, para o melhor aprendizado de ambas as partes
                . Para que possam se ajudar...</h3> 
             
            </div>
			<a href="sobre.php"  style="margin-left:10px";>continue lendo...</a>
    <h3 align="center" > <b>Áreas de conhecimentos:</b></h3>  <br><br>
 <table border="3" align="center">
 <tr>
<td align="center" &nbsp><b> &nbsp Informática &nbsp </b></td>
<td align="center" &nbsp><b> &nbsp Agroindustria &nbsp </b></td>
<td align="center" &nbsp><b>&nbsp Meio Ambiente &nbsp </b></td>
<td align="center" &nbsp><b>&nbsp Matemática &nbsp </b></td>
<td align="center" &nbsp><b> &nbsp Português &nbsp </b></td>
<td align="center" &nbsp><b> &nbsp Geografia &nbsp </b></td>
</tr>
<tr>
<td align="center" &nbsp><b> &nbsp História &nbsp </b></td>
<td align="center" &nbsp><b> &nbsp Física &nbsp </b></td>
<td align="center" &nbsp><b>&nbsp química &nbsp </b></td>
<td align="center" &nbsp><b> &nbspBiólogia &nbsp </b></td>
<td align="center" &nbsp><b> &nbsp Inglês &nbsp </b></td>
<td align="center" &nbsp><b>&nbsp Espanhol &nbsp </b></b> </td>
</tr>
</table>
                            </br>
                            </br>
                             </br>
                            <div>
                                <center>
                                 <img width="900px" height="450px" src="assets/img/oi.jpg"/>
                                </center>
                            </div>
                             </br>
                             <div align="center">
               <h3>“Tudo é difícil quando não se sabe. <br>
Tudo é fácil quando se aprende!”</h3>            
            </div>
                             </div>
                    </div>
           
                    <!-- /.REVIEWS &  SLIDESHOW  -->
                  
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

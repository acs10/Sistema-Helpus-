<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cadastro </title>

        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body background="assets/tela/33.jpg">
        <div class="container">
            <div class="row text-center " style="padding-top:100px;">
                <div class="col-md-12">
                    <img src="assets/tela/1.jpg" />
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                    <div class="panel-body">
                        <form action="cadastrar.php" enctype="multipart/form-data" method="post">
                            <!--<form role="form">-->
                            <b><i>  <center><h4>CADASTRO</h4></center></i></b>
                                <br />
                                <div class="form-group">
                                    <label class="form" >Escolha um Nome de Usuario</label>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Nome de Usuario" name="login" required/>

                                    <input type="text" class="form-control" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                                </div>
                                <div class="form-group">
                                    <label class="form" for="selectbasic">Escolha uma Senha</label>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control"  placeholder="senha" name="senha" required />
                                    <input type="password" class="form-control"  placeholder="Digite novamente a Senha" name="confirm" required />
                                    </br>
                                    </br>
                                    </br>

                                </div>
                            <!--</form>-->
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="form" for="selectbasic">Proficiente em ?</label>
                                    <div class="form">
                                        <select id="selectbasic" name="area" class="form-control">
                                            <option value="Informatica">Informática</option>
                                            <option value="Agro-Industria">Agro-Industria</option>
                                            <option value="Meio ambiente">Meio Ambiente</option>
                                            <option value="Matematica">Matemática</option>
                                            <option value="Portugues">Português</option>
                                            <option value="Geografia">Geografia</option>
                                            <option value="Historia">Historia</option>
                                            <option value="Fisíca">Fisíca</option>
                                            <option value="Quimica">Quimica</option>
                                            <option value="Biologia">Biologia</option>
                                            <option value="Engles">Englês</option>
                                            <option value="Espanhol">Espanhol</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form" for="selectbasic">Escolha uma Imagem para Perfil</label>
                                </div>
                                <div class="form">
                                     <div class="form">
                        
                                     <input name="userfile" type="file" />
                                    </br>
                               

                                <input type="submit" value="Cadastrar" class="btn btn-primary "/>
                               </div>
                                    </br>
                                Já é cadastrato ? <a href="inicial.php" >click aqui </a> 
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>

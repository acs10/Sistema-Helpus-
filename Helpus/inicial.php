
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicial</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body background="assets/tela/3.jpg">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/tela/1.jpg" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="entrar.php" method="post">
                                    
                                    
                                       </br>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="login" class="form-control" placeholder="Login" />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="senha"class="form-control"  placeholder="Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Lembre de mim
                                            </label>
                                            
                                        </div>
                                                                         </br>
                                     <input type="submit" value="Login" class="btn btn-primary "/>
                                     
                                     <br>
                                                                          </br>

                                    Ainda não possui conta ? <a href="cadastro.php">Cadastrar-se</a>
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="sprint1.css">
    <title> Acesse sua conta </title>
  </head>
  <body>
        
    
    <div class="container">
        <div id="loginbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
            <div class="card card-inverse card-info">
                <div class="card-header">
                    <div class="card-title">Faça seu Login para Comprar seus produtos</div>
                    <div style="float: right; font-size: 80%; position: relative; top: -10px;"><a href="#">Esqueceu sua senha?</a>
                    </div>
                </div>
                <div style="padding-top: 30px;" class="card-block">
                    <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                    <form id="loginform" class="" role="form">
                        <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input
                            id="login-username" type="email" class="form-control" name="emaillogin" value=""
                            placeholder="digite seu email" />
                        </div>
                        <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input
                            id="login-password" type="password" class="form-control" name="senha"
                            placeholder="digite sua senha" />
                        </div>
                        <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input
                            id="confirm-password" type="password" class="form-control" name="confirmacaosenha"
                            placeholder="Confirme senha digitada" />
                        </div>

                        <div class="input-group">
                            <div class="form-check">
                                <label>
                                    <input id="login-remember" type="checkbox" name="lembrar" value="1" />Lembrar minha senha</label>
                            </div>
                        </div>
                        <div style="margin-top: 10px;" class="form-group">
                            <!-- Button -->
                            <div class="col-md-12 controls"> <a id="btn-login" href="#" class="btn btn-success"> Acessar  </a>
     <a id="btn-fblogin"
                                href="#" class="btn btn-primary">Acessar com Facebook</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 control">
                                <div style="padding-top: 15px; font-size: 85%;">Você não tem cadastro conosco! <a href="formulariocomprador.html" onclick="$('#loginbox').hide(); $('#signupbox').show()">
    
                                                Cadastre-se Aqui!
    
                                            </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
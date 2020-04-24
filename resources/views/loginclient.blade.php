@extends('layout.inside')

@section('conteudo')

  <body>
        
    
      <div class="container mb-5" >
          <div id="loginbox" style="margin-top: 50px; padding:20px; " class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
            <div class="card-title text-center"><h3>Login</h3></div>
            <div class="card card-inverse card-info card-login">
                
                <div style=" padding: 80px;" class="card-block">
                    <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                    <form id="loginform" class="" role="form">
                        <div style="margin-bottom: 25px; " class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
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
                            placeholder="Confirmar senha" />
                        </div>

                        <div class="input-group">
                            <div class="form-check">
                                <label>
                                    <input id="login-remember" type="checkbox" name="lembrar" value="1" /> Lembrar senha</label>
                            </div>
                        </div>
                        <div style="margin-top: 10px;" class="form-group">
                            <!-- Button -->
                            <div class="col-md-12 controls"> <a id="btn-login" href="#" class="btn btn-success btn-cart" style="width: 290px;"> Acessar  </a>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 control">
                                <div style="padding-top: 15px; font-size: 16px;">Você não possui cadastro? <a href="formulariocomprador.html" onclick="$('#loginbox').hide(); $('#signupbox').show()">
    
                                                Cadastre-se Aqui!
    
                                            </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>


@endsection
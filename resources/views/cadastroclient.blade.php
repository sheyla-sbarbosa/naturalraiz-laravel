
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="cssCadastro.css">
    <title>Você quer comprar nossos Produtos</title>
  </head>
  <body>
  

  <div class="container">
  <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-12">
       <h1>Faça seu cadastro</h1>
      </div>  
      </div>
        <!--nome e Sobrenome--> 

        <div class="form-row">
          <div class="col-md-12">
            <label for="">Nome Completo</label>
            <input name="nome" type="text" class="form-control" placeholder="Nome" required> 
          </div>

          
        </div>

        <!-- inserindo telefone-->

        <div class="form-row">
          <div class="form-group col-md-6">
          <label for="inputFone">Telefone com WhatsApp</label>
          <input name="telefone1" type="text" class="form-control" id="inputFone" placeholder="Telefone" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$">
</div> 
          <div class="form-group col-md-6">
          <label for="inputFone" class="control-label">Telefone de recado</label>
          <input name="telefone2" type="text" class="form-control" id="inputFone" placeholder="Telefone" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$">
  </div>
</div>

          <!--inserindo email-->

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="emailaddress">Email</label>
                <input name="email" type="email" class="form-control" id="emailaddress" placeholder="Email">
              </div>
              
              
              <!--inserindo senha-->


              <div class="form-group col-md-6">
                <label for="inputpassword">Senha</label>
                <input name="password" type="password" class="form-control" id="inputpassword" placeholder="Senha">
              </div>
            </div>
            


            <div class="container_endereco">
            <!--inserindo endereco 1 com CEP - principal -->
            <div class="form-row">


              <div class="form-group col-12">
                <label for="inputAddress">Endereço</label>
                <input name="endereco1" type="text" class="form-control" id="inputAddress" placeholder="Digite seu endereço" required>
              </div>


            <div class="form-group col-md-6">
              <label for="inputCEP">CEP</label>
              <input name="cep1" type="text" class="form-control" id="inputCEP">
            </div>

            <div class="form-group col-md-6">
              <label for="inputBairro">Bairro</label>
              <input type="text" class="form-control" placeholder="Bairro">
            </div>
          </div>
          
          
          
          <!--Inserir complemento - numero e apartamento bairro-->
          <div class="form-row">
            
            <div class="form-group col-md-4">
            <label for="inputNum">Número</label>
            <input name="numero" type="text" class="form-control" placeholder="Número">
          </div>
          
          <div class="form-group col-md-8">
            <label for="inputComplemento">Complemento</label>
            <input name="complemento" type="text" class="form-control" placeholder="Complemento">
          </div>
          
         <!-- Cadastre outro Endereço -->
        
        
         <a href="#" class= "btn-secondary" type="button" data-toggle="modal" data-target="#enderecoopcional" > Outro endereço </a>
         <button name="enviar" type="submit" class="btn btn-primary">Entrar</button>
         <button name="cancelar" type="submit" class="btn btn-danger">Cancelar</button>
        </div>
          
        </div>
      
        
      </div>
    </div>
      </form>

<!-- Modal-->>
<div class="modal fade" id="enderecoopcional" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="fechar" data-dismiss="modal">
<span>&times;</span> </button>
 
<div class="modal-body">
<form action="" method="POST" role="form">

<div class="form-row">


  <div class="form-group col-12">
    <label for="endereço opcional">Endereço</label>
    <input name="endereco2" type="text" class="form-control" id="inputAddress" placeholder="Digite seu endereço">
  </div>


<div class="form-group col-md-6">
  <label for="inputCEP">CEP</label>
  <input name="cep1" type="text" class="form-control" id="inputCEP">
</div>

<div class="form-group col-md-6">
  <label for="inputBairro">Bairro</label>
  <input type="text" class="form-control" placeholder="Bairro">
</div>
</div>



<!--Inserir complemento - numero e apartamento bairro-->
<div class="form-row">

<div class="form-group col-md-4">
<label for="inputNum">Número</label>
<input name="numero" type="text" class="form-control" placeholder="Número">
</div>

<div class="form-group col-md-8">
<label for="inputComplemento">Complemento</label>
<input name="complemento" type="text" class="form-control" placeholder="Complemento">
</div>





</form>
    
  

        <div class="modal-footer">
          <button name="enviar" type="submit" class="btn btn-primary">Entrar</button>
          <button name="cancelar" type="submit" class="btn btn-danger">Cancelar</button>
        </div>

 </div>

</div>

</div>

</div>



</div>


</div>

</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
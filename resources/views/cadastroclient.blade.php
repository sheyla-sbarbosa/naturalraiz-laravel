@extends('layout.inside')
@section('conteudo')
  <body>
  

  <div class="container mt-5">
  <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-12">
       <h1 class="text-center">Faça seu cadastro</h1>
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
            <input name="numero" type="text" class="form-control" placeholder="Número da casa">
          </div>
          
          <div class="form-group col-md-8">
            <label for="inputComplemento">Complemento</label>
            <input name="complemento" type="text" class="form-control" placeholder="Apto, bloco, lote">
          </div>
          
         <!-- Cadastre outro Endereço -->
        
        
         <div class="container mb-5">
          <div class="row">
            <div class=" col-7 col-lg-7 col-sm-7 col-md-7">
              <div class="botoes-cart">
                <button type="submit" class="btn btn-success btn-lg btn-cart" value=""> Entrar </button>
                <button type="submit" class="btn btn-success btn-lg btn-cart" value=""> cancelar </button>
              </div>
              <br>
              
            </div>
            <div class="col-5 col-lg-5 col-sm-5 col-md-5">
              <div class="text-right">
                
                <a href="#" class= "btn-secondary btn btn-lg btn-cart mb-4 " type="button" data-toggle="modal" data-target="#enderecoopcional" > Outro endereço </a>
                 
            </div>
          </div>
          </div>
       </div>
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

@endsection
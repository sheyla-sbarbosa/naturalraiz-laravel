<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://kit.fontawesome.com/723a0733ae.js" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&family=Philosopher&family=Playfair+Display:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/produto2.css">
    <link rel="stylesheet" href="css/produtos1.css">
    <link rel="stylesheet" href="css/carrinho.css">
    <title> Natural Raíz </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background:  rgb(15, 70, 19);">
        <a class="navbar-brand" href="#">
            <img src="img/logomarca.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <strong style="color: white;">Natural Raiz</strong></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ">
                    <a class="nav-link" style="color: white;" href="home">Home <span class="sr-only">(página atual)</span></a>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Empresa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Quem Somos</a>
                       
                        <a class="dropdown-item" href="#">Ajuda</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="produto1.html" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/verduras">Verduras e Legumes</a>
                        <a class="dropdown-item" href="/frutas">Frutas</a>
                        <a class="dropdown-item" href="/temperos">Temperos</a>
                        <a class="dropdown-item" href="{{route ('administracao.create')}}">Adicionar Produtos</a>
                    </div>
                </li>

            </ul>


          
            </label>
            

            <!-- linkar pagina de favoritos-->
            <a href="/favoritos">
            <label class="btn btn-default" style="color:white;">
                <img src="https://img.icons8.com/ios/26/ffffff/hearts.png"/> Favoritos
                </a>
            </label>
            
          
           
        </div>
    </nav>

    </div><!-- final da navbar menu-->

<body>
  
  
  <div class="container mt-5 mb-5">
    <h1>Atualizar produto</h1>
    <form method="post" action="{{route ('produto.update', [$produto->id])}}" >
      <input type="hidden" name="_token" value="{{ csrf_token()}}"> 
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nomeProduto">Nome do Produto </label>
          <input type="text" name="nome" class="form-control" id="nomeProduto" value="{{ $produto->nome}}" required>
          @error('nome')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="form-group col-md-6">
          <label for="valorProduto">Valor do produto</label>
          <input type="float" name="valor_unitario" class="form-control" id="valor_unitario" value="{{ $produto->valor_unitario}}" required>
          @error('valor_unitario')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="estoqueProduto">Estoque disponível</label>
            <input type="text" name="estoque" class="form-control" id="estoque" value="{{ $produto->estoque}}" required>
            @error('estoque')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group col-md-4">
            <label for="avaliacaoProduto">Avaliação</label>
            <input type="float" name="avaliacaoProduto" class="form-control" id="avaliacao" value="{{ $produto -> avaliacaoProduto }}">
          </div>
          
          
          <div class="form-group col-md-4">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" id="exampleFormControlSelect1 ">
              <option>Selecione</option>
              <option>Ervas/Chás</option>
              <option>Frutas</option>
              <option>Legumes</option>
              <option>Verduras</option>
              <option>Temperos</option>
            </select>
          </div>
          
      
          
          <div class="form-group col-md-12">
            <label for="descricaoProduto">Descrição</label>
            <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" rows="3" value="{{ $produto->descricaoProduto}}"></textarea>
          </div>
          
            
            <div class="custom-file" class="form-group col-md-12">
    <input type="file" class="custom-file-input mt-5 mb-5" id="validatedCustomFile">
    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
  </div>

</div>



<div class="container mt-5 mb-5 ">
  <div class="form-row">
    <div class="col-md-4">
      <button  type="submit" class="btn btn-success btn-lg btn-block">Atualizar produto</button>
    </div>
    <div class="col-md-4">
      
  </div>
</div>
<br> 
<br>

</form>
</div>

</div> 
</div>

<!--inicio footer-->
    

<div class="footer text-center">
    <div class="row">
        <div class="col-sm-4 ">
            <h3>Contatos:</h3>

            <a href="#" class="nav-link text-dark item-action"> <i class="fas fa-map-marker-alt mr-3" ></i>Rua do
                Comércio, Grajaú- SP</a>
            <a href="#" class="nav-link text-dark item-action"><i class="fas fa-mobile-alt mr-3"></i>(011)0000-0000</a>
            <a href="#" class="nav-link text-dark item-action mr-3"><i
                    class="far fa-envelope mr-3"></i>Naturalraiz@hotmail.com</a>

        </div>


        <div class="col-sm-4">
            <h3>Menu</h3>
            <div class="nav-link text-center">
                <a href="#" class="nav-link text-dark item-action">PolÍtica de Privacidade</a>
                <a href="#" class="nav-link text-dark item-action">Ajuda</a>
                <a href="#" class="nav-link text-dark item-action">Troca e Devoluções</a>
            </div>
        </div>
        <div class="col-sm-4">

            <h3>Rede Social</h3>
            <ul class="list-inline list-social list-inline-sm">
                <img class="btn btn-default" src="https://img.icons8.com/ios/50/000000/facebook.png"/>
                <img class="btn btn-default" src="https://img.icons8.com/ios/50/000000/instagram-new.png"/>
                <img class="btn btn-default" src="https://img.icons8.com/ios/50/000000/whatsapp.png"/>

            </ul>
        </div>
    </div>
</div>
<div class="container-fluid text-center" style="background-color: rgb(15, 70, 19); color:white;" >
    <br>
    © 2020 Natural Raiz. Todos os direitos reservados.
    <br>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>

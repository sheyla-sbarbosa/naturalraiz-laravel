@extends('layout.app')

@section('conteudo')

    <!-- inicio do carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class=" slide1 d-block img-fluid " src="/img/foto2.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class=" slide1 d-block " src="/img/foto8.jpeg" alt="Second slide">
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div><!-- final do carousel-->

    <!-- CARD COM EXPLICAÇÃO BREVE -->
    <section class="container text-center mt-5" >
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="card border-white h-100">
                    <img src="{{asset ('/img/itens1.png')}}" class="m-auto" alt="e-connection" id="image-card">
            <div class="card-body">
              <h5 class="card-title">Ecommerce</h5>
            <p class="card-text">Somos um Ecommerce de produtos naturais.</p>
            </div>
                 </div>
            </div>
            <div class="col mb-4">
                <div class="card border-white h-100">
              <img src="{{asset ('/img/itens3.png')}}" class="m-auto" alt="e-connection"  width="100" height="100">
              <div class="card-body">
                  <h5 class="card-title">Loja Virtual</h5>
                  <p class="card-text">Processo totalmente online, sem você precisar sair de casa.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-white h-100">
                <img src="{{asset ('/img/itens2.png')}}" class="m-auto" alt="e-connection"  width="100" height="100">
                <div class="card-body">
              <h5 class="card-title"> Nossos produtos </h5>
              <p class="card-text">Oferecemos tudo na melhor qualidade, diretamente das nossas roças.</p>
          </div>
      </div>
        </div>
    </div>
</section>
    

    <!-- inicio dos cards-->
    <div class="container mt-5" >
        <div class="titulo text-center display-5">
            <h4 class="display-4"> Nossos produtos</h4>
            <p> Das mais diversas roças pertinho de você.</p>
        </div>
        <div class="row mb-4">
            @foreach($produtos as $produto)
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/produtorepolho.jpg" alt="abacate" height="200px;">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <a href="{{route ('home.index', [$produto->id])}}">
                                
                                <h4 class="card-title text-success">{{ $produto -> nome}}</h4>
                            </a>
                            <h5 class="card-subtitle mb-4 text-success">R$ {{ $produto  -> valor_unitario}} un</h5>
                            <img class="btn btn-default"
                            src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/produtopimenta.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Pimenta</h4>                            
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                            src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/hometomate.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Tomate</h4> 
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                            src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top " src="img/pitaya.jpg" alt="pitaya" height="200px;">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Pitaya</h4>                            
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                                src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mb-4">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/homecenoura.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Cenoura</h4>
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                            src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/homemaça.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Maça Gala</h4>
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                                src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/homealho.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Alho</h4>
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                            src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/homebrocolis.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Brócolis</h4>
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default"
                            src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/plus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/20/000000/minus.png">
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/like.png">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- final dos cards-->
        <div class="center">
            {{ $produtos -> links() }}
            
        </div>
    </div>
    </div> <!-- fim container-->

    <div class="jumbotron jumbotron-fluid">
        <div class="text-center clientes">
            <p>Nossos clientes</p>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">                    
                    <div class="coment" style=" text-align:center; padding: 5px;">
                        <p> <cite>"Ótimos produtos, frescos e saborosos. Preços ótimos e justos."</cite> 
                            <p> - Jéssica </p>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex align-items-center">
                    <div class="coment" style="text-align:center; padding: 5px;">
                        <p> <cite>"Feliz com a compra, produto chegou dentro do prazo, minha mulher adorou."</cite> 
                            <p> - João Carlos </p>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex align-items-center">
                    <div class="coment" style=" text-align:center; padding: 5px;">
                        <p> <cite>"Amei, com certeza vou comprar novamente, super recomendo."</cite> 

                            <p> - Alessandra</p>
                        
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- fim container 2-->
    </div>
    </div>
    </div>
    </div>

@endsection
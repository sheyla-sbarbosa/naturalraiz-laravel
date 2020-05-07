@extends('layout.app')

@section('conteudo')



<div class="container mt-5" >
    <div class="titulo text-center display-5">
        <h4 class="display-4"> Nossos produtos</h4>
        <p> Das mais diversas roças pertinho de você.</p>
    </div>
    @foreach($produtos as $produto)
    <div class="row mb-4">
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="card">
                <img class="card-img-top" src="img/produtorepolho.jpg" alt="abacate">
                <div class="card-deck">
                    <div class="card-body text-center">
                        <h4 class="card-title text-success">{{ $produto -> nome}}</h4>
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
                <img class="card-img-top" src="img/homemorango.jpg" alt="abacate">
                <div class="card-deck">
                    <div class="card-body text-center">
                        <h4 class="card-title text-success">Morangos</h4>
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


    @endsection
@extends('layout.app')

@section('conteudo')

    <!-- inicio do carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class=" slide1 d-block img-fluid " src="/img/home1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class=" slide1 d-block " src="/img/home3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class=" slide1 d-block" src="/img/home4.jpg" alt="Third slide">
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


    <!-- inicio dos cards-->
    <div class="container">
        <div class="titulo text-center display-5">
            <h4 class="display-4"> Nossos produtos</h4>
            <p> Das mais diversas roças pertinho de você.</p>
        </div>
        <div class="row mb-4">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="img/produtorepolho.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Repolho Roxo</h4>
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
                    <img class="card-img-top" src="img/produtopimenta.jpg" alt="abacate">
                    <div class="card-deck">
                        <div class="card-body text-center">
                            <h4 class="card-title text-success">Pimenta</h4>
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
                            <h5 class="card-subtitle mb-4 text-success">R$ 2,50 un</h5>
                            <img class="btn btn-default" src="https://img.icons8.com/ios/40/000000/shopping-cart-with-money.png">
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
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
                            <h6 class="card-subtitle mb-4 text-muted">Roça do Zé</h6>
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
        <nav aria-label="Navegação de página exemplo ">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled text-muted">
                    <a class="page-link text-muted" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link text-muted" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-muted" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-muted" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link text-muted" href="#">Próximo</a>
                </li>
            </ul>
        </nav>
    </div>
    </div> <!-- fim container-->

    <div class="jumbotron jumbotron-fluid">
        <div class="text-center display-4">
            <p>Nossos clientes</p>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                        <title>Placeholder</title>
                        <img class="arredondamento" src="img/homemulher.jpeg" height="135" width="135" alt="mulher">
                        <rect width="100%" heig ht="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em"></text>
                    </svg>
                    <div class="coment" style=" text-align:center; padding: 5px;">
                        <p> <cite>"Ótimos produtos, frescos e saborosos."</cite> </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                        <title>Placeholder</title>
                        <img class="arredondamento" src="img/homepessoa2.jpg" height="135" width="130">
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em"></text>
                    </svg>
                    <div class="coment" style="text-align:center; padding: 5px;">
                        <p> <cite>"Feliz com a compra, produto chegou dentro do prazo, minha mulher adorou."</cite> </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                        <title>Placeholder</title>
                        <img class="arredondamento" src="img/homepessoa1.jpg" height="140" width="145">
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em"></text>
                    </svg>

                    <div class="coment" style=" text-align:center; padding: 5px;">
                        <p> <cite>"Amei, com certeza vou comprar novamente, super recomendo."</cite> </p>
                    </div>


                </div>
            </div>
        </div>
    </div><!-- fim container 2-->
    </div>
    </div>


    <div class="container">
        <!--inicio do nav pill videos-->
        <div class="row ">
            <div class="col-md-12">
                <ul class="nav nav-pills d-flex justify-content-center id=" pills-nav role="tablist">
                    <li class="nav-item mr-2 ">
                        <a class="nav-link active bg-dark" href="#nav-item-01" id="nav-pills-01"
                            data-toggle="pill">Plantando Organicos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active bg-dark " href="#nav-item-02" id="nav-pills-02"
                            data-toggle="pill">Renda extra</a>
                    </li>

                </ul>

                <div class="tab-content mt-4 mb-5" id="nav-pills-content">
                    <div class="tab-pane fade show active " id="nav-item-01" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe src="https://www.youtube.com/embed/IE0PNFHIm9A" frameborder="0"></iframe>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum sed illo fuga,
                                    qui, itaque autem reprehenderit laudantium quidem vel consequatur, sequi culpa.
                                    Minima esse a dolorem. Velit suscipit est eaque.Quaerat quidem, necessitatibus
                                    ea quas ab nobis? Error ab dolore dolorum, voluptas nihil vero qui enim debitis
                                    a in aut magni delectus, odit suscipit vitae voluptatibus pariatur rem est
                                    numquam?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade  " id="nav-item-02" role="tabpanel">
                        <div class="row ">
                            <div class="col-sm-6 ">

                                <div class="embed-responsive embed-responsive-4by3 ">
                                    <iframe src="https://www.youtube.com/embed/IE0PNFHIm9A" frameborder="0"></iframe>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum sed illo fuga,
                                    qui, itaque autem reprehenderit laudantium quidem vel consequatur, sequi culpa.
                                    Minima esse a dolorem. Velit suscipit est eaque.Quaerat quidem, necessitatibus
                                    ea quas ab nobis? Error ab dolore dolorum, voluptas nihil vero qui enim debitis
                                    a in aut magni delectus, odit suscipit vitae voluptatibus pariatur rem est
                                    numquam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--final do nav pill videos-->
    </div>
    </div>

@endsection
@extends('layout.app')

@section('conteudo')

    
    <div class="container">
        <div class="card">
            <div class="row">
                <aside class="col-sm-5">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div> <a href="#"><img src="/img/tomategrande.jpg"></a></div>
                        </div>
                    </article>
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h4>Tomate Brasileiro</h4>
                        <h6>Vendido pela  <a href="#"> Roça do José   </a></h6>
                        <p class="price-detail-wrap"><span class="price h3 text-warning">
                                <span class="currency">R$ </span><span class="num">2,50</span>
                            </span>
                            <span> kg</span>
                        </p>
                        <dl class="propriedade-item">
                            <dt>Informação:</dt>
                            <dd>
                                <p>Combate doenças cardiovasculares porque tem antioxidantes que ajudam a manter os
                                    vasos sanguíneos saudáveis.
                                    Ajuda a prevenir catarata, pois é rico em vitamina A, fundamental para a saúde dos
                                    olhos.
                                    Diminui a retenção de líquidos porque tem propriedades diuréticas. </p>
                            </dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Código</dt>
                            <dd>1234</dd>

                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <dl class="param param-inline">
                                        <dt>Quantidade </dt>
                                        <dd>
                                            <select class="form-control form-control-sm" style="width:70px;">
                                                <option> 1kg </option>
                                                <option> 2kg </option>
                                                <option> 3kg </option>
                                                <option> 4kg </option>
                                                <option> 5kg </option>
                                                <option> 6kg </option>
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                                <hr>
                                <a href="/carrinho2" class="btn btn-outline-success btn d-inline-block"
                                    style="height: 40px;">Adicionar</a>
                    </article>
                </aside>
            </div>
        </div>


    </div>
    <br>
    <br>
    <div class="container" style="border: 1px solid blue;">
        <div class="row">
            <div class="col-sm-4">
            </div>
            
            <section class="pt-9 pb-11" "comentarios">
                <div class="container" style="border: red 1px solid;" >
                    <div class="row">
                        <div class="col-12">
                            <h4 class=" text-center" > Visão do Cliente </h4>
                            
                            <div class="row align-items-center">
                                <div class="col-12 col-md-auto">
                                    <div class="dropdown mb-4 mb-md-auto">
                                        <div class="dropdown mb-4 mb-md-0">
                                            <a class="dropdown-toggle text-reset" data-toggle="dropdown" href="#">
                                                <strong>Ordenar por: Recentes</strong>
                                            </a>
                                            <div class="dropdown-menu mt-3">
                                                <a class="dropdown-item" href="#!">Mais recente</a>
                                                <a class="dropdown-item" href="#!">Antigos</a>
                                            </div>    
                                        </div>    
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
                
                
                <br>
                <br>
                <br>
                <div class="container" style="border: red 1px solid;">
                    <div class="row">
                        
                        
                        <div class="col-sm-4">
                            <div class="rating-block">
                                <h4>Média por loja</h4>
                                <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                    <h4>Classificação detalhada</h4>
                    <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span>
                        </div>
                    </div>
                    <div class="float-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
                            aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                            <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">1</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span>
                        </div>
                    </div>
                    <div class="float-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
                            aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="float-right" style="margin-left:10px;">1</div>
            </div>
            <div class="float-left">
                <div class="float-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span>
                    </div>
                </div>
                <div class="float-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
                        aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                        <span class="sr-only">80% Complete (danger)</span>
                    </div>
                </div>
            </div>
            <div class="float-right" style="margin-left:10px;">0</div>
        </div>
        <div class="float-left">
            <div class="float-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span>
                </div>
            </div>
            <div class="float-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                    aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                    <span class="sr-only">80% Complete (danger)</span>
                </div>
            </div>
        </div>
        <div class="float-right" style="margin-left:10px;">0</div>
    </div>
    <div class="float-left">
        <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span>
                        </div>
                    </div>
                    <div class="float-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                            aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="float-right" style="margin-left:10px;">0</div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-sm-7">
                <hr />
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="" class="img-rounded">
                            <div class="review-block-name"><a href="#">Fernanda</a></div>
                            <div class="review-block-date">1 Fevereiro 2020<br /></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">Otimo Produto</div>
                            <div class="review-block-description">Produto chegou em bom estado, pronto para consumo
                            </div>
                        </div>
                    </div>
                    <hr />

                </div>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="col-sm-7">

            <div class="produto justify-content-center mb-5">
                <h2 class="mb-3">Pergunte</h2>
                <p class="text-muted">Qual informação você precisa?</p>
                <div class="menu-perguntas d-inline" data-container="body" data-toggle="popover" data-placement="right"
                    data-content="">
                    <a href="#" class="btn btn-outline-success">Custo e tempo de entrega</a>
                    <a href="#" class="btn btn-outline-success">Garantia</a>
                    <a href="#" class="btn btn-outline-success">Opções de Pagamento</a>
                </div>
            </div>
            <div class="product-comments">
                <h5 class="mb-2">Ou faça sua pergunta</h5>
                <form action="" class="form-inline mb-5">
                    <textarea name="" id="" cols="50" rows="2" class="form-control mr-4"
                        placeholder="Escreva sua pergunta"></textarea><button class="btn btn-lg btn-primary">Ok</button>
                </form>
                <h5 class="mb-5">Perguntas mais recentes</h5>
                <ol class="list-unstyled last-questions-list">
                    <li><i class="fa fa-comment"></i> <span>Olá José, posso fazer pedido para ser entregue no mesmo
                            dia?</span></li>
                    <li><i class="fa fa-comment"></i> <span>Pode entregar em outro endereço?</span></li>
                </ol>
            </div>
        </div>
    </div>

    

@endsection
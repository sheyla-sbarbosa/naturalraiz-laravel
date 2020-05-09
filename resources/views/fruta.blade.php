@extends('layout.app')

@section('conteudo')

    
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
        <div class="card">
            <div class="row">
                <aside class="col-sm-5">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div> <a href="#"><img src="/img/produtomaça.jpg"></a></div>
                        </div>
                    </article>
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h4>Maça gala</h4>
                        <div class="rating-review">
                            <div class="pro-dec-rating mb-3">
                                <img src="https://img.icons8.com/material/18/000000/filled-star--v2.png"/>
                                <img src="https://img.icons8.com/material/18/000000/filled-star--v2.png"/>
                                <img src="https://img.icons8.com/material/18/000000/filled-star--v2.png"/>
                                <img src="https://img.icons8.com/material/18/000000/filled-star--v2.png"/>
                                <img src="https://img.icons8.com/material/18/000000/filled-star--v2.png"/>
                            </div>
                        <h6>Estoque: produto disponível</h6>
                        <p class="price-detail-wrap"><span class="price h3 text-warning">
                                <span class="currency">R$ </span><span class="num">2,50</span>
                            </span>
                            <span> kg</span>
                        </p>
                        <dl class="propriedade-item">
                            <dt>Informação:</dt>
                            <dd>
                                <p> Consumir maçã ajuda a ter uma vida equilibrada e longe de doenças. Tanto a polpa quanto a casca são ricas em vitaminas C, sais minerais como cálcio, fósforo e potássio, além de fibras e um poderoso antioxidante, a quercetina. </p>
                            </dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Código</dt>
                            <dd>2341</dd>

                            <hr>
                            <div class="row" >
                                <div class="col-sm-4" >
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
                                <div class="col-sm-4" >
                                    <dl class="param param-inline">
                                        <dt>(Ou) Unidades </dt>
                                        <dd>
                                            <select class="form-control form-control-sm" style="width:70px;">
                                                <option> 1 </option>
                                                <option> 2 </option>
                                                <option> 3 </option>
                                                <option> 4 </option>
                                                <option> 5 </option>
                                                <option> 6 </option>
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
   
    

@endsection
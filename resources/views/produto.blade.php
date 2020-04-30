@extends('layout.app')

@section('conteudo')

    
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
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
                                <div class="col-sm-4 mt-3" >
                                   
                                    <a href="/carrinho2" class="btn btn-outline-success btn btn-cart d-inline-block"
                                        style="height: 38px; padding: 10px;">Adicionar</a>
                                    </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20" >
                                            <input name="subject" placeholder="Informe sua preferência. Ex: tomates maduros, bananas verdes.." type="text" style="width: 600px; height: 50px; border: 0.5px  solid  grey;" >
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="col-sm-4">
                                        <a href="#" class="btn btn-outline-success btn  btn-cart mt-4"
                                            style="height: 38px; padding: 10px; width: 190px;">Continuar comprando</a>   
                                       </div>   
                                    
                                </div>

                                
            
                                
                                
                    </article>
                </aside>
            </div>
        </div>


    </div>
    <br>
    <br>
   
    

@endsection
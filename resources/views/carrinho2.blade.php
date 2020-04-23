@extends('layout.app')

@section('conteudo')


<body>
    <div class="container mt-5">
        <h5 class="titulo-pagina"> Seus itens do carrinho </h5>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <form action="#">
                <table class="table table-content">
                  <thead>
                      <tr>
                        <th>Image</th>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                      
                        <td class="foto-produto">
                          <a href="#">                              
                            <img src="/img/hometomate.jpg" alt="" height="120" width="120">
                          </a>
                          </td>                        
                          
                          <td class="nome-produto">
                            <p>Tomate</p>
                        </td>
                        <td class="preco-produto"> R$2,00</td>
                        <td class="quantidade-produto">
                          <input class="input-qtd" type="text" value="02">
                        </td>
                        <td class="subtotal">R$4,00</td>
                        <td class="remover-produto">
                          <a href="#"><i class="fa fa-pencil"></i></a>
                          <a href="#"><i class="fa fa-times"></i></a>
                        </td>
                      </tr>
                      <tr>                      
                        <td class="foto-produto">
                          <a href="#">                              
                            <img src="/img/hometomate.jpg" alt="" height="120" width="120">
                          </a>
                        </td>                        
                      
                        <td class="nome-produto">
                        <p>Tomate</p>
                      </td>
                      <td class="preco-produto">R$2,00</td>
                      <td class="quantidade-produto">
                        <input class="input-qtd" type="text" value="02">
                      </td>
                      <td class="subtotal">R$4,00</td>
                      <td class="remover-produto">
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a href="#"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                    <tr>                      
                      <td class="foto-produto">
                        <a href="#">                              
                          <img src="/img/hometomate.jpg" alt="" height="100" width="120">
                        </a>
                      </td>                        
                    
                    <td class="nome-produto">
                      <p>Tomate</p>
                    </td>
                    <td class="preco-produto">R$2,00</td>
                    <td class="quantidade-produto">
                      <input class="input-qtd" type="text" value="02">
                    </td>
                    <td class="subtotal">R$4,00</td>
                    <td class="remover-produto">
                      <a href="#"><i class="fa fa-pencil"></i></a>
                      <a href="#"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                  <tr>
                  </tbody>
                </table>
              </form>        
                                    
            </div>
        </div>
    </div>

    <div class="container mb-5">
      <div class="row">
        <div class=" col-7 col-lg-7 col-sm-7 col-md-7">
          <div class="botoes-cart">
            <button type="submit" class="btn btn-success btn-lg btn-cart" value=""> Editar Carrinho </button>
            <button type="submit" class="btn btn-success btn-lg btn-cart" value=""> Continuar comprando </button>
          </div>
          <br>
          <div class=" buttons-cart coupon">
            <h3>Cupom</h3>
            <p>Digite seu código de cupom, se você tiver um.</p>
            <input placeholder="Código do cupom" type="text"> 
            <button type="submit" class="btn coupon btn-success btn-lg btn-cart " value=""> Aplicar Cupom </button>     
        </div>
        </div>
        <div class="col-5 col-lg-5 col-sm-5 col-md-5">
          <div class="cart_totals  text-right">
            <h2>Totais do Carrinho </h2>
            <div class="cart-subtotal">
                <span>Subtotal</span>    
                <span>R$215.00</span>    
            </div>
            <div class="order-total">
                <span><strong>Total</strong> </span>          
                <span><strong>R$215.00 </strong> </span>
            </div>
            <div class="checkout">
                <a href="#">Fazer Checkout</a>
        </div>
      </div>
      </div>
   </div>
  </div>
   

<br>
<br>
<br>


@endsection
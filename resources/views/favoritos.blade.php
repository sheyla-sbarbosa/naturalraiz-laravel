@extends('layout.inside')

@section('conteudo')


<body>
    <div class="container mt-5 mb-5">
        <h5 class="titulo-pagina"> Seus itens favoritos</h5>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <form action="#">
                <table class="table table-content">
                  <thead>
                      <tr>
                        <th>Foto</th>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                        <th>Add no Carrinho</th>
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
                            <button type="submit" class="btn coupon btn-success btn-lg btn-cart mb-4" value=""> Adicionar </button>
                            
                            <button type="submit" class="btn coupon btn-danger btn-lg btn-cancel " value=""> Remover </button>
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
                        <button type="submit" class="btn coupon btn-success btn-lg btn-cart mb-4 " value=""> Adicionar </button>
                        <button type="submit" class="btn coupon btn-danger btn-lg btn-cancel " value=""> Remover </button>
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
                        <button type="submit" class="btn coupon btn-success btn-lg btn-cart mb-4 " value=""> Adicionar </button>
                        <button type="submit" class="btn coupon btn-danger btn-lg btn-cancel " value=""> Remover </button>
                    </td>
                  </tr>
                  <tr>
                  </tbody>
                </table>
              </form>        
                                    
            </div>
        </div>
    </div>


    @endsection
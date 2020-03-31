<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <title>Carrinho de Compras</title>
</head>

<body>

  <h1>Produtos Orgânicos</h1>
  <hr>

<div class="container">

  <div class="column-labels">
      <label class="product-image">Imagem</label>
      <label class="product-details">Descrição</label>
      <label class="product-price">Preço</label>
      <label class="product-quantity">Quantidade</label>
      <label class="product-removal">Remove</label>
      <label class="product-line-price">Total</label>
              <div class="product">
              <div class="product-image">
            <img src="img/banana.png">
            </div>
          <div class="product-details">
          <div class="product-title">Banana Prata Organica 1Kg</div>
        </div>
        <div class="product-price">3.99</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">3.99</div>
      </div>
      <div class="product">
        <div class="product-image">
          <img src="img/Abacaxi.png">
        </div>
        <div class="product-details">
          <div class="product-title">Abacaxi Organico pqn</div>
        </div>
        <div class="product-price">8.75</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">8.75</div>
      </div>

      <div class="product">
        <div class="product-image">
          <img src="img/Limao.png">
        </div>
        <div class="product-details">
          <div class="product-title">Limão Tahiti 500g</div>
        </div>
        <div class="product-price">5.99</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">5.99</div>
      </div>

      <div class="product">
        <div class="product-image">
          <img src="img/Uva Niagara.jpg">
        </div>
        <div class="product-details">
          <div class="product-title">Uva Niagara Organica 500g</div>
        </div>
        <div class="product-price">13.35</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">13.35</div>
      </div>

      <div class="product">
        <div class="product-image">
          <img src="img/Maçã.jpg">
        </div>
        <div class="product-details">
          <div class="product-title">Maça Oraganica 500g</div>
        </div>
        <div class="product-price">7.77</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">7.77</div>
      </div>

      <div class="product">
        <div class="product-image">
          <img src="img/Mamão-Formosa.jpg">
        </div>
        <div class="product-details">
          <div class="product-title">Mamão Papaya</div>
        </div>
        <div class="product-price">8.45</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">8.45</div>
      </div>

      <div class="product">
        <div class="product-image">
          <img src="img/laranja-pera.jpg">
        </div>
        <div class="product-details">
          <div class="product-title">Laranja-pera-organica-1kg</div>
        </div>
        <div class="product-price">10.50</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">10.50</div>
      </div>

    <div class="totals">
      <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">58.80</div>
      </div>
      <div class="totals-item">
        <label>Taxa (5%)</label>
        <div class="totals-value" id="cart-tax">55.86</div>
      </div>
      <div class="totals-item">
        <label>Taxa de Entrega</label>
        <div class="totals-value" id="cart-shipping">0.00</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Total</label>
        <div class="totals-value" id="cart-total">55.86</div>
      </div>
    </div>

    <button class="checkout">Finalizar Compra</button>
    <br>
    <button class="continuar">Continue Comprando</button>
        <img src="img/Carrinho.jpg" width="100px" alt="compras">
    <br>
    <br>
    <img src="img/politica de seguranca.png" alt="Política de segurança">
    <span>Politica de Segurança</span>
    <br>
    <hr>
    <img src="img/politica de entrega.png" alt="Política de segurança">
    <span>Politica de Entrega</span>
    <br>
    <hr>
    <img src="img/politica de devolucao.png" alt="Política de devolução">
    <span>Politica de Devolução</span>
    <br>
    <hr>
    <p><a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code"> Tem um código promocional? </a></p>
    <form action="https://google.com/carrinho" data-link-action="add-voucher" method="post"> <input type="hidden" name="token" value="a744309e30a45dbce1e74452f9d45247"> <input type="hidden" name="addDiscount" value="1"> <input class="promo-input" type="text" name="discount_name" placeholder="Código promocional"> <button type="submit" class="btn btn-primary"><span>Adicionar</span></button></form>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>

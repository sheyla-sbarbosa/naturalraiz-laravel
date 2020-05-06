@extends('layout.inside')
@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <body>
  <br>
  
  <div class="container mt-5 mb-5">
    <h1>Adicionar Produtos</h1>
    <form method="post" action="{{route ('produto.store')}}"">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomeProduto">Nome </label>
      <input type="text" name="nomeProduto" class="form-control" id="nomeProduto" required>
      @error('numero1nomeProduto')
      <div class="text-danger">{{ $message }}</div>
                    @enderror
    </div>

    <div class="form-group col-md-6">
      <label for="valorProduto">Valor_unitário</label>
      <input type="float" name="valorProduto" class="form-control" id="valorProduto" required>
      @error('valorProduto')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="estoqueProduto">Estoque disponível</label>
      <input type="text" name="estoqueProduto" class="form-control" id="estoque" required>
      @error('estoqueProduto')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
    </div>

    <div class="form-group col-md-4">
      <label for="avaliacaoProduto">Avaliação</label>
      <input type="float" name="avaliacaoProduto" class="form-control" id="avaliacao">
    </div>

    <div class="form-group col-md-4">
      <label for="avaliacaoProduto">Categorias </label>
      <select name="Produtos" id="categoriaProdutos"> Categorias 
      <br> </br>
      <option value="" name=""> Selecione </option>
      <option value="Ervas/Chás" name="ervas"> Ervas/Chás </option>
      <option value="Fruta" name="fruta"> Frutas </option>
      <option value="Legume" name="legume"> Legume </option>
      <option value="Verdura" name="verdura"> Verdura </option>
      <option value="Temperos" name="temperos"> Temperos </option>
      
      
      </select>
    </div>
    
    <div class="form-group col-md-12">
    <label for="descricaoProduto">Descrição</label>
    <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" rows="3"></textarea>
  </div>
  

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile">
    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
  </div>

<br> </br>
<div class="container">
 <div class="form-row">
  <div class="col-md-4">
  <button  type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>
  </div>
  <div class="col-md-4">
  <button  type="submit" class="btn btn-warning btn-lg btn-block">Editar</button>
  </div>
  <div class="col-md-4">
  <button  type="submit" class="btn btn-danger btn-lg btn-block">Excluir</button>
  </div>

  </div>
  </div>

  </form>
  </div>

<br> </br>
<br>


@endsection
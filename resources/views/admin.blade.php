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
      
      
      <div class="container mt-5 mb-5">
        <h1>Adicionar Produtos</h1>
        <form method="post" action="{{route ('produto.store')}}">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
            <label for="nomeProduto">Nome </label>
            <input type="text" name="nome" class="form-control" id="nomeProduto" required>
            @error('nome')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group col-md-6">
            <label for="valorProduto">Valor</label>
            <input type="float" name="valor_unitario" class="form-control" id="valor_unitario" required>
            @error('valor_unitario')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="estoqueProduto">Estoque disponível</label>
              <input type="text" name="estoque" class="form-control" id="estoque" required>
              @error('estoque')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="form-group col-md-4">
              <label for="avaliacaoProduto">Avaliação</label>
              <input type="float" name="avaliacaoProduto" class="form-control" id="avaliacao">
            </div>
            
            
            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Categoria</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Selecione</option>
                <option>Ervas/Chás</option>
                <option>Frutas</option>
                <option>Legumes</option>
                <option>Verduras</option>
                <option>Temperos</option>
              </select>
            </div>
            
            
            <div class="form-group col-md-12">
              <label for="descricaoProduto" >Descrição</label>
              <textarea class="form-control"  name="descricaoProduto" id="descricaoProduto" rows="3" ></textarea>
            </div>
            
            
            <div class="custom-file" class="form-group col-md-12">
    <input type="file" class="custom-file-input mt-5 mb-5" id="validatedCustomFile">
    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
  </div>

</div>



<div class="container mt-5 mb-5 ">
  <div class="form-row">
    <div class="col-md-4">
      <button  type="submit" class="btn btn-success btn-lg btn-block">Adicionar</button>
    </div>
    
    
  </div>
</div>
<br> 
<br>

</form>
</div>


</div> 

@endsection

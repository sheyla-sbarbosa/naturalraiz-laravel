@extends('layout.app')

@section('conteudo')


 <div class="container mb-5 mt-5 " >

      
     
     
     <h3>Listagem de Produtos </h3>
     <table class="table table-striped">
         <thead>
             <tr>
                 <th> ID </th>
                 <th>Produto </th>
                 <th> Valor Unitário </th>
                 <th> Descrição</th>
                 <th> Ações </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->valor_unitario }}</td>
                    <td>{{$produto->descricao_produto}}</td>
                    <td>
                        <a href="{{route ('produto.edit', ['produto'=> $produto->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                      
                        <a href="{{route ('produto.destroy', ['produto'=> $produto->id])}}" class="btn btn-sm btn-danger">REMOVER</a>
                        

                        
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>

        {{$produtos->links()}}
        
    </div>
    
    
    @endsection
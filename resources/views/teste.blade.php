<table>
    <thead>
        <tr>
            <th>$</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
         <tr>
         <td>{{ $produto -> id }}</td>
         <td> {{ $produto -> nome }} </td>
         </tr>   
        @endforeach
    </tbody>
</table>
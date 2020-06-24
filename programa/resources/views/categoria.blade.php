@extends('template')
@section('telasCadastro')

<h2>Cadastro de Categorias</h2>
<hr>

<form action="/categoria" method="post">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <label>Categoria</label><br>
    <input type="text" name="categoria" required>&nbsp
    <button>Salvar</button>
</form>
<hr>

@if( isset($data['lista']) )
    <h2>Listagem</h2>

<table>
    <thead>
        <tr>
            <th>Categoria</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data['lista'] as $num => $val)
            <tr>
                <td>{{$val}}</td>
                <td><a href="/categoria-deletar/{{$val}}">Deletar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endif

@stop
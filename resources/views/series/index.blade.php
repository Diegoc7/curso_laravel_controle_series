@extends('layout')

@section('cabecalho')
Series
@endsection

@section('conteudo')

@if (!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
    
<a href="/series/adicionar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item">{{  $serie->nome }}
        <form method="POST" action="/series/{{$serie->id}}"
            onsubmit="return confirm('tem certeza que deseja remover {{addslashes($serie->nome)}}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Excluir</button></form>
        </li>
        @endforeach
    </ul>
    <?php
?>
@endsection

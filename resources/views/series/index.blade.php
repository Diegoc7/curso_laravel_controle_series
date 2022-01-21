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
    
<a href="{{ route('form_criar_Serie') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item  d-flex justify-content-between align-items-center">{{  $serie->nome }}
        <form method="POST" action="/series/{{$serie->id}}"
            onsubmit="return confirm('tem certeza que deseja remover {{addslashes($serie->nome)}}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button></form>
        </li>
        @endforeach
    </ul>
    <?php
?>
@endsection

@extends('layout')

@section('cabecalho')
Series
@endsection

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

@if (!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
    
<a href="{{ route('form_criar_Serie') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item  d-flex justify-content-between align-items-center">{{  $serie->nome }}
            <span class="d-flex">

           
        <a href="/series/{{$serie->id}}/temporadas" class="btn btn-info btn-sm mr-1"><i class="fas fa-external-link-alt"></i></a>
        <form method="POST" action="/series/{{$serie->id}}"
            onsubmit="return confirm('tem certeza que deseja remover {{addslashes($serie->nome)}}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button></form>
        </span>
        </li>
        @endforeach
    </ul>
    <?php
?>
@endsection

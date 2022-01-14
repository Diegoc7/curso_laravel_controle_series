@extends('layout')

@section('cabecalho')
    Adicionar
@endsection

@section('conteudo')
    <form method="POST" class="form-control">
        @csrf
        <label for="nome" class="label-form">nome</label>
        <input type="text" id="nome" name="nome">
        
        <button class="btn btn-primary">enviar</button>
        </form>
@endsection
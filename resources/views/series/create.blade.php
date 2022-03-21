@extends('layout')

@section('cabecalho')
    Adicionar
@endsection

@section('conteudo')
    <form method="POST" class="form-control">
        @csrf
        <div class="row">
            <div class="col col-8">
                <label for="nome" >nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="col col-2">
                <label for="temporadas" >Nº de temporadas</label>
                <input type="number" v id="qtd_temporadas" name="qtd_temporadas">
            </div>
            <div class="col col-2">
                <label for="episodios" >Ep. Episodios</label>
                <input type="number"  class="form-control" id="epi_temporadas" name="epi_temporadas">
            </div>
        </div>
       
        
        <button class="btn btn-primary mt-2">enviar</button>
        </form>
@endsection
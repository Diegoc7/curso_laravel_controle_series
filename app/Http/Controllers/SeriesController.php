<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

/**
 * @description teste
 */
class SeriesController extends Controller
{

    public function index()
    {
        $series = Serie::all();

        // var_dump($series);exit;
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
            // $nome = $request->get('nome'); 
            $nome = $request->nome;
          
            $serie = new Serie();
            $serie->nome = $nome;
            // var_dump($nome);exit;
           var_dump( $serie->save());
    }
}

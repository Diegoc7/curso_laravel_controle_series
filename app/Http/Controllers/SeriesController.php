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
            
        //    $serie =  Serie::create(
        //         ['nome' => $nome]
        //     );

            $serie = Serie::create($request->all());

            echo "Serie em id {$serie->id} criada: {$serie->nome}";
    }
}

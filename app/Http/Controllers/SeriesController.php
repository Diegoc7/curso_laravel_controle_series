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
        $series = ['GOT', 'DBZ'];
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
            $nome = $request->nome;
          
            $serie = new Serie();
            $serie->nome = $nome;
           var_dump( $serie->save());
    }
}

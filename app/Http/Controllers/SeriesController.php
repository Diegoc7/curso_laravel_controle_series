<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

/**
 * Undocumented class
 */
class SeriesController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index(Request $request)
    {

        $series = Serie::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $nome = $request->nome;

        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem', "Serie id {$serie->id}, com nome {$serie->nome}");

        return redirect('/series');
    }
}

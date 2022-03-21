<?php
namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Undocumented function
     *
     * @param  Request $request
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
     *
     * @param Request $request
     * @return void
     */
    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create(['nome'=>$request->nome]);

        for ($i=1; $i < $request->qtd_temporadas; $i++) { 

           $temporada =  $serie->temporadas()->create(['numero' => $i]);

           for ($j=0; $j < $request->epi_temporadas; $j++) { 
              $temporada->episodios()->create(['numero' => $j]);
           }
        }


        $request->session()->flash('mensagem', "Serie id {$serie->id}, com nome {$serie->nome}");

        return redirect()->route('listar_series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()->flash('mensagem', "Serie removida com sucesso");

        return redirect()->route('listar_series');
    }
}

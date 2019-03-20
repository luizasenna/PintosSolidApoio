<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipamento;
use App\HistoricoEquipamento;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;


class PainelController extends MainController
{

    public function index()
    {
        $assistencias = DB::select('select
									e.id as Codigo,
									e.descricao as descricao,
									h.observacao as obs,
									h.created_at as data
									from historicoequipamento as h
									inner join equipamentos as e
									on e.id = h.idequipamento
									where h.idsetor = 304 and h.status = 0
									order by h.created_at');


			//Equipamento::where('idsetor', '=', '304')->get();

		return view('admin.index', [
            'assistencias' => $assistencias,
			'teste' => 'taok' ]
			);
    }

    public function assistImpressao(){



      return view('admin.assistImpressao', [
              'assistencias' => 0,
  			       'teste' => 'taok' ]
             );
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

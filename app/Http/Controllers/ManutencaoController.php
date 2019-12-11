<?php

namespace App\Http\Controllers;

use App\Manutencao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManutencaoController extends Controller
{
    /**
     * index - Receber dados de uma tabela e enviar para
     *         uma view.
     * create - Exibir um form para que o usuário possa
     *          cadastrar um novo registro
     * store - Recebe os dados form (create) e enviar
     *         para o BD
     * show - Exibe um determinado registro
     * edit - Recebe os dados de um registro e envia
     *        para um form para ser atualizado
     * update - Recebe os dados de um form (edit) e
     *          atualizado no BD
     * destroy - Deleta um registro do BD
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manutencoes = Manutencao::all();
        return view('manutencoes.index', compact("manutencoes"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manutencoes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Manutencao::create($request->all());
        return redirect()->route('manutencoes.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Manutencao  $Manutencao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manutencao = Manutencao::find($id);
        // select * from Manutencao where id = $id;
        return view('manutencoes.show', compact('manutencao'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manutencao  $Manutencao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manutencao = Manutencao::find($id);
        return view('manutencoes.edit', compact('manutencao'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manutencao  $Manutencao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('manutencao')
            ->where('id', $id)
            ->update(
                [
                    'cliente' => $request->cliente,
                    'tecnico' => $request->tecnico,
                    'problema' => $request->problema,
                    'fonecliente' => $request->fonecliente
                ]
            );
        return redirect()->route('manutencoes.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manutencao  $Manutencao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manutencao::destroy($id);
        $manutencoes = Manutencao::all();
        return view('manutencoes.index', compact('manutencoes'));
    }
}
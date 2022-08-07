<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Sistema;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SistemasController extends Controller
{
    /**
     * retorna todos os dados cadastrados do sistema no banco de dados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemas = Sistema::all()->where('ativo', '=', '1');

        return view('sistema.index', compact('sistemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sistema.create');

    }

    /**
     * Store a newly created resource in storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifica se o metodo é do tipo post
        if (!$request->isMethod('post')) {
            return  \alert('Error', 'você não tem permissão para realiar está ação');
        }
        //guarda os dados do request
        $data = $request->all();

        // informa a situação do sistema
        $data['ativo'] = 1;
        $data['situacao_id'] = 1;
        $data['token'] = $request->_token;

        try {
            Sistema::create($data);
            // retorna com a mensagem de save
            $return = Alert::success('Sucesso', 'O novo sitema  foi salvo com sucesso.');
        } catch (Exception $e) {
            $return = Alert::error('Falha', 'Não foi possivel salvar o sistema.' . 'Exception message:' . $e->getMessage() . ' with code: ' . $e->getCode());
        }
        return redirect()
            ->route('sistema.index',  compact('return'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Seta para inativo os dados do sistema na aplicação
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recuperando o cliente que vai ser deletado
        $sistema_id = Sistema::find($id);

        if(!empty($sistema_id)){
            $sistema_id->ativo = '0';
            $sistema_id->save();
        }
        $retorno = Alert::success('Sucesso', 'O cliente foi alterado com sucesso.');
        return redirect()
            ->route('sistema.index',  compact('retorno'));

    }
}

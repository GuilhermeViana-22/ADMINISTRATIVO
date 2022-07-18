<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Cliente;
use App\Models\Situacao;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();

        foreach ($clientes as $cliente) {
            $cliente->nome = strtoupper($cliente->nome);
            $cliente->situacao_id = Situacao::find($cliente->situacao_id);
            $cliente['situacao_id'] = $cliente->situacao_id->situacao;
        }

        return view('cliente.index',  compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cliente.create');
    }

    /**
     * Adicionar um novo cliente no sistema
     *
     * @return \Illuminate\Http\Request
     */
    public function add(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // verifica o tipo de request
        if ($request->isMethod('post')) {

            $data = $request->all();
            $data['data_cadastro'] = new DateTime();
            $data['cliente_iteracao_id'] = 1;
            $data['situacao_id'] = 1;
            $data['ativo'] = 1;

            // verifica se o cliente já foi cadastrado
            if (empty($data)) {
                $retorno = Alert::error('Oops', 'Não foi possivel salvar cliente');
                return redirect()
                    ->route('cliente.index',  compact('retorno'));
            }
            Cliente::create($data);
            // retorna com a mensagem de save
            $retorno = Alert::success('Sucesso', 'O cliente foi salvo com sucesso.');
            return redirect()
                ->route('cliente.index',  compact('retorno'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //recupera o cleinte pelo id
        if (!$cliente = Cliente::find($id))
            return redirect()->back();


        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar usuarios
        if (!$cliente = Cliente::find($id))
            return redirect()->back();

        return view('cliente.edit', compact('cliente'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //editar usuarios
            if (!$cliente = Cliente::find($id))
                return redirect()->back();

            $cliente->update($request->all());
            
            $retorno = Alert::success('Sucesso', 'O cliente foi alterado com sucesso.');
            return redirect()
                ->route('cliente.index',  compact('retorno'));
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recuperando o cliente que vai ser deletado
        $cliente_id = Cliente::find($id);
        $cliente_id->delete();
        $retorno = Alert::success('Sucesso', 'O cliente foi excluido com sucesso.');
        return redirect()
            ->route('cliente.index',  compact('retorno'));
    }
}

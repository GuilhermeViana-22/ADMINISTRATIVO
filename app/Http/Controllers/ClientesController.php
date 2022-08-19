<?php

namespace App\Http\Controllers;

use DateTime;
use Exception;
use App\Models\Cliente;
use App\Models\Situacao;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ClientesSalvarRequest;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all()->where('ativo', '=', '1');

        foreach ($clientes as $cliente) {
            $cliente->nome = strtoupper($cliente->nome);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ClientesSalvarRequest  $request
     */
    public function store(ClientesSalvarRequest $request)
    {

        // verifica o tipo de request
        if ($request->isMethod('post')) {

            $data = $request->all();
            $data['cliente_iteracao_id'] = 1;
            $data['situacao_id'] = 1;
            $data['ativo'] = 1;

            // verifica se o cliente já foi cadastrado
            if (empty($data)) {
                $retorno = Alert::error('Oops', 'Não foi possivel salvar cliente');
                return redirect()
                    ->route('cliente.index',  compact('retorno'));
            }

            try {
                Cliente::create($data);
                // retorna com a mensagem de save
                $retorno = Alert::success('Sucesso', 'O cliente foi salvo com sucesso.');
                return redirect()
                    ->route('cliente.index',  compact('retorno'));
            } catch (Exception $e) {
                $retorno = Alert::error('Falha', 'Não foi possivel salvar cliente.' . 'Exception message:' . $e->getMessage() . ' with code: ' . $e->getCode());
                return redirect()
                    ->route('cliente.index',  compact('retorno'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Request
     */
    public function search(Request $request)
    {


        //guarda as variaveis vindas da request
        $nome = $request->nome_cliente;
        $email = $request->email_cliente;
        $cpf = $request->cpf_cliente;
        $situacao = $request->situacao;
        $ativo = $request->ativo;

        $filter_all = Cliente::where('ativo','=', 1);

        if (!empty($nome)) {
            $filter_all->where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(2);
        }


        if (!empty($email)) {
            $filter_all->where('email_cliente', 'LIKE', '%' . $email . '%')->paginate(2);
        }

        if (!empty($cpf)) {
            $filter_all->where('cpf_cliente', 'LIKE', '%' . $cpf . '%')->paginate(2);
        }

        if (!empty($situacao)) {
            $filter_all->whereHas('cliente', function ($q) use ($situacao) {
                $q->where('situacao_id', '=', $situacao);
            })->get();
        }

        $clientes = $filter_all->get();
        // dd($clientes);
        return view('cliente.index', compact('clientes'));
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

<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Cliente;

use function Psy\debug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $cliente = new Cliente();

        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->cpf = $request->input('cpf');
        $cliente->rg = $request->input('rg');
        $cliente->cep = $request->input('cep');
        $cliente->cidade = $request->input('cidade');
        $cliente->bairro_logradouro = $request->input('bairro_logradouro');
        $cliente->complemento = $request->input('complemento');
        $cliente->nome_sistema = $request->input('nome_sistema');
        $cliente->observacoes = $request->input('observacoes');
        $cliente->data_cadastro = new DateTime();

        //$cliente->observacoes = $request->input('section');
        $cliente->cliente_iteracao_id = 1;
        $cliente->situacao_id = 1;
        $cliente->ativo = 1;
        $cliente->save();

        return redirect()->route('cliente.index');
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

        return redirect()->route('cliente.index');
    }
}

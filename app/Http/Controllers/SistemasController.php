<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Sistema;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use function Symfony\Component\String\s;

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

        $sistemas->toArray();

        foreach ($sistemas as $key => $value){
               $status[] = $value->situacao_id;
        }

        return view('sistema.index', compact('sistemas', ['status']));
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
            return \alert('Error', 'você não tem permissão para realiar está ação');
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
            $return = Alert::success('Sucesso', 'O novo sistema foi salvo com sucesso.');
        } catch (Exception $e) {
            $return = Alert::error('Falha', 'Não foi possivel salvar o sistema.' . 'Exception message:' . $e->getMessage() . ' with code: ' . $e->getCode());
        }
        return redirect()
            ->route('sistema.index', compact('return'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //recupera o sistema pelo id
        if (!$sistema = Sistema::find($id))
            return redirect()->back();


        return view('sistema.show', compact('sistema'));
    }

    /***
     * Function return a specific data
     */
    public function search(Request $request)
    {
        //verifica se o metodo é do tipo post
        if (!$request->isMethod('post')) {
            return \alert('Error', 'você não tem permissão para realiar está ação');
        }

        $id = $request->id;
        $nome_sistema = $request->nome_sistema;
        $rota = $request->rota_api;
        $created_at = $request->created_at;
        $situacao_sistema = $request->situacao_id;

        $filter_all = Sistema::where('id', '!=', null);

        if (!empty($id)) {
            $filter_all->where('id', $id);
        }
        if (!empty($nome_sistema)) {
            $filter_all->where('nome_sistema', 'LIKE', '%' . $nome_sistema . '%');
        }
        if (!empty($rota)) {
            $filter_all->where('rota_api', 'LIKE', '%' . $rota . '%');
        }

        if (!empty($situacao_sistema)) {
            $filter_all->whereHas('sistema', function ($q) use ($situacao_sistema) {
                $q->where('situacao_id', '=', $situacao_sistema);
            })->get();
        }

        if (!empty($created_at)) {
            $filter_all->where('created_at', '<=', date('Y-m-d', strtotime($created_at)) . ' 00:00:00');
        }
        $sistemas = $filter_all->get();

        return view('sistema.index', compact('sistemas'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar sistema
        if (!$sistema = Sistema::find($id))
            return redirect()->back();

        return view('sistema.edit', compact('sistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (!$sistema = Sistema::find($id))
            return redirect()->back();

        $sistema->update($request->all());

        $retorno = Alert::success('Sucesso', 'O sistema foi alterado com sucesso.');
        return redirect()
            ->route('sistema.index', compact('retorno'));
    }

    /**
     * Seta para inativo os dados do sistema na aplicação
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recuperando o sistema que vai ser deletado
        $sistema_id = Sistema::find($id);

        if (!empty($sistema_id)) {
            $sistema_id->ativo = '0';
            $sistema_id->save();
        }
        $retorno = Alert::success('Sucesso', 'O sistema foi excluido com sucesso.');
        return redirect()
            ->route('sistema.index', compact('retorno'));

    }
    public function pdf()
    {
        $mpf = Sistema::all();

        return \PDF::loadView('sistema\relatorios', compact('mpf'))
            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
            ->stream('sistemas.relatorios');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursosRemoverRequest;
use App\Http\Requests\CursosSalvarRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
use function Psy\debug;

class CursosController extends Controller
{

    public function index()
    {
        // Busca todos os cursos no banco de dados
        $cursos = Curso::all();
        // Envi a a variável $cursos para a view 'cursos.index'
        return view('cursos.index', compact('cursos'));
    }

    /***
     * método de redireiconado para o modal curso
     */
    public function incluir()
    {
        return view('cursos.incluir');
    }

    /***
     * @param CursosSalvarRequest $request
     * @return Application|ResponseFactory|RedirectResponse|Response
     */
    public function salvar(CursosSalvarRequest $request)
    {
        // Inicia a transação
        DB::beginTransaction();

        try {
            $curso = new Curso();
            $curso->titulo = $request->titulo;
            $curso->descricao = $request->descricao;
            $curso->instrutor_id = $request->instrutor_id;
            $curso->save();

            $cursoId = $curso->getKey();

            $path = $request->file('capa')->store('public/capas/' . $cursoId);
            $fullPath = Storage::url($path);

            $curso->capa = str_replace('public/', '', $fullPath);

            $curso->save();

            DB::commit();
            Alert::success('Sucesso', 'O curso foi cadastrado com sucesso')->persistent(true);
            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            return response($e->getMessage());
        }


    }

    public function remover(CursosRemoverRequest $request)
    {
        // Validação dos dados
        $request->validated();

        // Obtém o ID do curso a ser removido
        $cursoId = $request->id;

        // Procura o curso pelo ID e verifica se ele existe
        $curso = Curso::find($cursoId);
        if (!$curso) {
            return response()->json(['error' => 'Curso não encontrado'], 404);
        }

        // Remove o curso usando soft delete
        $curso->delete();

        return redirect()->back()->with('success', 'Curso removido com sucesso');
    }

}

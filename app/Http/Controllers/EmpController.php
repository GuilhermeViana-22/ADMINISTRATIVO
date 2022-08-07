<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use Barryvdh\DomPDF\PDF;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmpController extends Controller
{
    //
    public function gerarPdf()
    {
        $sistemas = Sistema::all();
        dd($sistemas);

//        $pdf = (new \Barryvdh\DomPDF\PDF)->loadView('sistemas.gerarPdf', compact('sistemas'));
//
//        if (!empty($pdf)) {
//
//            try {
//                return $pdf->download('sistemas.gerarPdf');
//                // retorna com a mensagem de save
//                $return = Alert::success('Sucesso', 'O novo sitema  foi salvo com sucesso.');
//
//            } catch (Exception $e) {
//
//                $return = Alert::error('Falha', 'Não foi possivel salvar o sistema.' . 'Exception message:' . $e->getMessage() . ' with code: ' . $e->getCode());
//            }
//        }
//        return redirect()
//            ->route('sistema.index', compact('return'));
    }

}

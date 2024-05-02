<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function api_url($action = null, $parametros = [])
    {
        $url = env('API_BASE_URL');

        if (!empty($action)) {
            $url .= DIRECTORY_SEPARATOR . $action;
        }

        if (!empty($parametros)) {
            foreach ($parametros as $parametro) {
                $url .= DIRECTORY_SEPARATOR .$parametro;
            }
        }

        return $url;
    }

    public function ajaxRedirect($route): JsonResponse
    {
        return response()->json(['redirect' => $route]);
    }

    public function ajaxAlert($tipo, $titulo, $mensagem): JsonResponse
    {
        return response()->json(['alert' => ['tipo' => $tipo, 'titulo' => $titulo, 'mensagem' => $mensagem]]);
    }

    public function ajaxCallback(): JsonResponse
    {
        return response()->json(['callback' => true]);
    }

    public function ajaxNone(): JsonResponse
    {
        return response()->json([]);
    }

    public function ajaxReload(): JsonResponse
    {
        return response()->json(['reload' => true]);
    }

    public function ajaxError(Response $response) {
        return response($response->body(), $response->status());
    }

    /**
     * @param Response $request
     * @return Application|ResponseFactory|\Illuminate\Http\Response
     */
    public function ajaxApiError(Response $request)
    {
        return \response($request->body(), $request->status());
    }
}

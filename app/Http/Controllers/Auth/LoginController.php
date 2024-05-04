<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        // Valide os dados da requisição
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Obtenha as credenciais do request
        $credentials = $request->only('email', 'password');

        // Obtenha o usuário pelo email
        $user = User::where(['email' => $credentials['email']])->first();

        // Verifique se o usuário existe e a senha está correta
        if ($user) {
            // Autenticação bem-sucedida
            Auth::login($user);

            return redirect()->route('home');
        } else {
            // Autenticação falhou
            Alert::error('Erro', 'Credenciais inválidas')->persistent(true)->autoClose(3000);

        }
    }
}

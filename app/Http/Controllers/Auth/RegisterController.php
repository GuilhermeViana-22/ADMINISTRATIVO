<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginCreateRequest;
use App\Http\Requests\LoginLogarrequest;
use App\Models\Country;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    public function showRegistrationForm()
    {
        $countries = Country::all();
        return view('vendor.adminlte.auth.register', compact('countries'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    protected function create(LoginCreateRequest $request)
    {
        // Valide os dados da requisição
        $validatedData = $request->validated();


        $senha = bcrypt($validatedData['senha']);

        $user = new User();
        $user->fill($validatedData);
        $user->password = $senha;
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);


        try {
            $user->save();
        }catch (Exception $e) {
            return response('Houve um erro ao tentar salvar o banner.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        Alert::success('Sucesso', 'A operação foi realizada com sucesso!')->autoClose(3000);
        return redirect()->route('login');
    }
    /**
     * Logout do usuário.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

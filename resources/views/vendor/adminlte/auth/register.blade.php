@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_body')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Vamos começar seu cadastro</h1>
                        <br> <br>
                        <h4 class="text-center">Para que você possa começar a utilizar nossa plataforma, vamos precisar de
                            algumas informações         </h4>    <br>   <br>
                        <form method="post" action="{{route('register')}}" id="form_login_user">
                            @csrf

                            <h5 class="text">Seus dados pessoais</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="validationTextarea">Nome</label>
                                    <input class="form-control invalid" id="nome" name="nome" placeholder="Nome"  required></input>
                                    <div class="invalid-feedback">
                                        Preencha o seu nome
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputSobrenome">Sobrenome</label>
                                    <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu sobrenome
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputCPF">CPF ou CNPJ</label>
                                    <input type="text" class="form-control" id="inputCPF" name="cpf" placeholder="Digite seu CPF ou CNPJ" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu CPF ou CNPJ
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputPais">País</label>
                                    <select name="country" id="country" class="form-control">
                                        <option value="" disabled selected style="color: #ffffff">Selecione seu País</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Preencha o País
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputTelefone">Telefone</label>
                                    <input type="tel" class="form-control" id="inputTelefone" name="telefone" placeholder="Digite seu telefone" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Telefone
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputDataNascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="inputDataNascimento" name="data_nascimento" required>
                                    <div class="invalid-feedback">
                                        Preencha a data de nascimento
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5 class="text">Seus dados de endereço</h5>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="inputCEP">CEP</label>
                                    <input name="cep" placeholder="CEP" class="form-control" type="text" id="cep"
                                           value="" size="10" maxlength="9"
                                           oninput="this.value=this.value.replace(/\D/g,'').replace(/(\d{5})(\d{3})/, '$1-$2'); "
                                           onblur="pesquisacep(this.value);" required/>
                                    <div class="invalid-feedback">
                                        Preencha o seu CEP
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="inputEndereco">Endereço</label>
                                    <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite seu endereço" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Endereço
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="inputBairro">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite seu bairro" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Bairro
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <label for="inputCidade">Cidade</label>
                                    <input type="text" class="form-control" id="cidade"  name="cidade"
                                           placeholder="Digite sua cidade" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Cidade
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputEstado">Estado</label>
                                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Estado
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="inputEstado">UF</label>
                                    <input  class="form-control" type="text" id="uf" name="uf" size="2"/>
                                    <div class="invalid-feedback">
                                        Preencha o seu UF
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="inputNumero">Número</label>
                                    <input type="text" class="form-control" id="inputNumero" name="numero" ]placeholder="Digite o número" pattern="\d*" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Número
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="inputComplemento">Complemento</label>
                                    <input type="text" class="form-control" id="inputComplemento" name="complemento" placeholder="Digite o complemento" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Complemento
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h5>Seus dados de e-mail e senha</h5>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputEmail">E-mail</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Digite seu e-mail" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu E-mail
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="inputSenha">Senha</label>
                                    <input type="password" class="form-control" id="inputSenha" name="senha" placeholder="Digite sua senha" required>
                                    <div class="invalid-feedback">
                                        Preencha o seu Senha
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="inputConfirmarSenha">Confirmar Senha</label>
                                <input type="password" class="form-control" id="inputConfirmarSenha" name="confirmar_senha" placeholder="Confirme sua senha" required>
                                <div class="invalid-feedback">
                                    Preencha o seu Confirmar Senha
                                </div>
                            </div>
                            <br>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger continuar" id="continuar" onclick="formAjax('#form_login_user')">
                                    <span class="fa fa-check"></span> Continuar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/arearestrita.js') }}"></script>
        <script src="{{ asset('js/cep.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Máscaras
        var inputCPF = document.getElementById('inputCPF');
        var inputTelefone = document.getElementById('inputTelefone');
        var inputNumero = document.getElementById('inputNumero');

        inputCPF.addEventListener('input', function (event) {
            var value = event.target.value.replace(/\D/g, '');
            event.target.value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
        });

        inputTelefone.addEventListener('input', function (event) {
            var value = event.target.value.replace(/\D/g, '');
            event.target.value = value.replace(/(\d{2})(\d{9})/, '($1) $2');
        });

        inputNumero.addEventListener('input', function (event) {
            var value = event.target.value.replace(/\D/g, '');
            event.target.value = value.slice(0, 4);
        });

        // Preencher campos com valores aleatórios
        function generateRandomString(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        document.getElementById('nome').value = generateRandomString(8);
        document.getElementById('inputSobrenome').value = generateRandomString(8);
        document.getElementById('inputCPF').value = Math.floor(Math.random() * 99999999999);
        document.getElementById('country').value = Math.floor(Math.random() * 10) + 1; // Substitua pelo valor correto
        document.getElementById('inputTelefone').value = Math.floor(Math.random() * 999999999);
        document.getElementById('inputDataNascimento').value = '2000-01-01'; // Substitua pela data aleatória desejada
        document.getElementById('cep').value = '05568-000'; // Substitua pelo valor do CEP correto
        document.getElementById('rua').value = generateRandomString(8);
        document.getElementById('bairro').value = generateRandomString(8);
        document.getElementById('cidade').value = generateRandomString(8);
        document.getElementById('estado').value = generateRandomString(2);
        document.getElementById('uf').value = generateRandomString(2);
        document.getElementById('inputNumero').value = Math.floor(Math.random() * 1000);
        document.getElementById('inputComplemento').value = generateRandomString(8);
        document.getElementById('inputEmail').value = generateRandomString(8) + '@example.com';
        document.getElementById('inputSenha').value = generateRandomString(8);
        document.getElementById('inputConfirmarSenha').value = generateRandomString(8);
    });

</script>
@stop


<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">
        <form forName="Cliente" method="post" id="insert_form" action="cliente">
            <div class="card-body">
                @csrf
                <!--TAG DE SEGURANÇA DO LARAVEL -- NÃO APAGAR--->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="disabledTextInput" class="form-label">Nome cliente</label>
                        <input name="nome" type="text" id="nnome" class="form-control"
                            placeholder="Nome cliente" aria-label="First name" value="{{$cliente->nome}}" readonly>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="disabledTextInput" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" placeholder="E-mail"
                            aria-label="Last name" value="{{$cliente->email}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="form-label">CPF</label>
                        <input name="cpf" id="cpf2" type="text" class="form-control" maxlength="14"
                            placeholder="CPF" value="{{$cliente->cpf}}" readonly>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="form-label">RG</label>
                        <input name="rg" id="rg" type="text" class="form-control" maxlength="12"
                            placeholder="RG" value="{{$cliente->rg}}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                        <label for="disabledTextInput" class="form-label">CEP</label>
                        <input name="cep" type="number" class="form-control" placeholder="CEP" maxlength="10"
                            aria-label="CEP" value="{{$cliente->cep}}" readonly>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="disabledTextInput" class="form-label">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="cep" placeholder="Cidade"
                         value="{{$cliente->cidade}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-6">
                        <label for="disabledTextInput" class="form-label">Bairro/logradouro</label>
                        <input name="bairro_logradouro" type="text" class="form-control" id="cep"
                            placeholder="Bairro/logradouro" value="{{$cliente->bairro_logradouro}}" readonly>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                        <label for="disabledTextInput" class="form-label">Complemento</label>
                        <input name="complemento" type="text" class="form-control" id="complemento"
                            name="complemento" placeholder="Complemento" value="{{$cliente->complemento}}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-12">
                        <label for="disabledTextInput" class="form-label">Nome do sistema</label>
                        <input name="nome_sistema" type="text" id="nnome_sistema" class="form-control"
                            placeholder="Nome do sistema" value="{{$cliente->nome_sistema}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col col-sm-12">
                        <label for="textarea">Observações</label>
                        <textarea name="observacoes" class="form-control" id="observações" rows="3"readonly>{{$cliente->observacoes}}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@section('js')
    <script src="{{ asset('administrativo/js/jquery.mask.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
            $('#cpf2').mask('000.000.000-00');
            $('#cep').mask('00000-000');
            $('#rg').mask('00.000.0009');
        })
    </script>
@stop

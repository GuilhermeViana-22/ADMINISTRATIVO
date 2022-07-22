

<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">
        <form forName="Cliente" method="post" id="insert_form" action="cliente">
            <div class="card-body">
                @csrf
                <!--TAG DE SEGURANÇA DO LARAVEL -- NÃO APAGAR--->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="disabledTextInput" class="form-label">Nome cliente</label>
                        <input name="nome" type="text" id="nnome" class="form-control form-control-sm"
                            placeholder="Nome cliente" aria-label="First name" value="{{$cliente->nome_cliente}}" readonly>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="disabledTextInput" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control form-control-sm" placeholder="E-mail"
                            aria-label="Last name" value="{{$cliente->email_cliente}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="form-label">CPF</label>
                        <input name="cpf" id="cpf2" type="text" class="form-control form-control-sm" maxlength="14"
                            placeholder="CPF" value="{{$cliente->cpf_cliente}}" readonly>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="form-label">RG</label>
                        <input name="rg_cliente" id="rg" type="text" class="form-control form-control-sm" maxlength="12"
                            placeholder="RG" value="{{$cliente->rg_cliente}}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="disabledTextInput" class="form-label">Cidade</label>
                        <input name="cidade_endereco" type="text" class="form-control form-control-sm" id="cep" placeholder="Cidade"
                         value="{{$cliente->cidade_endereco}}" readonly>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="disabledTextInput" class="form-label">CEP</label>
                        <input name="cep_endereco"  class="form-control form-control-sm" id="cep_endereco" placeholder="CEP"
                         value="{{$cliente->cep_endereco}}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-6">
                        <label for="disabledTextInput" class="form-label">Bairro/logradouro</label>
                        <input name="bairro_logradouro" type="text" class="form-control form-control-sm" id="cep"
                            placeholder="Bairro/logradouro" value="{{$cliente->bairro_endereco}}" readonly>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                        <label for="disabledTextInput" class="form-label">Complemento</label>
                        <input name="complemento" type="text" class="form-control form-control-sm" id="complemento"
                            name="complemento" placeholder="Complemento" value="{{$cliente->complemento_endereco}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col col-sm-12">
                        <label for="textarea">Observações</label>
                        <textarea name="observacoes" class="form-control form-control-sm form-control form-control-sm-sm" id="observações" rows="3"readonly>{{$cliente->observacoes}}</textarea>
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

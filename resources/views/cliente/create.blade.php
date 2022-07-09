<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item active" style="margin-left: 10px">
        <a href="#form_cliente" role="tab" data-toggle="tab" class="nav-link active">Cadastro</a>
    </li>
    <li style=" margin-left: 10px">
        <a href="#preferencias" role="tab" data-toggle="tab" class="nav-link">Preeferências do Sistema</a>
    </li>
</ul>
<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">

        <form forName="Cliente" method="post" id="insert_form" action="add">
            @csrf
            <!--TAG DE SEGURANÇA DO LARAVEL -- NÃO APAGAR--->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="disabledTextInput" class="form-label">Nome cliente</label>
                    <input type="text" id="nnome" name="nome" class="form-control" placeholder="Nome cliente"
                        aria-label="First name">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="disabledTextInput" class="form-label">E-mail</label>
                    <input type="email" class="form-control" placeholder="E-mail" aria-label="Last name">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <label for="disabledTextInput" class="form-label">CPF</label>
                    <input name="cpf" type="cpf" class="form-control" id="cpf" placeholder="CPF">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <label for="disabledTextInput" class="form-label">RG</label>
                    <input name="rg" type="text" class="form-control" id="rg" placeholder="RG">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                    <label for="disabledTextInput" class="form-label">CEP</label>
                    <input type="email" class="form-control" placeholder="E-mail" aria-label="CEP">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <label for="disabledTextInput" class="form-label">Cidade</label>
                    <input name="cep" type="text" class="form-control" id="cep" placeholder="Cidade">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-6">
                    <label for="disabledTextInput" class="form-label">Bairro/logradouro</label>
                    <input name="cep" type="text" class="form-control" id="cep"
                        placeholder="Bairro/logradouro">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                    <label for="disabledTextInput" class="form-label">Complemento</label>
                    <input name="bairro" type="text" class="form-control" id="complemento" name="complemento"
                        placeholder="Complemento">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
    </div>

    <div id="preferencias" class="tab-pane">
        <div class="panel panel-default">
            <div class="row">
                <div class="col col-sm-12">
                    <label for="disabledTextInput" class="form-label">Nome do sistema</label>
                    <input type="text" id="nnome" name="nome" class="form-control"
                        placeholder="Nome cliente" aria-label="First name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col col-sm-12">
                    <label for="textarea">Observações</label>
                    <textarea class="form-control" id="observações" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
    <script>
        alert("testando a plaica")
    </script>
@stop

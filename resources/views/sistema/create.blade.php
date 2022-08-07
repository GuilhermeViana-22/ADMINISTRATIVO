<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item active" style="margin-left: 10px">
        <a href="#form_cliente" role="tab" data-toggle="tab" class="nav-link active">Cadastro do Sistema</a>
    </li>
</ul>
<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">
        <form forName="Cliente" method="post" id="insert_form" action="{{ route('cliente.store') }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">Nome Sistema</label>
                        <input type="text" id="nome_sistema" name="nome_sistema" class="form-control form-control-sm"
                               placeholder="Nome Sistema" aria-label="First name">

                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">Rota</label>
                        <input type="text" id="rota" name="rota" class="form-control form-control-sm"
                               placeholder="Rota" aria-label="First name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">Quantidade usuários</label>
                        <input type="text" id="qtd_usuarios" name="qtd_usuarios" class="form-control form-control-sm"
                               placeholder="Quantidade usuários" aria-label="First name">
                    </div>

                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">API</label>
                        <input type="text" id="API" name="API" class="form-control form-control-sm"
                               placeholder="rota API" aria-label="First name">
                    </div>

                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">API TOKEN</label>
                        <input type="text" id="token" name="token" class="form-control form-control-sm"
                               placeholder="API TOKEN" aria-label="First name">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-sm"><i
                        class="fas fa-fw fa-plus"></i>Salvar</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                        class="fas fa-cancel"></i>Cancelar</button>
            </div>
        </form>

        <script type="text/javascript">
            $('#cpf_cliente_cadastro').mask('000.000.000-00');
            $('#cnpj_empresa').mask('00.000.000/0000-00', {
                reverse: true
            });
            $('#rg_cliente').mask('00.000.000-0');
            $('#cep_endereco').mask('00000-000');
            $('#telefone_cliente').mask('00 0000 00000');
            $('#telefone_empresa').mask('(00) 0000-00000');
        </script>

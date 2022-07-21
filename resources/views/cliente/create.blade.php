<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item active" style="margin-left: 10px">
        <a href="#form_cliente" role="tab" data-toggle="tab" class="nav-link active">Cadastro</a>
    </li>
</ul>
<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">
        <form forName="Cliente" method="post" id="insert_form" action="{{ route('cliente.store') }}">
            <div class="card-body">
                @csrf
                <!--   1 linha -->
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Nome completo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Nome completo"
                                id="nome_cliente" name="nome_cliente">
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">CPF</label>
                            <input class="form-control form-control-sm" type="text" placeholder="CPF"
                                id="cpf_cliente_cadastro" name="cpf_cliente" maxlength="15">

                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">RG</label>
                            <input class="form-control form-control-sm" type="text" placeholder="RG" id="rg_cliente"
                                name="rg_cliente">
                        </div>
                    </div>
                </div>
                <!--   2 linha -->
                <div class="row">
                    <div class="col-12 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">E-mail</label>
                            <input class="form-control form-control-sm" type="email" placeholder="E-mail"
                                id="email_cliente" name="email_cliente" required>

                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Telefone</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Telefone"
                                id="telefone_cliente" name="telefone_cliente">

                        </div>
                    </div>
                </div>
                <!--   3 linha -->
                <hr>
                <!--   3 linha -->
                <div class="row">
                    <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">CEP</label>
                            <input class="form-control form-control-sm" type="text" placeholder="CEP"
                                id="cep_endereco" name="cep_endereco">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Rua</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Rua"
                                id="rua_endereco" name="rua_endereco">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Bairro</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Bairro"
                                id="bairro_endereco" name="bairro_endereco">
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Número</label>
                            <input class="form-control form-control-sm" type="number" placeholder="Número"
                                id="numero_endereco" name="numero_endereco">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Cidade</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Cidade"
                                id="cidade_endereco" name="cidade_endereco">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Estado</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Estado"
                                id="estado_endereco" name="estado_endereco">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm-4" for="inputSmall">Complemento</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Complemento"
                                id="complemento_endereco" name="complemento_endereco">
                        </div>
                    </div>
                </div>
                <!-- 4 linha -->
                <hr>
                <!--Se for uma empresa-->
                <div id="isEmpresa">
                    <!--   6 linha -->
                    <hr>
                    <!--   6 linha -->
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Razão
                                    social</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Razão social"
                                    id="razao_social" name="razao_social">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Nome
                                    fantasia</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Nome fantasia" id="nome_fantasia" name="nome_fantasia">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm-4" for="inputSmall">CNPJ</label>
                                <input class="form-control form-control-sm" type="text" placeholder="CNPJ"
                                    id="cnpj_empresa" name="cnpj_empresa">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm-4" for="inputSmall">E-mail</label>
                                <input class="form-control form-control-sm" type="email"
                                    placeholder="nome@dominio.com" id="email_empresa" name="email_empresa">
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Telefone
                                    Empresa</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Telefone Empresa" id="telefone_empresa" name="telefone_empresa">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="textarea">Observações</label>
                        <textarea name="observacoes" class="form-control" id="observacoes" rows="3"></textarea>
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
            $('#cpf_cidadao').mask('000.000.000-00');
            $('#cnpj_empresa').mask('00.000.000/0000-00', {
                reverse: true
            });
            $('#rg_cidadao').mask('00.000.000-0');
            $('#cep_endereco').mask('00000-000');
            $('#telefone_cidadao').mask('(00) 0000-00000');
            $('#telefone_empresa').mask('(00) 0000-00000');
        </script>

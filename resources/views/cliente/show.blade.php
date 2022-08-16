<form forName="Cliente" method="post" id="insert_form" action="cliente">
    <div class="card-body">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Nome completo</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Nome completo" readonly
                           id="nome_cliente" name="nome_cliente" value="{{$cliente->nome_cliente}}">
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">CPF</label>
                    <input class="form-control form-control-sm" type="text" placeholder="CPF"
                           id="cpf_cliente_edicao" name="cpf_cliente" maxlength="15" readonly
                           value="{{$cliente->cpf_cliente}}">
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">RG</label>
                    <input class="form-control form-control-sm" type="text" placeholder="RG" id="rg_cliente"
                           readonly
                           name="rg_cliente" value="{{$cliente->rg_cliente}}">
                </div>
            </div>
        </div>
        <!--   2 linha -->
        <div class="row">
            <div class="col-12 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">E-mail</label>
                    <input class="form-control form-control-sm" type="email" placeholder="E-mail" readonly
                           id="email_cliente" name="email_cliente" value="{{$cliente->email_cliente}}">
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Telefone</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Telefone" readonly
                           id="telefone_cliente" name="telefone_cliente" value="{{$cliente->telefone_cliente}}">

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">CEP</label>
                    <input class="form-control form-control-sm" type="text" placeholder="CEP" readonly
                           id="cep_endereco" name="cep_endereco" value="{{$cliente->cep_endereco}}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Rua</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Rua" readonly
                           id="rua_endereco" name="rua_endereco" value="{{ $cliente->rua_endereco }}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Bairro</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Bairro" readonly
                           id="bairro_endereco" name="bairro_endereco" value="{{$cliente->bairro_endereco}}">
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Número</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Número" readonly
                           id="numero_endereco" name="numero_endereco" value="{{$cliente->numero_endereco}}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Cidade</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Cidade" readonly
                           id="cidade_endereco" name="cidade_endereco" value="{{$cliente->cidade_endereco}}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Estado</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Estado" readonly
                           id="estado_endereco" name="estado_endereco" value="{{$cliente->estado_endereco}}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Complemento</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Complemento" readonly
                           id="complemento_endereco" name="complemento_endereco"
                           value="{{$cliente->complemento_endereco}}">
                </div>
            </div>
        </div>
        <div id="isEmpresa">
            <hr>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm-4" for="inputSmall">Razão
                            social</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Razão social"
                               readonly
                               id="razao_social" name="razao_social" value="{{$cliente->razao_social}}">
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm-4" for="inputSmall">Nome
                            fantasia</label>
                        <input class="form-control form-control-sm" type="text"
                               placeholder="Nome fantasia" id="nome_fantasia" name="nome_fantasia" readonly
                               value="{{$cliente->nome_fantasia}}">
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm-4" for="inputSmall">CNPJ</label>
                        <input class="form-control form-control-sm" type="text" placeholder="CNPJ" readonly
                               id="cnpj_empresa" name="cnpj_empresa" value="{{ $cliente->cnpj_empresa }}">
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm-4" for="inputSmall">E-mail</label>
                        <input class="form-control form-control-sm" type="email" readonly
                               placeholder="nome@dominio.com" id="email_empresa" name="email_empresa"
                               value="{{ $cliente->email_empresa }}">
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm-4" for="inputSmall">Telefone
                            Empresa</label>
                        <input class="form-control form-control-sm" type="text"
                               placeholder="Telefone Empresa" id="telefone_empresa" name="telefone_empresa"
                               readonly
                               value="{{ $cliente->telefone_empresa }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="textarea">Observações</label>
                <textarea name="observacoes" class="form-control" id="observacoes" readonly
                          rows="3">{{ $cliente->observacoes }}</textarea>
            </div>
        </div>
    </div>
</form>

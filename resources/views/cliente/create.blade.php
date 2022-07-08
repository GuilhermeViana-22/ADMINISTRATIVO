<ul class="nav nav-tabs" role="tablist">
    <li class="active" style="margin-left: 10px">
        <a href="#form_cliente" role="tab" data-toggle="tab">Cadastro</a>
    </li>
    <li  style="margin-left: 10px">
        <a href="#preferencias" role="tab" data-toggle="tab">Preeferências</a>
    </li>
</ul>

<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">
        <br>
        <form forName="Cliente" method="post" id="insert_form" action="add">
            @csrf
            <!--TAG DE SEGURANÇA DO LARAVEL -- NÃO APAGAR--->
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nome completo">
                    <span style="color: red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="email" placeholder="E-mail">
                    <span style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">CPF</label>
                <div class="col-sm-10">
                    <input name="cpf" type="email" class="form-control" id="cpf" placeholder="CPF">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">RG</label>
                <div class="col-sm-10">
                    <input name="rg" type="rg" class="form-control" id="rg" placeholder="RG">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome do sistema</label>
                <div class="col-sm-10">
                    <input name="nome_sistema" type="text" class="form-control" id="nome_sistema"
                        placeholder="Nome do sistema">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">CNPJ</label>
                <div class="col-sm-10">
                    <input name="cnpj" type="cnpj" class="form-control" id="cnpj" placeholder="CNPJ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cidade</label>
                <div class="col-sm-10">
                    <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">CEP</label>
                <div class="col-sm-10">
                    <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP">
                </div>
            </div>
    
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Bairro/Distrito</label>
                <div class="col-sm-10">
                    <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Bairro/Distrito">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Logradouro/UF</label>
                <div class="col-sm-10">
                    <input name="logradouro" type="text" class="form-control" id="logradouro"
                        placeholder="Logradouro/UF">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefone</label>
                <div class="col-sm-10">
                    <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
    </div>

    <div id="preferencias" class="tab-pane">
        <div class="panel panel-default">
            Em fase de implementação
        </div>
    </div>
</div>


@section('js')
    <script>
        alert("testando a plaica")
    </script>
@stop

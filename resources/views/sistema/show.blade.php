<div class="card-body">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <label for="disabledTextInput" class="form-label">Nome Sistema</label>
            <input type="text" id="nome_sistema" name="nome_sistema" class="form-control form-control-sm"
                   placeholder="Nome Sistema" aria-label="First name" value="{{ $sistema->nome_sistema }}" readonly>

        </div>
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <label for="disabledTextInput" class="form-label">Rota</label>
            <input type="text" id="rota" name="rota_api" class="form-control form-control-sm"
                   placeholder="Rota" aria-label="First name" value="{{ $sistema->rota_api }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <label for="disabledTextInput" class="form-label">Quantidade usuários</label>
            <input type="text" id="qtd_usuarios" name="qtd_usuarios" class="form-control form-control-sm"
                   placeholder="Quantidade usuários" aria-label="First name" value="{{ $sistema->qtd_usuarios }}"
                   readonly>
        </div>

        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <label for="disabledTextInput" class="form-label">API</label>
            <input type="text" id="rota_api" name="rota_api" class="form-control form-control-sm"
                   placeholder="rota API" aria-label="First name" value="{{ $sistema->rota_api }}" readonly>
        </div>

        <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <label for="disabledTextInput" class="form-label">url</label>
            <input type="text" id="url" name="url" class="form-control form-control-sm"
                   placeholder="url" aria-label="First name" value="{{ $sistema->url }}" readonly>
        </div>

        <div class="col col-sm-4">
            <div class="form-group">
                <label>Situação</label>
                <select name="situacao_id" class="form-control form-control-sm" disabled>
                    <option value="1">Sistema ativo</option>
                    <option value="2">Sistema em manutenção</option>
                    <option value="3">Sistema com pagamento em atraso</option>
                    <option value="4">Sistema cancelado pelo Sistema</option>
                    <option value="5">Sistema com problema</option>
                    <option value="6">Sistema indisponivel</option>
                </select>
            </div>
        </div>
    </div>
</div>


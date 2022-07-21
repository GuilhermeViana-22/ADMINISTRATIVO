<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item active" style="margin-left: 10px">
        <a href="#form_cliente" role="tab" data-toggle="tab" class="nav-link active">Cadastro</a>
    </li>
</ul>
<div class="tab-content">
    <div id="form_cliente" class="tab-pane active">
        <form forName="Cliente" method="post" id="insert_form" action="cliente">
            <div class="card-body">
                @csrf
         <!--   1 linha -->
         <div class="row">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Nome completo</label>
                <input class="form-control form-control-sm" type="text" placeholder="Nome completo" id="nome_do_cidadao" name="nome_cidadao">
                <div class="invalid-feedback" validation-target-name="nome_cidadao"></div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">CPF</label>
                <input class="form-control form-control-sm" type="text" placeholder="CPF" id="cpf_cidadao" name="cpf_cidadao" maxlength="15">
               
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">RG</label>
                <input class="form-control form-control-sm" type="text" placeholder="RG" id="rg_cidadao" name="rg_cidadao">
              </div>
            </div>
          </div>
          <!--   2 linha -->
          <div class="row">
            <div class="col-12 col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">E-mail</label>
                <input class="form-control form-control-sm" type="email" placeholder="E-mail" id="email_cidadao" name="email_cidadao" required>
               
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Telefone</label>
                <input class="form-control form-control-sm" type="text" placeholder="Telefone" id="telefone_cidadao" name="telefone_cidadao">
               
              </div>
            </div>
          </div>
          <!--   3 linha -->
          <br>
          <hr>
          <!--   3 linha -->
          <div class="row">
            <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">CEP</label>
                <input class="form-control form-control-sm" type="text" placeholder="CEP" id="cep_endereco" name="cep_endereco">
               
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Rua</label>
                <input class="form-control form-control-sm" type="text" placeholder="Rua" id="rua_endereco" name="rua_endereco">
               
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Bairro</label>
                <input class="form-control form-control-sm" type="text" placeholder="Bairro" id="bairro_endereco" name="bairro_endereco">
              </div>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="col-form-label col-form-label-sm-4" for="inputSmall">Número</label>
                  <input class="form-control form-control-sm" type="number" placeholder="Número" id="numero_endereco" name="numero_endereco">
                 
                </div>
              </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Cidade</label>
                <input class="form-control form-control-sm" type="text" placeholder="Cidade" id="cidade_endereco" name="cidade_endereco">
               
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-form-label col-form-label-sm-4" for="inputSmall">Estado</label>
                <input class="form-control form-control-sm" type="text" placeholder="Estado" id="estado_endereco" name="estado_endereco">
               
              </div>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="col-form-label col-form-label-sm-4" for="inputSmall">Complemento</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Complemento" id="complemento_endereco" name="complemento_endereco">
                </div>
              </div>
              
          </div>
          <!-- 4 linha -->
          
            <!--Se for uma empresa-->
            <div id="isEmpresa">
              <!--   6 linha -->
              <br>
              <hr>
              <!--   6 linha -->
              <div class="row">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Razão social</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Razão social" id="razao_social" name="razao_social">
                   
                  </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Nome fantasia</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Nome fantasia" id="nome_fantasia" name="nome_fantasia">
                   
                  </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">E-mail</label>
                    <input class="form-control form-control-sm" type="text" placeholder="nome@dominio.com" id="email_empresa" name="email_empresa">
                   
                  </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">CNPJ</label>
                    <input class="form-control form-control-sm" type="text" placeholder="CNPJ" id="cnpj_empresa" name="cnpj_empresa">
                   
                  </div>
                </div>
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm-4" for="inputSmall">Telefone Empresa</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Telefone Empresa" id="telefone_empresa" name="telefone_empresa">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-plus"></i>Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                        class="fas fa-cancel"></i>Cancelar</button>
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

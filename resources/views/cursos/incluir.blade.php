<div class="container">
        <div class="col-md-12">
            <form action="/cursos/salvar" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="capa">Capa:</label>
                    <input type="file" class="form-control-file" id="capa" name="capa" required accept="image/*">
                </div>

                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" required>
                </div>

                <div class="form-group">
                    <label for="instrutor_id">ID do Instrutor:</label>
                    <input type="text" class="form-control" id="instrutor_id" name="instrutor_id" required>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success"> <span class="fa fa-check"></span> Salvar</button>
                </div>
            </form>
        </div>
</div>



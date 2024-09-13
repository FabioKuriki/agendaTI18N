<x-layout titulo="Cadastrar">
    <form class="container" action="" method="GET">
        <div class="mb-3">
            <label for="dataCompromisso" class="form-label">Data Compromisso:</label>
            <input type="date" class="form-control" id="dataEvento" name="dataEvento">
        </div>
        <br><br>
        <div class="mb-3">
            <label for="descricaoCompromisso" class="form-label">Descrição Compromisso:</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <!-- Submit atualizar a pagina -->
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-primary" href="atualizar">Atualizar</a>
        <a class="btn btn-primary" href="consultar">Consultar</a>
    </form>
</x-layout>
<x-layout titulo="Cadastrar">
    <!-- Na action foi colocado a rota com o método -->
    <form class="container" action="cadastrar/salvar" method="GET">
        @csrf <!--Utilizar a classe control, usar sempre que houver entrada de dados--> 
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
        <a class="btn btn-primary" href="consultar">Consultar</a>
    </form>
</x-layout>
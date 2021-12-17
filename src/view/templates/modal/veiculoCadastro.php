<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCadastroTitle">Cadastro de veículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Fornecedor.php" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Placa do veiculo" id="placaEditar"
                                name="placa" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Colaborador" id="nomeEditar"
                                name="nome" required>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Modelo do veiculo" id="modeloEditar"
                                name="modelo" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Cor do veiculo" id="corEditar"
                                name="cor" required>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Setor" id="setorEditar"
                                name="dcrsetor">
                        </div>

                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="garagem" value="garagem"
                                    id="checkGaragemEditar">
                                <label class="form-check-label" for="checkGaragemEditar">
                                    Acesso ao estacionamento
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fornecedor" value="fornecedor"
                                    id="checkFornecedorEditar">
                                <label class="form-check-label" for="checkFornecedorEditar">
                                    Veículo de Fornecedores
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="keyEditar" name="keyEditar" value="">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Salvar Cadastro</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>
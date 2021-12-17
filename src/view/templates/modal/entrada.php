<div class="modal fade" id="modalEntrada" tabindex="-1" role="dialog" aria-labelledby="modalEntradaTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="entradaModalTitle">Permitir Entrada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="entrada.php" method="post">
                <div class="modal-body">
                    <label>Placa do veículo: </label>
                    <input id="placaEntradaModal" type="text" name="placaEntradaModal"
                        value="<?php echo isset($placas[0][1]) ? $placas[0][1] : ''; ?>" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Autorizar Entrada</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalSaida" tabindex="-1" role="dialog" aria-labelledby="modalSaidaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="saidaModalTitle">Permitir Saida</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="saida.php" method="post">
            <div class="modal-body">
                <label>Placa do veículo: </label>	
                <input id="placaSaidaModal" type="text" name="placaSaidaModal" value="<?php echo isset($placas[0][1]) ? $placas[0][1] : ''; ?>"  />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger">Autorizar Saída</button>
            </div>
        </form>
    </div>
    </div>
</div>
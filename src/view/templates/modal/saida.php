<div class="modal fade" id="modalSaida" tabindex="-1" role="dialog" aria-labelledby="modalSaidaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="saidaModalTitle">Permitir Saida</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div>Deseja informar saida do veiculo abaixo?</div>
            <div>Veiculo : <span id="veiculo"></span></div>
            <div>Motorista : <span id="motorista"></span></div>
            <div>Placa : <span id="placa"></span></div>
            <div>Hora de Entrada: <span id="hora"></span></div>
        </div>
        <div class="modal-footer">
            <form action="saida.php" method="post">
                <input type="hidden" id="keysaida" type="text" name="key" value="<?php echo isset($placas[0][1]) ? $placas[0][1] : ''; ?>"  />
                <button type="submit" class="btn btn-danger">Autorizar Saída</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </form>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" id="modalSaida" tabindex="-1" role="dialog" aria-labelledby="modalSaidaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="saidaModalTitle">Deseja informar saida do veiculo abaixo?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            
        <div id="modalSaidaHtml">

        </div>
        </div>
        <div class="modal-footer">
            <form action="saida.php" method="post">
                <input type="hidden" id="keysaida" type="text" name="key"  />
                <button type="submit" class="btn btn-danger">Autorizar Saída</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </form>
        </div>
    </div>
    </div>
</div>
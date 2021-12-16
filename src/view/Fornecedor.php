<div class="container" id="FornecedorContainer">

    <?php if($exception): ?>
        <div class="alert alert-success mt-4" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <?=  $exception ?>
        </div>
    <?php endif;?> 

    <?php include(TEMPLATE_PATH . "/modal/veiculoCadastro.php");?>

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title mb-4">Painel de ações</h5>
            <button type="button" onclick="exibeModalCadastro()" id="addFornecedor" class="btn btn-success mr-2">Adicionar Fornecedor</button>
        </div>
    </div>

    <?php
        include(CONTROLLERS_PATH . "/exibirVeiculosCadastrados.php");
    ?>
</div>
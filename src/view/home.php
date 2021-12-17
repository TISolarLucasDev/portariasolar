<div class="container" id="home">

    <?php if($exception): ?>
    <div class="alert alert-success mt-5" role="alert">
        <i class="bi bi-check-circle-fill"></i>
        <?= $exception ?>
    </div>
    <?php elseif ($exception) : ?>
    <div class="alert alert-danger mt-5" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i>
        <?= $exception ?>
    </div>
    <?php endif;?>

    <div class=" mt-5" id="cardContainer"></div>

    <div class="col-md-12 mt-3">
        <div class="containerInputSearch">
            <h6>Veiculos no estacionamento</h6>
            <input type="text" placeholder="🔎 Buscar por placa!" id="filtroPlacaEstacionamento"
                onkeyup="filtroPlaca(this)">
        </div>
        <div class=" mt-4" id="tablesContainer"></div>
    </div>
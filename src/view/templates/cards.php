
<div class="row">
  <div class="col-md-6 mt-4">
    <div class="card card-1">
      <div class="card-body">
        <form action="cards.php" method="post">
          <input type="text" name="placa" id="inputPlacas" placeholder="Digite a placa para a pesquisa" value="<?= isset($placas[0][1]) ? $placas[0][1] : ''?>">
          <button><img src="images/icons/search.png" alt="Buscar"></button>
        </form>

        <div class="cards-title mt-4">
          <h6>Informações do veículo</h6>
          
          <div class="continer-card ">
              <div class="card-item-1">
                  <img src="/images/icons/boarding.png" alt="placa">
                    <p><?= isset($placas[0][1]) ? $placas[0][1] : 'Placa do veículo'  ?></p>
              </div>

              <div class="card-item-1">
                <img src="/images/icons/2_user.png" alt="colaborador">
                <p><?=  isset($placas[0][2]) ? $placas[0][2] : 'Colaborador' . ' - '?></p>
                <p><?= isset($placas[0][3]) ? $placas[0][3] : 'Departamento'?></p>
              </div>

              <div class="card-item-1">
                <img src="/images/icons/car.png" alt="placa">
                <p><?= isset($placas[0][5]) ? $placas[0][5] : ' Informações do veículo' ?></p>
                <p><?= isset($placas[0][6]) ? $placas[0][6] : '' ?></p>
              </div>

              <div class="card-item-1">
                <img src="<?= isset($placas[0][3]) == "S" ? '/images/icons/ok.png' : '/images/icons/cancel.png' ?>" alt="Acesso ao estacionamento?">
                <p><?= isset($placas[0][3]) == "S" ? 'Acesso permitido ao estacionamento' : ' Acesso não permitido ao estacionamento' ?></p>
              </div>
            </div>
          </div>
       </div>
      </div>
    </div>

    <div class="col-md-3 mt-4">
      <div class="card card-1">
       Test
      </div>
    </div>


    <div class="col-md-3 mt-4">
      <div class="card card-1">
      <p>Test</p>
      </div>
    </div>
</div>
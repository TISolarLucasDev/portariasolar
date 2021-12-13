<div class="row">
  <div class="col-md-12 mt-4">
    <div class="card card-1">
      <div class="card-body">
        <form action="buscarVeiculos.php" method="post">
          <input type="text" name="placa" id="inputPlacas" placeholder="Digite a placa para a pesquisa" value="<?= isset($placas[0][1]) ? $placas[0][1] : ''?>">
          <button class="glass"><img draggable="false" src="images/icons/search.png" alt="Buscar"></button>
        </form>

        <div class="cards-title">
          <h6>Informações do veículo</h6>
          
          <?php if($placas):?>
            
            <div class="continer-card ">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-item-1">
                    <img draggable="false" src="/images/icons/boarding.png" alt="placa">
                    <p><?= isset($placas[0][1]) ? $placas[0][1] : 'Placa do veículo'  ?></p>
                  </div>
                  <div class="card-item-1">
                    <img draggable="false" src="/images/icons/2_user.png" alt="colaborador">
                    <p><?=  isset($placas[0][2]) ? "{$placas[0][2]}  - " : 'Colaborador' ?></p>
                    <p><?= isset($placas[0][3]) ? $placas[0][3] : 'Departamento'?></p>
                  </div>
                  <div class="card-item-1">
                    <img draggable="false" src="/images/icons/car.png" alt="placa">
                    <p><?= isset($placas[0][5]) ? "{$placas[0][5]}  - " : ' Informações do veículo' ?></p>
                    <p><?= isset($placas[0][6]) ? $placas[0][6] : '' ?></p>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="card-item-1">
                    <img draggable="false" src="<?= isset($placas[0][3]) == "S" ? '/images/icons/ok.png' : '/images/icons/cancel.png' ?>" alt="Acesso ao estacionamento?">
                    <p><?= isset($placas[0][3]) == "S" ? 'Acesso permitido ao estacionamento' : ' Acesso não permitido ao estacionamento' ?></p>
                </div>
                  
                <br>

                <div class="buttonContainer">
                  <button type="button" class="btn btn-success" id="entrar" data-toggle="modal" data-target="#modalEntrada" ><i class="bi bi-box-arrow-in-left"></i> Autorizar Entrada</button>
                  <a href="#"  class="btn btn-danger" id="sair"><i class="bi bi-box-arrow-right"></i> Autorizar Saida</a>
                </div>
                </div>
              </div>
            </div>

            <?php else : ?>
              <div class="card-info">
                    <p>Nenhum Veículo encontrado!</p>
              </div>
            <?php endif; ?>
            


          </div>
      </div>
      </div>
    </div>
</div>

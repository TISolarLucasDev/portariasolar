<div class="row">
  <div class="col-md-12 mt-4">
    <div class="card card-1">
      <div class="card-body">
        <form action="buscarVeiculos.php" method="post">
          <input type="text" name="placa" id="inputPlacas" placeholder="Digite a placa para a pesquisa" value="<?= isset($placas[0][1]) ? $placas[0][1] : ''?>">
          <button class="glass"><img draggable="false" src="images/icons/search.png" alt="Buscar"></button>
        </form>
<?php
  // echo 'deu até aqui';
  // var_dump($veiculosDentro);
  $placasVeiculosDentro = [];
  // var_dump($placasVeiculosDentro);
  for($i = 0; $i < count($veiculosDentro); $i++ ){
    array_push($placasVeiculosDentro, $veiculosDentro[$i][1]);
  }
  // var_dump($placasVeiculosDentro);

?>
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
                    <p><?=  isset($placas[0][2]) ? "{$placas[0][2]} " : 'Colaborador' ?></p>
                  </div>
                  <div class="card-item-1">
                    <img draggable="false" src="/images/icons/car.png" alt="placa">
                    <p><?= isset($placas[0][4]) ? "{$placas[0][4]}  - " : ' Informações do veículo' ?></p>
                    <p><?= isset($placas[0][5]) ? $placas[0][5] : '' ?></p>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="card-item-1">
                    <img draggable="false" src="<?= isset($placas[0][3]) == "S" ? '/images/icons/ok.png' : '/images/icons/cancel.png' ?>" alt="Acesso ao estacionamento?">
                    <p><?= isset($placas[0][3]) == "S" ? 'Acesso permitido ao estacionamento' : ' Acesso não permitido ao estacionamento' ?></p>
                </div>
                  
                <br>

                <div class="buttonContainer">
                  <button type="button" class="btn btn-success" id="entrar" data-toggle="modal" data-target="#modalEntrada" <?php if(in_array($placas[0][1], $placasVeiculosDentro)) { ?> disabled <?php }; ?>><i class="bi bi-box-arrow-in-left"></i> Autorizar Entrada</button>
                  <button type="button" class="btn btn-danger" id="sair" data-toggle="modal" data-target="#modalSaida" <?php if(!in_array($placas[0][1], $placasVeiculosDentro)) { ?> disabled <?php }; ?>><i class="bi bi-box-arrow-right"></i> Autorizar Saida</button>
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


<div class="col-xl-8 col-md-12 mt-12" >
    <div class="card">
      <div class="card-content">
        <div class="card-body cleartfix">
          <div class="media align-items-stretch">
            <div class="align-self-center">
              <h1 class="mr-2">Buscar Placa</h1>
            </div>
            <form action="#" method="post">
              <input type="text" name="placa">
              <button>Buscar</button>
            </form>
            <div class="media-body">
              <h4>Código</h4>
              <span><?= $placas[0][0]?></span>
              <h4>Nome do proprietário</h4>
              <span><?= $placas[0][2]?></span>
              <h4>Placa do veículo</h4>
              <span><?= $placas[0][1]?></span>
              <h4>Garagem</h4>
              <span><?= $placas[0][4] = "S" ? 'Sim' : 'Não' ?></span>
              <h4>Departamento do Proprietario</h4>
              <span><?= $placas[0][3]?></span>
              <h4>Modelo do Veiculo</h4>
              <span><?= $placas[0][5]?></span>
              <h4>Cor do Veiculo</h4>
              <span><?= $placas[0][6]?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

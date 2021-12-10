<div class="container">

    <div class="container_body">

    <?php if($placas): ?>
        <div class="alert alert-success" role="alert">
        <i class="bi bi-check-circle-fill"></i>
           Veículo encontrado com sucesso!
          </div>
       <?php endif;?> 
     

      <?php if($exception): ?>
        <div class="alert alert-danger" role="alert">
           <i class="bi bi-x-circle-fill"></i>
            <?= $exception ?>
          </div>
       <?php elseif (!$placas) : ?>
         <div class="alert alert-warning" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
              Para buscar as informações do veículos, digite a placa do veículo!
          </div>
       <?php endif;?> 

        <?php include(TEMPLATE_PATH . "/cards.php");?>

     </div>

</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

  <form action="" method="post">
      <input type="text" name="placa">
      <button>Buscar</button>
  </form>


 <div class="container mt-5">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome do Proprietario</th>
      <th scope="col">Placa do Veiculo</th>
      <th scope="col">Garagem</th>
      <th scope="col">Departamento do Proprietario</th>
      <th scope="col">Modelo do Veiculo</th>
      <th scope="col">Cor do Veiculo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $placas[0][0]?></th>
      <td><?= $placas[0][2]?></td>
      <td><?= $placas[0][1]?></td>
      <td><?= $placas[0][4] = "S" ? 'Sim' : 'Não' ?></td>
      <td><?= $placas[0][3]?></td>
      <td><?= $placas[0][5]?></td>
      <td><?= $placas[0][6]?></td>
    </tr>
  </tbody>
</table>
 </div>
  

</body>
</html>
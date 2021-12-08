<?php
loadModel('Sankhya');
session_start();
requireValidSession();

$userLogin =  $_SESSION['login'];
$userPassword  = $_SESSION['password'];

if(count($_POST) > 0){
  if($_POST['placa']) {
    $Placa = $_POST['placa'];

    try {
       
        $sankhya = new Sankhya();

        $sankhya->autenthicate($userLogin, $userPassword);
    
        $sql = "SELECT * FROM AD_VEICULOSFUNC WHERE PLACA = '{$Placa}' ";

        $placas = $sankhya->consultaQueryJson($sql);
    
        switch($placas[0][3]){
            case 1:
                $placas[0][3] =  "Tecnologia";
                break;
            case 2:
                $placas[0][3] =  "Compras";
                break;
             case 3:
                $placas[0][3] =  "RH";
                break;    
        }


    } catch (Exception $e) {
      
        echo "ERROR :". $e->getMessage();

    }finally {
        $sankhya->deAutenthicate();
    }
  }


  
}




loadView('Home', ['placas' => $placas ]);
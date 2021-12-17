<?php

    loadModel('Sankhya');

    session_start();
    requireValidSession();

    $exception = null;

    $userLogin =  $_SESSION['login'];
    $userPassword  = $_SESSION['password'];

    if(count($_POST) > 0){

    $Placa = $_POST['placa'];

    try {
    
    $sankhya = new Sankhya();
    $sankhya->autenthicate($userLogin, $userPassword);
    $sql = "SELECT * FROM AD_VEICULOSFUNC WHERE PLACA = '{$Placa}' ";
    $placas = $sankhya->consultaQueryJson($sql);
    $sqlEstacionamento =    "SELECT  garagem.IDVEICULO, 
                                vf.PLACA, 
                                vf.NOME, 
                                VF.MODELO, 
                                VF.COR,
                                format(garagem.DH_ENT, 'yyyy-MM-dd hh:mm:ss') as dataE,
                                garagem.ID
                                FROM AD_VEICULOSFUNCGARAGEM garagem 
                                INNER JOIN AD_VEICULOSFUNC vf on (garagem.IDVEICULO = vf.IDVEICULO) 
                                WHERE garagem.DH_SAI IS NULL 
                                ORDER BY garagem.IDVEICULO ASC";
    $veiculosDentro = $sankhya->consultaQueryJson($sqlEstacionamento);

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
        $exception = 'Erro ao executar a busca';

    }finally {
        $sankhya->deAutenthicate();
    }

}

    loadTemplateView('buscarVeiculos' , ['placas' => $placas , 'exception' => $exception , 'dataEntrada' => $dataEntrada, 'veiculosDentro' => $veiculosDentro]);

?>
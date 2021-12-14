<?php
    loadModel('Sankhya');
    
    session_start();
    requireValidSession();

    $exception = null;
    $DH_SAI = date('d/m/Y H:i:s');

    $userLogin =  $_SESSION['login'];
    $userPassword  = $_SESSION['password'];
    $CODUSUSAI = $_SESSION['codusu'];


    if(count($_POST) > 0){
        
        $placaSaida = $_POST['placaSaidaModal'];

        try {
            
            $sankhya = new Sankhya();
            $login = $sankhya->autenthicate($userLogin, $userPassword);
        
            $sql = "SELECT GARAGEM.ID FROM AD_VEICULOSFUNCGARAGEM GARAGEM INNER JOIN AD_VEICULOSFUNC FUNC on (FUNC.IDVEICULO = GARAGEM.IDVEICULO) WHERE PLACA = '{$placaSaida}' ";
            $resultQuery = $sankhya->consultaQueryJson($sql);
            $ID = $resultQuery[0][0];

            $resultQueryInsertion = $sankhya->insertSaidaQueryJson($ID, $DH_SAI, $CODUSUSAI); //  ID, DH_SAI, CODUSUSAI

            $exceptionSuccess = "Saída Autorizada com sucesso!";

        } catch (Exception $e) {
            
            $exception = "Erro ao executar a inserção!";
            echo $e->getMessage();

        } finally {
            $sankhya->deAutenthicate();
        }
    }

    loadTemplateView('home' , ['exception' => $exception , 'exceptionSuccess' => $exceptionSuccess ]);
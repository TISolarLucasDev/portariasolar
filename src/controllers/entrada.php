<?php
        loadModel('Sankhya');
        
        session_start();
        requireValidSession();


        $exception = null;
        $DH_ENT = date('d/m/Y H:i:s');


        $userLogin =  $_SESSION['login'];
        $userPassword  = $_SESSION['password'];
        $CODUSUENT = $_SESSION['codusu'];


        if(count($_POST) > 0){
            
            $placaEntrada = $_POST['placaEntradaModal'];

            try {
                
                $sankhya = new Sankhya();
               $login = $sankhya->autenthicate($userLogin, $userPassword);
            
                $sql = "SELECT IDVEICULO FROM AD_VEICULOSFUNC WHERE PLACA = '{$placaEntrada}' ";
                $resultQuery = $sankhya->consultaQueryJson($sql);
                $IDVEICULO = $resultQuery[0][0];

                $resultQueryInsertion = $sankhya->insertQueryJson($IDVEICULO, $DH_ENT, $CODUSUENT); //  IDVEICULO, DH_ENTRA, CODUSUENT

                $exceptionSuccess = "Entrada Autorizada com sucesso!";

            } catch (Exception $e) {
                
               $exception = "Erro ao executar a inserção!";
               echo $e->getMessage();

            } finally {
                $sankhya->deAutenthicate();
            }
    }

    loadTemplateView('home' , ['exception' => $exception , 'exceptionSuccess' => $exceptionSuccess ]);
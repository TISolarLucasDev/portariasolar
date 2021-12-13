<?php
        loadModel('Sankhya');
        session_start();
        requireValidSession();


        $exception = null;
        echo 'Entrada controller';
        $data = new date();
        
        $userLogin =  $_SESSION['login'];
        $userPassword  = $_SESSION['password'];
        $codUsu = $_SESSION['codusu'];
        if(count($_POST) > 0){
            $placaEntrada = $_POST['placaEntradaModal'];
            try {
                $sankhya = new Sankhya();
                $sankhya->autenthicate($userLogin, $userPassword);
                $sql = "SELECT IDVEICULO FROM AD_VEICULOSFUNC WHERE PLACA = '{$placaEntrada}' ";
                $resultQuery = $sankhya->consultaQueryJson($sql);
                $idveiculo = $resultQuery[0][0];
                $sankhya->insertQueryJson($idveiculo, $data->format('Y-m-d H:i:s'), $codUsu); //  IDVEICULO, DH_ENTRA, CODUSUENT
                
            } catch (Exception $e) {
                
                $exception = "Erro ao executar a inserção!";

            } finally {
                $sankhya->deAutenthicate();
            }
    }

    loadTemplateView('home');
<?php
    
    function loadGaragem(){
        loadModel('Sankhya');

        session_start();

        $userLogin =  $_SESSION['login'];
        $userPassword  = $_SESSION['password'];
        try {
            $sankhya = new Sankhya();
            $sankhya->autenthicate($userLogin, $userPassword);
            $sql = "SELECT IDVEICULO FROM AD_VEICULOSFUNCGARAGEM garagem WHERE garagem.DH_SAI IS NULL";
            $veiculosDentro = $sankhya->consultaQueryJson($sql);
        } catch (Exception $e) {
      
            echo '<div class="alert alert-danger" role="alert">'.
            '<span>'.'Erro ao executar a busca'.'</span>'.
            '</div>';
        } finally {
            $sankhya->deAutenthicate();
        }


        return $veiculosDentro;
    }

    function generateHtmlGaragem() {
        $veiculosDentro = loadGaragem();
        
        $html  = '<div class="col-md-3 mt-4">';
        $html .=    '<div class="card card-1">';
        $html .=        $veiculosDentro;
        $html .=    '</div></div>'
        return $veiculosDentro;
    }
<?php
        loadModel('Sankhya');
        session_start();
        requireValidSession();

        $exception = null;
        
        $userLogin =  $_SESSION['login'];
        $userPassword  = $_SESSION['password'];
       
        try {
            $sankhya = new Sankhya();
            $sankhya->autenthicate($userLogin, $userPassword);
           
            $sql = "SELECT  garagem.IDVEICULO, 
                            vf.PLACA, 
                            vf.NOME, 
                            VF.MODELO, 
                            VF.COR,
                            format(garagem.DH_ENT, 'yyyy-MM-dd hh:mm:ss') as dataE
                            FROM AD_VEICULOSFUNCGARAGEM garagem 
                            INNER JOIN AD_VEICULOSFUNC vf on (garagem.IDVEICULO = vf.IDVEICULO) 
                            WHERE garagem.DH_SAI IS NULL 
                            ORDER BY garagem.IDVEICULO ASC";
        
            $veiculosDentro = $sankhya->consultaQueryJson($sql);
        
          } catch (Exception $e) {
      
          $exception = "Erro ao executar a busca!";

        } finally {
            $sankhya->deAutenthicate();
        }
       

        $cardHtml .= '<div class="cardCountCars">';
        $cardHtml .= '<div class="card" style="width: 18rem;">';
        $cardHtml .='<div class="card-body">';
        $cardHtml .= '<h5 class="card-title-h6">Carros no estacionamento</h5>';
        $cardHtml .=  '<div class="body-card">';
        $cardHtml .= '<img src="images/icons/garage.png"></src>';
        $cardHtml .= '<p class="card-text">'.count($veiculosDentro).'</p>';
        $cardHtml .= '</div>';
        $cardHtml .= '<br>';
        $cardHtml .= '<span class="card-text">'.count($veiculosDentro). ' carros com o acesso autorizado.'.'</span>';
        $cardHtml .= '</div>';
        $cardHtml .=  '</div>';
        $cardHtml .= '</div>';
    
       echo  $cardHtml;
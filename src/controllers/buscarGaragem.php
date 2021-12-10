<?php
        loadModel('Sankhya');

        session_start();
        requireValidSession();
        $userLogin =  $_SESSION['login'];
        $userPassword  = $_SESSION['password'];
        try {
            $sankhya = new Sankhya();
            $sankhya->autenthicate($userLogin, $userPassword);
            $sql = "SELECT garagem.IDVEICULO, vf.PLACA, vf.NOME, VF.MODELO, VF.COR FROM AD_VEICULOSFUNCGARAGEM garagem INNER JOIN AD_VEICULOSFUNC vf on (garagem.IDVEICULO = vf.IDVEICULO) WHERE garagem.DH_SAI IS NULL";
            $veiculosDentro = $sankhya->consultaQueryJson($sql);
        } catch (Exception $e) {
      
            echo '<div class="alert alert-danger" role="alert">'.
            '<span>'.'Erro ao executar a busca'.'</span>'.
            '</div>';
        } finally {
            $sankhya->deAutenthicate();
        }
        $html = '<div class="row row-cols-5 mt-4">';
        foreach($veiculosDentro as $key=>$veiculo){
            // if(!($key % 5)){
            //     $html .= '<div class="w-100"></div>';
            // }
            
            $html .= '<div class="col mb-4">';
            $html .=    '<div class="card h-100">';
            $html .=        '<div class="card-body continer-card">';
            $html .=            '<div class="card-text card-item-1">';
            $html .=                '<img draggable="false" src="/images/icons/boarding.png" alt="placa">';
            $html .=                '<p>'.$veiculo[1].'</p>'; //PLACA
            $html .=            '</div>';
            $html .=            '<div class="card-text card-item-1">';
            $html .=                '<img draggable="false" src="/images/icons/2_user.png" alt="placa">';
            $html .=                '<p>'.$veiculo[2].'</p>'; //NOME
            $html .=            '</div>';
            $html .=            '<div class="card-text card-item-1">';
            $html .=                '<img draggable="false" src="/images/icons/car.png" alt="placa">';
            $html .=                '<p>'.$veiculo[3].'  '.$veiculo[4].'</p>'; //MODELO, COR
            $html .=            '</div>';
            $html .=            '<div class="card-text card-item-1">';
            $html .=                '<img draggable="false" src="/images/icons/boarding.png" alt="placa">';
            $html .=                '<p>'.$veiculo[5].'</p>'; // DATA/HORA ENTRADA
            $html .=            '</div>';
            $html .=    '</div></div></div>';
            
        }
        $html .= '</div>';
        echo $html;


    // loadTemplateView('home' , ['veiculosDentro' => $veiculosDentro , 'exception' => $exception]);
    // $html .= '<div class="card-body">';
    // $html .= '<div class="continer-card>';
    // $html .= '<div class="col-md-2 col-2 mt-4">';
    // $html .=    '<div class="card card-1">';
    // $html .=        '<div class="card-item-1">';
    // $html .=            '<img draggable="false" src="/images/icons/boarding.png" alt="placa">';
    // $html .=            '<p>'.$veiculo[1].'</p>'; //PLACA
    // $html .=        '</div>';
    // $html .=        '<div class="card-item-1">';
    // $html .=            '<img draggable="false" src="/images/icons/2_user.png" alt="placa">';
    // $html .=            '<p>'.$veiculo[2].'</p>'; //NOME
    // $html .=        '</div>';
    // $html .=        '<div class="card-item-1">';
    // $html .=            '<img draggable="false" src="/images/icons/car.png" alt="placa">';
    // $html .=            '<p>'.$veiculo[3].'  '.$veiculo[4].'</p>'; //MODELO, COR
    // $html .=        '</div>';
    // $html .=        '<div class="card-item-1">';
    // $html .=            '<img draggable="false" src="/images/icons/boarding.png" alt="placa">';
    // $html .=            '<p>'.$veiculo[5].'</p>'; // DATA/HORA ENTRADA
    // $html .=        '</div>';
    // $html .=    '</div></div></div></div>';
    
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
        $sql = "SELECT  IDVEICULO, 
                        PLACA, 
                        NOME, 
                        MODELO, 
                        COR,
                        DCRSETOR,
                        GARAGEM,
                        FORNECEDOR
                        FROM AD_VEICULOSFUNC"; //  WHERE FORNECEDOR = 'S'"
        $veiculosCadastrados = $sankhya->consultaQueryJson($sql);
       
        } catch (Exception $e) {
         $exception = "Erro ao executar a busca!";
        } finally {
        $sankhya->deAutenthicate();
        }

       

        $html .=    '<div class="mt-5" style="width:100%; height:350px; overflow:auto;">';
        $html .=    '<table class="table overflow-scroll-gradient" cellspacing="0" cellpadding="1" width="300">';
        $html .=    '<thead class="thead-dark">';
        $html .=    '<tr>';
        $html .=    '<th scope="col">Placa</th>';
        $html .=    '<th scope="col">Colaborador</th>';
        $html .=    '<th scope="col" class="veiculo">Veiculo</th>';
        $html .=    '<th scope="col">Acesso Garagem</th>';
        $html .=    '<th scope="col">Fornecedor</th>';
        $html .=    '<th scope="col">Ações</th>';
        $html .=    '</tr>';
        $html .=    '</thead>';
        $html .=    '<tbody class="table-body">';
        
        foreach($veiculosCadastrados as $key=>$veiculo){
       
        $html .=    '<tr>';
        $html .=    '<td>'. $veiculo[1].'</td>';
        $html .=    '<td>'. $veiculo[2]. '</td>';
        $html .=    '<td  class="veiculo">'. $veiculo[3]. ' - ' . $veiculo[4] .'</td>';
        $html .=    '<td>'. (isset($veiculo[6]) ?  'Sim' : 'Não').'</td>';
        $html .=    '<td>'. (isset($veiculo[7]) ?  'Sim' : 'Não').'</td>';

        $acao1 =    'exibeModalCadastro(';
        $acao1 .=   '\''.$veiculo[0].'\',';   //IDVEICULO
        $acao1 .=   '\''.$veiculo[1].'\',';   //PLACA
        $acao1 .=   '\''.$veiculo[2].'\',';   //NOME
        $acao1 .=   '\''.$veiculo[3].'\',';   //MODELO
        $acao1 .=   '\''.$veiculo[4].'\',';   //COR
        $acao1 .=   '\''.$veiculo[5].'\',';   //DCRSETOR
        $acao1 .=   '\''.$veiculo[6].'\',';   //GARAGEM
        $acao1 .=   '\''.$veiculo[7].'\');';  //FORNECEDOR  
            
        $html .=    '<td><button type="button" onclick="'.$acao1.'" class="btn btn-primary">Editar</button></td>';
        $html .=    '</tr>';
        
    }

        $html .=    '</tbody>';
        $html .=    '</table>';
        $html .=    '</div>';
        
        echo $html;


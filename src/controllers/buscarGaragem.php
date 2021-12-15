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
                            format(garagem.DH_ENT, 'yyyy-MM-dd HH:mm:ss') as dataE,
                            garagem.ID,
                            u.NOMEUSU
                            FROM AD_VEICULOSFUNCGARAGEM garagem 
                            INNER JOIN AD_VEICULOSFUNC vf on (garagem.IDVEICULO = vf.IDVEICULO) 
                            INNER JOIN TSIUSU u on (u.CODUSU = garagem.CODUSUENT)
                            WHERE garagem.DH_SAI IS NULL 
                            ORDER BY garagem.IDVEICULO ASC";
        
            $veiculosDentro = $sankhya->consultaQueryJson($sql);
        
          } catch (Exception $e) {
      
          $exception = "Erro ao executar a busca!";

        } finally {
            $sankhya->deAutenthicate();
        }
       

        $html .= '<div style="width:100%; height:350px; overflow:auto; ">';
        $html .= '<table class="table overflow-scroll-gradient" cellspacing="0" cellpadding="1" width="300">';
        $html .= '<thead class="thead-dark">';
        $html .= '<tr>';
        $html .= '<th scope="col">Placa</th>';
        $html .= '<th scope="col">Colaborador</th>';
        $html .= '<th scope="col">Veiculo</th>';
        $html .= '<th scope="col">Entrada</th>';
        $html .= '<th scope="col">Autorizador</th>';
        $html .= '<th scope="col">Ações</th>';
        $html .= '</tr>';
        $html .= '</thead>';

        $html .= '<tbody class="table-body">';
        foreach($veiculosDentro as $key=>$veiculo){

            $dataE = new DateTime($veiculo[5]);
           // echo($veiculo[5]);
        
            $html .=  '<tr>';
            $html .=  '<td>'. $veiculo[1] .'</td>';
            $html .=  '<td>'. $veiculo[2] . '</td>';
            $html .=  '<td>'. $veiculo[3]. ' - ' . $veiculo[4] .'</td>';
            $html .=  '<td>'. $dataE->format('d/m/Y H:i:s') .'</td>';
            $html .=  '<td>'. $veiculo[7].'</td>';

            $acao1 = 'exibeModalSaida(';
            $acao1 .= '\''.$veiculo[3]. ' - ' . $veiculo[4].'\',';
            $acao1 .= '\''.$veiculo[2].'\',';
            $acao1 .= '\''.$veiculo[1].'\',';
            $acao1 .= '\''.$dataE->format('d/m/Y H:i:s').'\',';
            $acao1 .= '\''.$veiculo[6].'\');';
            
            $html .=  '<td><button type="button" onclick="'.$acao1.'" class="btn btn-danger">Sair</button></td>';
            $html .=  '</tr>';
        }

        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';
        
        echo $html;


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
       

        $html .= '<div style="width:100%; height:350px; overflow:auto; ">';
        $html .= '<table class="table overflow-scroll-gradient" cellspacing="0" cellpadding="1" width="300">';
        $html .= '<thead class="thead-dark">';
        $html .= '<tr>';
        $html .= '<th scope="col">Placa</th>';
        $html .= '<th scope="col">Colaborador</th>';
        $html .= '<th scope="col">Veiculo</th>';
        $html .= '<th scope="col">Entrada</th>';
        $html .= '<th scope="col">Ações</th>';
        $html .= '</tr>';
        $html .= '</thead>';

        $html .= '<tbody class="table-body">';
        foreach($veiculosDentro as $key=>$veiculo){

            $dataE = new DateTime($veiculo[5]);
        
            $html .=  '<tr>';
            $html .=  '<td>'. $veiculo[1] .'</td>';
            $html .=  '<td>'. $veiculo[2] . '</td>';
            $html .=  '<td>'. $veiculo[3]. ' - ' . $veiculo[4] .'</td>';
            $html .=  '<td>'. $dataE->format('d/m/Y H:i:s') .'</td>';
            $html .=  '<td><button class="btn btn-danger" type=""button">Saida</button></td>';
            $html .=  '</tr>';
        }

        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';
        
        echo $html;


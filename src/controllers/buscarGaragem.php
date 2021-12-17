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

            $html .= '<div style="height:350px; ">';
            $html .= '<table class="table table-condensed" id="tabelaEstacionamento">';
            $html .= '<thead class="thead-dark">';
            $html .= '<tr>';
            $html .= '<th scope="col">Placa</th>';
            $html .= '<th class="testeTB ">Colaborador</th>';
            $html .= '<th class="veiculo ">Veiculo</th>';
            $html .= '<th class="testeTB ">Entrada</th>';
            $html .= '<th class="autorizador ">Autorizador</th>';
            $html .= '<th class="testeTB ">Ações</th>';
            $html .= '</tr>';
            $html .= '<tr>';
            $html .= '<th class="testeTB"></th>';
            $html .= '<th class="testeTB"></th>';
            $html .= '<th class="veiculo"></th>';
            $html .= '<th class="testeTB"></th>';
            $html .= '<th class="autorizador"></th>';
            $html .= '<th class="testeTB"></th>';
            $html .= '</tr>';
            $html .= '</thead>';

            $html .= '<tbody class="table-body">';
            foreach($veiculosDentro as $key=>$veiculo){

            $dataE = new DateTime($veiculo[5]);
        
            $html .=  '<tr>';
            $html .=  '<td class="placa">'. $veiculo[1] .'</td>';
            $html .=  '<td class="colaborador testeTB">'. $veiculo[2] . '</td>';
            $html .=  '<td class="veiculo testeTB">'. $veiculo[3]. ' - ' . $veiculo[4] .'</td>';
            $html .=  '<td class="entrada testeTB">'. $dataE->format('d/m/Y H:i:s') .'</td>';
            $html .=  '<td class="autorizador testeTB">'. $veiculo[7].'</td>';

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
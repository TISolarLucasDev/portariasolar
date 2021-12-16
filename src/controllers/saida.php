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
        
    $key = $_POST['key'];
       

    try {
            
        $sankhya = new Sankhya();
        $login = $sankhya->autenthicate($userLogin, $userPassword);
        $resultQueryInsertion = $sankhya->insertSaidaQueryJson($key, $DH_SAI, $CODUSUSAI); //  ID, DH_SAI, CODUSUSAI

        $exception = "Saída Autorizada com sucesso!";

        } catch (Exception $e) {
            
        $exception = "Erro ao executar a inserção!";
        echo $e->getMessage();

        } finally {
        $sankhya->deAutenthicate();
        }
    }

    loadTemplateView('home' , ['exception' => $exception ]);
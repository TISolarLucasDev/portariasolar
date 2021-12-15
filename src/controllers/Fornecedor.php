<?php

loadModel('Sankhya');
session_start();
requireValidSession();

$exception = null;
        
$userLogin =  $_SESSION['login'];
$userPassword  = $_SESSION['password'];


if(count($_POST) > 0){
    $placa      = $_POST['placa'];
    $nome       = $_POST['nome'];
    $modelo     = $_POST['modelo'];
    $cor        = $_POST['cor'];
    $dcrsetor   = $_POST['dcrsetor'];
    $key        = null;
    if($_POST['keyEditar']){
        $key = $_POST['keyEditar'];
    }
    // var_dump($key);
    

    $acesso = null;
    $fornece = null;

    if (isset($_POST['fornecedor'])) {
        $fornece = 'S';
    }else{
        $fornece = 'N';
    }

    if (isset($_POST['garagem'])) {
        $acesso = 'S';
    }else{
        $acesso = 'N';
    }

    try {
    
        $sankhya = new Sankhya();
        $sankhya->autenthicate($userLogin, $userPassword);
        
        $newVeiculo = $sankhya->insertEditVeiculoJson(
            $placa,     
            $nome,       
            $acesso,    
            $modelo,    
            $cor,       
            $fornece, 
            $dcrsetor,
            $key
        );

    $exception = "Veiculo Cadastrado com Sucesso!";

    } catch (Exception $e) {
        
    $exception = "Erro no cadastro de Veiculo!";  
    }finally {
        $sankhya->deAutenthicate();
    }

}


loadTemplateView('Fornecedor',['exception' => $exception]);
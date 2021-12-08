<?php

loadModel('Sankhya');

session_start();


if(count($_POST) > 0){

$userLogin = $_POST['login'];
$passwordLogin = $_POST['senha'];

    $login = new Sankhya();
    try {

      $sql = "Select CODUSU, CODEMP, NOMEUSU , ISNULL(AD_PORTARIA,'N')
             as PORTARIA  from TSIUSU WHERE NOMEUSU = '{$userLogin}' ";

        $user = $login->autenthicate($userLogin , $passwordLogin);
        $valide = $login->consultaQueryJson($sql);
        
        $_SESSION['login'] = $userLogin ;
        $_SESSION['password'] = $passwordLogin;
       
        $_SESSION['DbValidation'] = $valide;
       

         header('Location: home.php');

    
      } catch (Exception $e) {

        echo '<div class="alert alert-danger" role="alert">'.
        '<span id="nomeFuncionario">'.'Usuário/Senha inválido'.'</span>'.
        '</div>';

      //echo "Error: " . $e->getMessage();
    }
}

loadView('Login');
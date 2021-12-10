<?php

loadModel('Sankhya');

session_start();

$exception = null;

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


        // var_dump($_SESSION['DbValidation'] );

        if($_SESSION['DbValidation'][0][3] == "S"){
          header('Location: home.php');
        } else {

          $exception = 'Usuário sem permissão de acesso!';
        }
    
      } catch (Exception $e) {

        $exception = 'Usuário/Senha inválido!';
    }
}

loadView('Login' , ['exception' => $exception]);
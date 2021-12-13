<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="images/icons/fav.ico" />

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->

    <!--===============================================================================================-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
     integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">


    <title>Portaria Solar</title>
</head>

<body class="hide-sidebar">

    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100">
                <form class="login100-form validate-form" action="" method="post">

                    <span class="login100-form-title p-b-26">
                        <img src="images/Logo.png"></src>
                    </span>

                     <?php if($exception) : ?>
                        <div class="alert alert-danger" role="alert">
                         <?= $exception ?>
                        </div>
                       <?php endif; ?>
                
                    <div class="wrap-input100 validate-input" data-validate="Login inválido">
                        <input class="input100" type="text" name="login">
                        <span class="focus-input100" data-placeholder="Login"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password inválido">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="senha">
                        <span class="focus-input100" data-placeholder="Senha"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>


</body>

</html>
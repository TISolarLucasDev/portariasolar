<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="images/icons/fav.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
     crossorigin="anonymous">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <link rel="stylesheet" href="css/template.css">

    <title>Portaria Solar</title>
</head>
<body>
    <header class="header">
    <div class="logo">
            <img src="/images/Logo.png" alt="Logo">
        </div>
        <div class="menu-toggle">
            <img src="images/icons/menu.png" alt="menu">
        </div>

        <div class="spacer"></div>

        <div class="User-info">
           <img src="images/icons/user.png" alt="User">
            <h6><?=$_SESSION['login'] ?></h6>
        </div>
    </header>
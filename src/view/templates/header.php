<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="images/icons/fav.ico" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">



    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/template.css">

    <title>Portaria Solar</title>
</head>

<body>
    <header class="header">

        <div class="logo">
            <a href="home.php">
                <img draggable="false" src="/images/Logo.png" alt="Logo">
            </a>
        </div>

        <div class="menu-toggle">
            <img draggable="false" src="images/icons/menu.png" alt="menu">
        </div>

        <div class="spacer"></div>

        <div class="User-info">
            <div class="image_Backgound">
                <img draggable="false" src="images/apple-con.png" alt="User">
            </div>
            <h6><?=$_SESSION['login'] ?></h6>
        </div>
    </header>
<!DOCTYPE html>
<html>
<head>
    <title>www.Galería.es</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="fotos/icono.jpg" type="image/png" />
    <script type="text/javascript" src="javascript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
<!--nav-->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <!-- Brand/logo -->
    <a class="navbar-brand bg-dark p-3 rounded" style="opacity: 0.4;" href="../index.php">Truki Gallery</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="index.php?page=login">Administrar<a>
        </li>
    </ul>
    </nav>
<br>
<br>
<br>
<br>
<br>
<?php
    $page = $_GET['page'];
    switch ($page) {
        case 'login':
            include "includes/login.inc.php";
            break;
        
        case 'new':
            include "includes/new.inc.php";
            break;
    }
    

?>

<br>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p></p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
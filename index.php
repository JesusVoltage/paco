<!DOCTYPE html>
<html>
<head>
    <title>www.Galería.es</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin/style.css">
    <link rel="shortcut icon" href="fotos/icono.jpg" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php

include "common/utils.php";
include "common/config.php";
include "common/mysql.php";

/*include "includes/config.php";

debug ( $config);*/


# conectamos con la base de datos
$connection = Connect( $config['database']);

$sql  = "select * from imagen order by id desc";

$rows = ExecuteQuery( $sql, $connection);

Close( $connection);


?>
<!--nav-->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <!-- Brand/logo -->
    <a class="navbar-brand bg-dark p-3 rounded" style="opacity: 0.4;" href="#">Truki Gallery</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="admin/index.php?page=login">Administrar<a>
        </li>
    </ul>
    </nav>


<!--Imagen-->
<br>
<br>
<br>
<br>
<div class="container desenfoque p-3 rounded">
    <div class="row">
    <?php

        foreach ( $rows as $row ) 
        {
            echo    '<div class="altura p-3 text-center col-lg-3 col-md-4 col-xs-6 thumb">
                        <img class="img-fluid" src="media/img/'.$row['file'].'">
                    </div>';
        }

    ?>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</footer>


</body>
</html>
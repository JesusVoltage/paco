<!DOCTYPE html>
<html lang="en">

<head>
    <title>www.Galería.es</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="fotos/icono.jpg" type="image/png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


      <?php

        include "includes/menu.php";
        
        $page = $_GET['page'];

        switch ( $page) 
        {
          case 'listado':
            include "actions/listado.act.php";
            include "includes/listado.inc.php";
            break;

          case 'autores':
            include "includes/listado_autores.inc.php";
            break;

          case 'new':
            include "includes/new_foto.inc.php";
            break;

          case 'edit':
            include "includes/edit_foto.inc.php";
            break;
          
          default:
            # code...
            break;
        }

      ?>
    


        <hr>
        <?php
          include "includes/footer.inc.php";
        ?>

</body>

</html>

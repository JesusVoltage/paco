<?php

include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

# conectamos con la base de datos
$connection = Connect( $config['database']);

$sql  = "select * from autor order by name asc";

$rows = ExecuteQuery( $sql, $connection);

?>


<script type="text/javascript">
  
  function delete_post( id)
  {
    var ok = confirm( "¿ Seguro de borrar este autor ? ");
    if ( !ok)
    {
      return false;
    }
    else
    {
      location.href = "delete.php?page=autores&id=" + id;
    }
  }

</script>

<!--New page content-->
<div class="container text-dark mt-4 rounded desenfoque">
    <div class="row">

      <div class="col-sm-10 offset-sm-1 text-lett">
        <h2 class="mt-5">Listado de fotos</h2>
      </div>
  
    </div>
    <div class="row my-3">

      <div class="col-sm-10 offset-sm-1 text-lett">
        <a class="btn btn-lg btn-dark" href="home.php?page=new">Nueva foto</a>
      </div>
  
    </div>

    <div class="row cuadro_listado_fotos">
      <div class="col-sm-10 offset-sm-1">

        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Creado</th>
              <th class="text-center" scope="col">Activo</th>
              <th class="text-center" scope="col">Eliminar</th>
            </tr>
            </tr>
          </thead>
          <tbody>
            <?php

              foreach ( $rows as $row) 
              {

                if ( $row['enabled'] == "1")
                {
                  $enabled = "<i class='text-center white fa fa-check-square'></i>";
                }
                else
                {
                    $enabled = "<i class='text-center white fa fa-times'></i>";
                }


                echo '
                  <td>'.$row['id'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.date( "d/m/Y H:s:i", strtotime( $row['created'])).'</td>
                  <td class="text-center">'.$enabled.'</td>
                  
                  <td class="text-center" ><a href="#" OnClick="delete_post('.$row['id'].')"<i class="white fa fa-ban"></i></a></td>
                  </tr>
                ';  
              }
            ?>


          </tbody>
        </table>

      </div>
    </div>
    
  </div>
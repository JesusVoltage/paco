<script type="text/javascript">
  
  function delete_post( id)
  {
    var ok = confirm( "¿ Seguro de borrar esta imagen ? ");
    if ( !ok)
    {
      return false;
    }
    else
    {
      location.href = "delete.php?page=listado&id=" + id;
    }
  }

</script>

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

        <table class="table table-dark desenfoque no-border">
          <thead class="no-border">
            <tr class="no-border">
              <th scope="col">#</th>
              <th scope="col">Nombre autor</th>
              <th scope="col">Fichero</th>
              <th scope="col">Creado</th>
              <th class="text-center" scope="col">Activo</th>
              <th class="text-center" scope="col">Editar</th>
              <th class="text-center" scope="col">Eliminar</th>
            </tr>
            </tr>
          </thead>
          <tbody>
            <?php

              if ( !empty( $rows))
              {


              foreach ( $rows as $row) 
              {


                if ( $row['enabled'] == "1")
                {
                  $enabled = '<i class="fa fa-check"></i>';
                }
                else
                {
                  $enabled = '<i class="fa fa-check"></i>';
                }

                echo '
                  <td>'.$row['id'].'</td>
                  <td>'.$row['autor'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.date( "d/m/Y H:s:i", strtotime( $row['created'])).'</td>
                  <td class="text-center">'.$enabled.'</td>
                  <td class="text-center"><a href="home.php?page=edit&id='.$row['id'].'"><i class="white fa fa-pencil"></i></a></td>
                  <td class="text-center" ><a href="#" OnClick="delete_post('.$row['id'].')"><i class="white fa fa-trash"></i></a></td>
                  </tr>
                ';  
              }
              }
              else
              {
                echo "<tr><td colspan=7> No hay registros</td></tr>";
              }
            ?>


          </tbody>
        </table>

      </div>
    </div>
    
  </div>

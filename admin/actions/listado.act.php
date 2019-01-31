<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

   # conectamos con la base de datos
  $connection = Connect( $config['database']);

  # Buscamos todas las imagenes ordenadas por orden de inserccion
  $sql ="select a.*,a.name as autor, b.* from autor a, imagen b where b.id_autor = a.id";
  /*$sql  = "select a.*, b.name as autor
        from imagen as a
        inner join autor as b On a.id = b.id
        order by a.id desc";*/
        
  $rows = ExecuteQuery( $sql, $connection);

  //debug ( $rows);
  Close( $connection);

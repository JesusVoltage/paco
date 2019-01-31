<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

/*
  debug ( $_POST);
  debug ( $_FILES);
*/

  # Recogemos los parametros que nos pasan por POST
  $id_autor =  $_POST['id_autor'];
  $name =  $_POST['name'];
  $text = $_POST['text'];

  move_uploaded_file( $_FILES["file"]["tmp_name"], "../../media/img/" . $_FILES["file"]["name"]);

  $fichero = $_FILES["file"]["name"];

  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  $sql  = "insert into imagen( id_autor, name, file, text) values( ".$id_autor.", '".$name."', '".$fichero."', '".$text."')";

  $return = Execute( $sql, $connection);

  Close( $connection);

  header ( "location: ../home.php?page=listado");
<?php

  include  dirname( dirname( __FILE__)) . "/common/utils.php";
  include  dirname( dirname( __FILE__)) . "/common/config.php";
  include  dirname( dirname( __FILE__)) . "/common/mysql.php";

  $page = $_GET['page'];
  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  if ( $page == 'listado')
  {
    $sql  = "delete from imagen where id = " . $_GET['id'];
  }
  else
  {
    $sql  = "delete from autor where id = " . $_GET['id'];
  }

  $return = Execute( $sql, $connection);

  Close( $connection);

  header( "location: home.php?page=" . $page);
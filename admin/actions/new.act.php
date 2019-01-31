<?php

    include "../../common/utils.php";
    include "../../common/mysql.php";
    include "../../common/config.php";

//debug($_POST);

$display_name = $_POST['display_name'];
$email = $_POST['email'];
$password = md5( $_POST['password'] );

if(isset($_POST['enabled']))
{
    $enabled = 1;
}else{
    $enabled = 0; 
}

//conectamos con la base de datos
$connection = Connect($config['database']);

$sql  = "insert into autor( name, email, password, enabled) values( '".$display_name."', '".$email."', '".$password."', ".$enabled.")";

$return = Execute($sql, $connection);

Close($connection);

header ( "location: ../home.php");

?>
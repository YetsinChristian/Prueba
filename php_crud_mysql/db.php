<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);
/* para comprobar que si hay conexion a la bd
if(isset($conn)){
    echo 'db is connected';
}*/

#iniciar sesion para guardar datos
session_start();

?>
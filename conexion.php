<?php

$servidor="localhost";
$usuario="root";
$password="";

//crear una variable para la conexion
$conn=mysqli_connect($servidor,$usuario,$password);

// provar la conexion
if(!$conn)
{
    die("error al realizar la conexion".mysqli_connect_error());

}

echo "Mi nombre es  Carlos Daniel Gonzalez Alvarez y mi conexion que realice el test entre Mysql y Php fue realizada exitosamente";
?>
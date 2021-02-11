<?php 
//comando que utiliza 4 informações
$servidor = "localhost";
$usuario = "root";
$senhabanco = "root";
$bancodados = "db_clientes";

$conn = mysqli_connect($servidor, $usuario, $senhabanco, $bancodados);

//checa conexão
if  (mysqli_connect_errno()){
    echo "Falha na conexão com o servidor Mysql: " . mysqli_connect_error();
}
$conn->set_charset("utf-8");

?>
<?php

$host = "localhost";
$user = "judsonpaiva";
$password = "12345";
$bd = "learning_php";


$conn = new mysqli($host, $user, $password, $bd);

if($conn->connect_errno){
    echo "Erro na conexao <br>";
    echo mysqli_connect_error();
}
<?php

$host = "localhost";
$user = "judsonpaiva";
$password = "12345";
$bd = "learning_php";


$conn = new mysqli($host, $user, $password, $bd);






function select(){
    global $conn;
    $sql = "SELECT * FROM itens";
    $result = $conn->query($sql);
    echo "<pre>";
    print_r($result);
}


<?php

$host = "localhost";
$user = "judsonpaiva";
$password = "12345";
$bd = "learning_php";


$conn = new mysqli($host, $user, $password, $bd);

echo "<pre>";


function selectOne(){
    global $conn;
    $id = 2;

    $sql = "SELECT * FROM itens WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $dados = $result->fetch_row();

    print_r($dados);
}

function select(){
    global $conn;
    $id = 2;

    $sql = "SELECT * FROM itens WHERE id > ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $dados = $result->fetch_all();

    print_r($dados);

}


function insert($nome, $descricao){
    global $conn;
    $id = 4;
    $sql = "INSERT INTO itens (id, nome, descricao) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $id, $nome, $descricao);
    $stmt->execute();
}

// insert("Suporte de microfone", "Suporte fabricado na China");

// select();

selectOne();
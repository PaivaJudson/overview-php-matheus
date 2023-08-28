<?php

$host = "localhost";
$user = "judsonpaiva";
$password = "12345";
$bd = "learning_php";

$conn = new PDO("mysql:host=$host;dbname=$bd", $user, $password);

echo "<pre>";

function insert($id, $nome, $descricao){
    global $conn;

    $sql = "INSERT INTO itens (id, nome, descricao) VALUES (:id, :nome, :descricao)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();
}

function select($id){

    global $conn;
    $sql = "SELECT * FROM itens WHERE id > :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    // $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($data);


    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($itens);

}


select(2);

// insert(5, "Chavena", "Item fabricado em Angola");
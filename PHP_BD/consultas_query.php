<?php

$host = "localhost";
$user = "judsonpaiva";
$password = "12345";
$bd = "learning_php";


$conn = new mysqli($host, $user, $password, $bd);

echo "<pre>";

select();

// insert(3, "MackBook Pro", "Computador fabricado nos EUA pela Apple");

function insert($codigo, $nome, $descricao){
    
    global $conn;
    $sql = "INSERT INTO itens(id, nome, descricao) VALUES($codigo, '$nome', '$descricao')";
    $result = $conn->query($sql);

    if (isset($result)) {
        echo "Dados inseridos com sucesso";
    }
}


function drop(){
    global $conn;
    $sql = "DROP TABLE teste";
    $result = $conn->query($sql);

    if (isset($result)) {
        echo "Tabela ELIMINADA com sucesso";
    }
}

function create(){
    global $conn;
    $sql = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
    $result = $conn->query($sql);

    if(isset($result)){
        echo "Tabela criada com sucesso";
    }

    $conn->close();
}

function select(){
    global $conn;
    $sql = "SELECT * FROM itens";
    $result = $conn->query($sql);
    $itens = $result->fetch_all();
    print_r($itens);
}


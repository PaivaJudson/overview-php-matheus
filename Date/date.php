<?php
date_default_timezone_set("Africa/Luanda");
$dataAtual1 = date("d/m/y");
$dataAtual2 = date("D/M/Y");
$dataHora = date("D/M/Y H:i:s");

echo $dataAtual1 . "<br>";
echo $dataAtual1 . "<br>";
echo $dataHora . "<br>";

$dataEspecifica = "03-08-2023";

echo strtotime($dataEspecifica);
echo "<br> ".date("l", strtotime($dataEspecifica)) . "<br>";


$data = mktime(0, 0, 0, 05, 12, 1994);
$dataFormatada = date("d - M - Y", $data);

echo $dataFormatada . "<br>";

$dataAtual = new DateTime();
// echo "Data Actual: " .$dataAtual; // nao se consegue aceder normalmente a data...
print_r($dataAtual);
echo "<br>";
echo $dataAtual->format("d-M-Y") . "<br>";

// definindo datas

$data = new DateTime();
$data->setDate(1994, 05, 12);
$data->setTime(07, 30, 05);
echo $data->format("d/m/Y") . "<br>";
echo "<pre>";
print_r($data);



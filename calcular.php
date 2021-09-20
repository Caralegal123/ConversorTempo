<?php

$num = $_POST['num'];
$op = $_POST['operacao'];

require_once 'operacoes.php';

$operacoes = new Tempo();

$operacoes->setTempo($num);

switch ($op){
    case "minutos":
        $operacoes->minutos();
    break;
    case "horas":
        $operacoes->horas();
    break;
    case "dias":
        $operacoes->dias();
    break;
    case "semanas":
        $operacoes->semanas();
    break;
    default: echo "Nenhuma operação reconhecida";
}

echo "O resultado da conversão de segundos em $op é: " . $operacoes->getTotal();
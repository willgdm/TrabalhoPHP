<?php

if (session_status() === PHP_SESSION_NONE) session_start();

$personagens_padrao = [
    [
        "id" => "1",
        "nome" => "Cleópatra",
        "ocupacao" => "Rainha do Egito",
        "nascimento" => "02/01/-69",
        "falecimento" => "12/08/-30",
        "descricao" => "Cleópatra foi a última faraó ativa do Egito e conhecida por sua inteligência, beleza e influência política.",
        "imagem" => "images/cleopatra.jpg",
        "nacionalidade" => "Egípcia"
    ],
    [
        "id" => "2",
        "nome" => "Napoleão Bonaparte",
        "ocupacao" => "Imperador",
        "nascimento" => "15/08/1769",
        "falecimento" => "05/05/1821",
        "descricao" => "Napoleão foi um líder militar e político francês que teve um papel decisivo na história da Europa no século XIX.",
        "imagem" => "images/napoleao.jpg",
        "nacionalidade" => "Francês"
    ]
];

$personagens = $personagens_padrao;
if (isset($_SESSION["novos_personagens"])) {
    $personagens = array_merge($personagens_padrao, $_SESSION["novos_personagens"]);
}
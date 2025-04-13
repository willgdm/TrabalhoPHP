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
    ],
    [
        "id" => "3",
        "nome" => "Albert Einstein",
        "ocupacao" => "Físico Teórico",
        "nascimento" => "14/03/1879",
        "falecimento" => "18/04/1955",
        "descricao" => "Einstein revolucionou a física com a teoria da relatividade e é considerado um dos cientistas mais influentes da história.",
        "imagem" => "images/einstein.png",
        "nacionalidade" => "Alemão"
    ],
    [
        "id" => "4",
        "nome" => "Joana d'Arc",
        "ocupacao" => "Heroína Militar",
        "nascimento" => "06/01/1412",
        "falecimento" => "30/05/1431",
        "descricao" => "Joana d'Arc liderou o exército francês durante a Guerra dos Cem Anos e foi canonizada como santa.",
        "imagem" => "images/joana.png",
        "nacionalidade" => "Francesa"
    ],
    [
        "id" => "5",
        "nome" => "Leonardo da Vinci",
        "ocupacao" => "Artista e Inventor",
        "nascimento" => "15/04/1452",
        "falecimento" => "02/05/1519",
        "descricao" => "Leonardo da Vinci foi um gênio do Renascimento, autor de obras como Mona Lisa e inventor de inúmeras engenhocas.",
        "imagem" => "images/davinci.png",
        "nacionalidade" => "Italiano"
    ],
    [
        "id" => "6",
        "nome" => "Martin Luther King Jr.",
        "ocupacao" => "Líder dos Direitos Civis",
        "nascimento" => "15/01/1929",
        "falecimento" => "04/04/1968",
        "descricao" => "Martin Luther King Jr. foi uma figura central na luta pelos direitos civis dos afro-americanos nos Estados Unidos.",
        "imagem" => "images/mlk.png",
        "nacionalidade" => "Americano"
    ],
    [
        "id" => "7",
        "nome" => "Mahatma Gandhi",
        "ocupacao" => "Líder Político e Espiritual",
        "nascimento" => "02/10/1869",
        "falecimento" => "30/01/1948",
        "descricao" => "Gandhi liderou o movimento de independência da Índia com métodos pacifistas e não violentos.",
        "imagem" => "images/gandhi.png",
        "nacionalidade" => "Indiano"
    ],
    [
        "id" => "8",
        "nome" => "Isaac Newton",
        "ocupacao" => "Físico e Matemático",
        "nascimento" => "04/01/1643",
        "falecimento" => "31/03/1727",
        "descricao" => "Newton foi um dos maiores cientistas da história, conhecido por suas leis da gravitação universal.",
        "imagem" => "images/newton.png",
        "nacionalidade" => "Britânico"
    ],
    [
        "id" => "9",
        "nome" => "Maria Quitéria",
        "ocupacao" => "Heroína Militar",
        "nascimento" => "27/07/1792",
        "falecimento" => "21/08/1853",
        "descricao" => "Maria Quitéria foi uma das primeiras mulheres a lutar no exército brasileiro durante a independência.",
        "imagem" => "images/mariaquiteria.png",
        "nacionalidade" => "Brasileira"
    ],
    [
        "id" => "10",
        "nome" => "Abraham Lincoln",
        "ocupacao" => "Presidente",
        "nascimento" => "12/02/1809",
        "falecimento" => "15/04/1865",
        "descricao" => "Lincoln foi o 16º presidente dos Estados Unidos e liderou o país durante a Guerra Civil, abolindo a escravidão.",
        "imagem" => "images/lincoln.png",
        "nacionalidade" => "Americano"
    ]
];

$personagens = $personagens_padrao;
if (isset($_SESSION["novos_personagens"])) {
    $personagens = array_merge($personagens_padrao, $_SESSION["novos_personagens"]);
}
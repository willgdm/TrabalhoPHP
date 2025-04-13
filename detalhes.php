<?php
include "dados.php";
require_once "funcoes.php";
if (!isset($_GET["id"])) die("ID não fornecido");

foreach ($personagens as $pessoa) {
    if ($pessoa["id"] == $_GET["id"]) {
        $personagem = $pessoa;
        break;
    }
}
if (!isset($personagem)) die("Personagem não encontrado");

$tituloPagina = $personagem["nome"];
include "auxiliares/cabecalho.php";
?>
<h1 class="text-center mb-4"><?= $personagem["nome"] ?></h1>

<div class="text-center mb-4">
    <img src="<?= $personagem["imagem"] ?>" class="img-detalhe" alt="Imagem de <?= $personagem["nome"] ?>">
</div>

<div class="mb-4">
    <p><strong>Ocupação:</strong> <?= $personagem["ocupacao"] ?></p>
    <p><strong>Nascimento:</strong> <?= $personagem["nascimento"] ?></p>
    <p><strong>Falecimento:</strong> <?= $personagem["falecimento"] ?></p>
    <p><strong>Nacionalidade:</strong> <?= $personagem["nacionalidade"] ?></p>
    <p><strong>Descrição:</strong> <?= $personagem["descricao"] ?></p>
</div>

<a href="index.php" class="btn btn-secondary">Voltar</a>
</div></body></html>
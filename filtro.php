<?php

include_once "dados.php";

if (!isset($_GET["id"])) {
    die("ID não fornecido");
}

$personagem = buscar_personagem_por_id($_GET["id"], $personagens);

if (!$personagem) {
    die("Personagem não encontrado");
}
$tituloPagina = $personagem["nome"];
include "index.php";
?>
<h1><?= $personagem['nome'] ?></h1>
<img src="<?= $personagem['imagem'] ?>" class="img-fluid mb-3">
<p><strong>Ocupação:</strong> <?= $personagem['ocupacao'] ?></p>
<p><strong>Nascimento:</strong> <?= $personagem['nascimento'] ?></p>
<p><strong>Falecimento:</strong> <?= $personagem['falecimento'] ?></p>
<p><strong>Nacionalidade:</strong> <?= $personagem['nacionalidade'] ?></p>
<p><?= $personagem['descricao'] ?></p>
<a href="index.php" class="btn btn-secondary">Voltar</a>
</div></body></html>
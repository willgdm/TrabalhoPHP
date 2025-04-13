<?php
include "dados.php";
$tituloPagina = "Lista de Personagens";
include "auxiliares/cabecalho.php";
?>
<h1 class="mb-4">Lista de Personagens Históricos</h1>
<div class="row">
<?php
$filtro = strtolower($_GET['buscar'] ?? '');
$resultado = array_filter($personagens, function($p) use ($filtro) {
    return isset($p["nome"], $p["ocupacao"]) && (stripos($p["nome"], $filtro) !== false || stripos($p["ocupacao"], $filtro) !== false);
});
foreach ($resultado as $p): ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="<?= $p["imagem"] ?>" class="card-img-top" alt="Imagem de <?= $p["nome"] ?>">
            <div class="card-body">
                <h5 class="card-title text-dark"><?= $p["nome"] ?></h5>
                <p class="card-text text-dark"><?= $p["ocupacao"] ?></p>
                <a href="detalhes.php?id=<?= $p["id"] ?>" class="btn btn-primary">Ver mais</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php if (empty($resultado)): ?><p>Nenhum personagem encontrado.</p><?php endif; ?>
</div>
</div></body></html>
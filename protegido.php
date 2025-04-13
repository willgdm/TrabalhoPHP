<?php
include "dados.php";
require_once "funcoes.php";
if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = adicionar_personagem($_POST);
}
$tituloPagina = "Área Protegida";
include "auxiliares/cabecalho.php";
?>
<h1>Adicionar Novo Personagem Histórico</h1>
<?php if (isset($msg)) echo "<p class='alert alert-success'>".$msg."</p>"; ?>
<form method="post">
    <input type="text" name="nome" placeholder="Nome" class="form-control mb-2" required>
    <input type="text" name="ocupacao" placeholder="Ocupação" class="form-control mb-2" required>
    <input type="text" name="nascimento" placeholder="Data de nascimento (dd/mm/aaaa)" class="form-control mb-2" required>
    <input type="text" name="falecimento" placeholder="Data de falecimento (dd/mm/aaaa)" class="form-control mb-2">
    <input type="text" name="nacionalidade" placeholder="Nacionalidade" class="form-control mb-2" required>
    <textarea name="descricao" placeholder="Descrição" class="form-control mb-2" required></textarea>
    <input type="url" name="imagem" placeholder="URL da imagem" class="form-control mb-2">
    <button type="submit" class="btn btn-success">Cadastrar Personagem</button>
</form>
<a href="index.php" class="btn btn-secondary mt-3">Voltar ao Catálogo</a>
</div></body></html>
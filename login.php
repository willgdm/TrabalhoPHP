<?php
session_start();

if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
    header("Location: index.php");
    exit;
}

$erro = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"] ?? '';

    $usuario_correto = 'admin';
    $senha_hash = "$2y$10$9q1q2APSP.D3miBBE8HEZ.q6yf8isIX.RmqDhzklkLWCO4Zj.KH5S";

    if ($usuario === $usuario_correto && password_verify($senha, $senha_hash)) {
        $_SESSION["logado"] = true;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<?php 
$tituloPagina = "Login";
include "auxiliares/cabecalho.php"; 
?>

<div class="container mt-5">
    <h1>Login</h1>

    <?php if ($erro): ?>
        <div class="alert alert-danger"><?= $erro ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" name="usuario" id="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

</body>
</html>
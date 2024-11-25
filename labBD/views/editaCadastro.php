<?php
include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $_POST['id']) {
?>
<br/>
<div class="caixa">
    <h4 class="mb-4">Editar Experimento</h4>

    <!-- Voltar ao cadastro -->
    <a class="btn btn-secondary mb-4" href="?pagina=cadastros">
        <i class="bi bi-backspace"></i> Voltar
    </a>

    <!-- Formulário de Edição -->
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">

        <!-- Nome do Experimento -->
        <div class="mb-3">
            <label for="experimento" class="form-label">Experimento</label>
            <input type="text" class="form-control bg-dark text-light" id="experimento" name="experimento" value="<?php echo $linha['experimento']; ?>" required>
        </div>

        <!-- Resultado do Experimento -->
        <div class="mb-3">
            <label for="resultado" class="form-label">Resultado</label>
            <input type="text" class="form-control bg-dark text-light" id="resultado" name="resultado" value="<?php echo $linha['resultado']; ?>" required>
        </div>

        <!-- Botão Salvar -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php
    }
}
?>

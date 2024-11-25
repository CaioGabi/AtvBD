<br/>
<div class="caixa">
    <h4 class="mb-4">Novo Cadastro</h4>

    <!-- Botão Voltar -->
    <a class="btn btn-secondary mb-4" href="?pagina=cadastros">
        <i class="bi bi-backspace"></i> Voltar
    </a>

    <!-- Formulário de Cadastro -->
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <!-- Nome do Experimento -->
        <div class="mb-3">
            <label for="experimento" class="form-label">Experimento</label>
            <input type="text" class="form-control bg-dark text-light" id="experimento" name="experimento" placeholder="Digite o nome do experimento" required>
        </div>

        <!-- Resultado do Experimento -->
        <div class="mb-3">
            <label for="resultado" class="form-label">Resultado</label>
            <input type="text" class="form-control bg-dark text-light" id="resultado" name="resultado" placeholder="Digite o resultado">
        </div>

        <!-- Botão Cadastrar -->
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

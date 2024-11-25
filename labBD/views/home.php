<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Cadastro de Experimentos Científicos</title>
</head>

<body class="bg-dark text-light">

    <div class="container mt-5">
        <!-- Login -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-light shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Cadastro de Experimentos Científicos</h3>
                        <form method="post" action="login.php">
                            <div class="mb-3">
                                <label for="login" class="form-label">Login</label>
                                <input type="text" class="form-control bg-dark text-light border-light" id="login" name="usu_login" placeholder="Digite seu login" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control bg-dark text-light border-light" id="senha" name="usu_senha" placeholder="Digite sua senha" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                        <?php if (isset($_GET['erroLogin'])): ?>
                            <div id="erroLogin" class="alert alert-danger mt-3" role="alert">
                                Erro! Tente novamente.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim Login -->
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

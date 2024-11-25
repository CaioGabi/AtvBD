<br>
<style>

/* Cores claras para as informações de tabela */
.dataTables_wrapper .dataTables_info, 
.dataTables_wrapper .dataTables_length, 
.dataTables_wrapper .dataTables_filter, 
.dataTables_wrapper .dataTables_paginate {
    color: #f8f9fa !important;
}

/* Texto dos botões de navegação (Anterior, Próximo) */
.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #f8f9fa !important;
}

/* Hover */
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #495057 !important;
    color: #f8f9fa !important;
}

/* Cor clara para o campo de busca */
.dataTables_wrapper .dataTables_filter input {
    color: #f8f9fa !important;
    background-color: #343a40 !important;
    border: 1px solid #f8f9fa !important;
}

/* Cor clara para o menu de registros */
.dataTables_wrapper .dataTables_length select {
    color: #f8f9fa !important; 
    background-color: #343a40 !important;
    border: 1px solid #f8f9fa !important;
}

/* Botões de navegação com fundo escuro */
.dataTables_wrapper .dataTables_paginate .paginate_button {
    background-color: #343a40 !important;
    color: #f8f9fa !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #495057 !important;
    color: #f8f9fa !important;
}

</style>
<div class="caixa text-light">
    <h4 class="mb-4">Cadastro de Experimentos e seus Resultados</h4>

    <!-- Botão de Cadastro -->
    <a class="btn btn-primary mb-4" href="?pagina=novoCadastro">
        <i class="bi bi-plus"></i> Cadastrar Experimento
    </a>

    <!-- Tabela de Experimentos -->
    <div class="table-responsive">
        <table id="table_id" class="table table-bordered table-striped table-dark">
            <thead>
                <tr>
                    <th class="text-light">Experimento Realizado</th>
                    <th class="text-light">Resultado</th>
                    <th class="text-light">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr>';
                    echo '<td class="text-light" style="word-wrap: break-word">' . $linha['experimento'] . '</td>';
                    echo '<td class="text-light" style="word-wrap: break-word">' . $linha['resultado'] . '</td>';
                    echo '<td>
                            <div class="d-flex justify-content-center">
                                <div class="me-2">
                                    <form method="post" action="?pagina=editaCadastro">
                                        <input type="hidden" name="id" value="' . $linha['id'] . '">
                                        <button type="submit" class="btn btn-outline-success">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <form method="post" action="deletaCadastro.php">
                                        <input type="hidden" name="id" value="' . $linha['id'] . '">
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i> Deletar
                                        </button>
                                    </form>
                                </div>
                            </div>
                          </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

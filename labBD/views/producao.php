<br/>
<div class="caixa text-light">
    <!-- Título principal -->
    <h4 class="mb-4">Conheça o LabBD: Gerencie Seus Experimentes com Eficiência</h4>

    <!-- Descrição do LabBD com fundo escuro -->
    <div class="p-3 bg-dark text-secondary border rounded shadow-sm">
        <h5>O LabBD é um banco de dados completo e intuitivo, desenvolvido para cadastrar, alterar e deletar registros de forma prática e organizada. 
            Ideal para pesquisadores e equipes científicas, ele permite centralizar todas as informações sobre seus experimentos em um único lugar, 
            garantindo controle total sobre os dados. Com o LabBD, você pode acompanhar o progresso dos seus estudos, editar detalhes conforme 
            necessário e excluir registros obsoletos com segurança. Tudo isso em uma plataforma moderna que prioriza a usabilidade e a confiabilidade. 
            Simplifique a gestão dos seus experimentos com o LabBD!
        </h5>
    </div>

    <!--<br><br>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Faixa 1</th>
                    <th>Faixa 2</th>
                    <th>Faixa 3</th>
                    <th>Faixa 4</th>
                    <th>Total</th>
                    <th>Zerar</th>
                </tr>
            </thead>
            <tbody>-->
                <!--<?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    $soma=$linha['faixa1total'] + $linha['faixa2total']  + $linha['faixa3total'] + $linha['faixa4total'];
                    echo '<tr>
                            <td style="word-wrap: break-word">' 
                                . $linha['nome'] . 
                            '</td>';
                    echo '<td> 
                            <form method="post" action="editaFaixa1.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <p>' . $linha['faixa1qnt'] . '/' . $linha['faixa1total'] . '</p>
                            </form>
                    </td>';

                    echo '<td> 
                            <form method="post" action="editaFaixa2.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <p>' . $linha['faixa2qnt'] . '/' . $linha['faixa2total'] . '</p>
                            </form>
                    </td>';

                    echo '<td> 
                            <form method="post" action="editaFaixa3.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <p>' . $linha['faixa3qnt'] . '/' . $linha['faixa3total'] . '</p>
                            </form>
                    </td>';

                    echo '<td> 
                            <form method="post" action="editaFaixa4.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                    <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                        <i class="bi bi-plus-circle-fill"></i>
                                    </button>
                                    <p>' . $linha['faixa4qnt'] . '/' . $linha['faixa4total'] . '</p>
                            </form>
                    </td>';

                  echo '<td> 
                            R$ '.$soma.' 
                    </td>';

                    echo '<td> 
                            <form method="post" action="zerar.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: red">
                                    <i class="bi bi-file-arrow-down-fill"></i>
                                </button>
                            </form>
                    

                    </td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>-->
</div>    

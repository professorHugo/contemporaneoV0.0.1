<?php
#Versão com ajax
if (isset($_GET['BtnClicado'])) {
    include '../../cnf/config.php';

    $matriculaAluno = $_GET['BtnClicado'];
    $QueryNomeAluno = "SELECT * FROM alunos ORDER BY matricula_aluno DESC LIMIT 1";
    sleep(1);
    $resultBuscarNome = mysql_query($QueryNomeAluno);
    $ContBuscarNome = mysql_affected_rows($conexao);

    if ($ContBuscarNome > 0) {
        while ($ResultadoBusca = mysql_fetch_assoc($resultBuscarNome)) {
            $MatriculaReturn = $ResultadoBusca['matricula_aluno'] + 1;
            ?>
            <div class="form-group col-md-3">
                <label for="matricula_aluno">Matrícula: </label>            
                <input type="text" name="matricula_aluno" required id="matricula_aluno" class="form-control" value="<?php echo $MatriculaReturn ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="nome_aluno">Nome do aluno:</label>
                <div id="nome_aluno">
                    <input type="text" name="nome_aluno" required id="nome_aluno" class="form-control" placeholder="Digite o nome do aluno">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="telefone_aluno">Telefone:</label>
                <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control" required>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="form-group col-md-3">
            <label for="matricula_aluno">Matrícula: </label>            
            <input type="text" name="matricula_aluno" required id="matricula_aluno" class="form-control" value="1">
        </div>
        <div class="form-group col-md-6">
            <label for="nome_aluno">Nome do aluno:</label>
            <div id="nome_aluno">
                <input type="text" name="nome_aluno" required id="nome_aluno" class="form-control" placeholder="Digite o nome do aluno">
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="telefone_aluno">Telefone:</label>
            <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control" required>
        </div>
        <?php
    }
}

    
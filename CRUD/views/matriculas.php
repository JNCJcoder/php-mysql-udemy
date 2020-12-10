<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a>
<table class="table table-hover table-striped" id="matriculas">
    <thead>    
        <tr>
            <th>Nome Aluno</th>
            <th>Nome Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <?php
        $query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso 
        FROM alunos, cursos, alunos_cursos
        WHERE alunos_cursos.id_aluno = alunos.id_aluno
        AND alunos_cursos.id_curso = cursos.id_curso";

        $consulta = mysqli_query($conexao, $query);
        
        while($linha = mysqli_fetch_array($consulta)){
            echo '<tr>';
            echo '<td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['nome_curso'].'</td>';
            echo '<td><a href="deleta_matricula.php?id_aluno_curso='.$linha['id_aluno_curso'].'"><i class="fa fa-trash"></i></a></td>';
            echo '</tr>';
        }
    ?>
</table>